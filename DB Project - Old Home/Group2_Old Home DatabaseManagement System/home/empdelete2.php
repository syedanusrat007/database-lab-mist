<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');


  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }
  
  echo '
<!DOCTYPE html>
<html>
<head>
<title>Old HOME</title>
	<link rel="stylesheet" href="style1.css" type="text/css"/>
</head>
<body>

<url>
  <li><a href="#">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Insertion</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="empudate.php">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li><a href="#">About Us</a></li>
</url>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Old People</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';




   $emp_ID  = $_POST['Type'];

   
echo "</table>\n";

          echo ' <h1>Employee</h1>';

      //"SELECT * FROM Employee WHERE Employee.lname='$fname'"    
    //$stid = oci_parse($c1, "SELECT  *FROM oldpeople where oldpeople.O_id = $Oldid" );
        //  "SELECT * FROM Employee WHERE Employee.lname='$name'"
     $stid = oci_parse($c1, "DELETE  FROM employee  where employee.EMP_ID= '$emp_ID' "  );
     echo 'hi';
    // oci_bind_by_name($stid, ':e', $_POST['Type']);
                oci_execute($stid);
echo 'hlw';

     




$stid1 = oci_parse($c1, "SELECT  *FROM employee " );
                     oci_execute($stid1);


echo "<table border='1'>\n";
echo'<th>ID</th>';
echo'<th>Name</th>';
echo'<th>National ID</th>';
echo'<th>Date of birth</th>';
echo'<th>PERSENT_ADDRESS</th>';
echo'<th>PERMANENT_ADDRESS</th>';
echo'<th>EMAIL</th>';
echo'<th>BLOOD_GROUP</th>';
echo'<th>EDUCATION</th>';
echo'<th>EXPERIENCE </th>';
echo'<th>JOINING_DATE</th>';
echo'<th>LEAVING_DATE</th>';
echo'<th>SALARY </th>';
echo'<th>TYPE </th>';





while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
 
    }
    echo "</tr>\n";
}
echo "</table>\n";





echo '


<!DOCTYPE html>
<html>

<body>


<form action="empdelete.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'

?>