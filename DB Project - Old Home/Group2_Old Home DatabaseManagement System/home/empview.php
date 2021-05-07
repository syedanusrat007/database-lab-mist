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

<ul>
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
      <a href="#">Employee</a>
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
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">

<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';


   $emp1  = $_POST['Type']; // / name banu
   $emp2  = $_POST['value']; /// di

   $emp3  = $_POST['tbox']; /// present add
/*$update = " update TABLENAME SET LASTMOD=current_timestamp WHERE TABLE_NAME=:table;";
$stmt = oci_parse($conn, $update);
oci_bind_by_name($stmt, ':table', $table);
$result = oci_execute($stmt, OCI_DEFAULT);
if (!$result) {
  echo oci_error();   
}
*/
if($emp3 == 'PRESENT ADDRESS')
 { $stid1 = oci_parse($c1, "UPDATE  EMPLOYEE set PRESENT_ADDRESS ='$emp2' where NAME = INITCAP('$emp1')");
  
            oci_execute($stid1);
 }


 if($emp3 == 'Email')
 { $stid1 = oci_parse($c1, "UPDATE  EMPLOYEE set EMAIL ='$emp2' where NAME = INITCAP('$emp1')");
  
            oci_execute($stid1);
 }
    


    if($emp3 == 'SALARY')
 {// $stid1 = oci_parse($c1, "UPDATE  EMPLOYEE set SALARY ='$emp2' where NAME = INITCAP('$emp1')");

     //oci_execute($stid1);
     $sql = "BEGIN SAVEPOINT dup_found;
UPDATE employee set SALARY ='$emp2' where NAME = INITCAP('$emp1');
EXCEPTION
WHEN DUP_VAL_ON_INDEX THEN
ROLLBACK TO dup_found;
 END;";
    $std2 = oci_parse($c1, $sql);

  
            oci_execute($std2);
 }
    
              


echo "</table>\n";

          echo ' <h1>Employee</h1>';


     $stid = oci_parse($c1, "SELECT  *FROM EMPLOYEE " );
                     oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>EMP_ID</th>';
echo'<th>M_ID</th>';
echo'<th>NAME</th>';
echo'<th>NID</th>';
echo'<th>DOB</th>';
echo'<th>PRESENT_ADDRESS</th>';
echo'<th>PARMANENT_ADDRESS</th>';
echo'<th>EMAIL</th>';
echo'<th>BLOOD_GROUP</th>';
echo'<th>EDUCATION</th>';
echo'<th>EXPERIENCE</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>SALARY</th>';
echo'<th>TYPE</th>';





while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
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


<form action="empudate.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'




?>