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
      <a href="O_insert1">Old People</a>
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
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="delete1O.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="oldsrchv.php">Old People</a>
      <a href="empsrchv.php">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Employee</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';



echo "</table>\n";

        


   $empname  = $_POST['Type'];


     $stid = oci_parse($c1, "SELECT  *FROM EMPLOYEE where NAME = INITCAP('$empname')" );
                     oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>Old ID</th>';
echo'<th>Name</th>';
echo'<th>DOB</th>';
echo'<th>Relative Address</th>';
echo'<th>Relative Phone</th>';
echo'<th>Blood_group</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>EDUCATION</th>';
echo'<th>Hobby</th>';
echo'<th>Med_list</th>';
echo'<th>Diease</th>';
echo'<th>Religion</th>';
echo'<th>Food Restriction</th>';
echo'<th>Status</th>';
echo'<th>Date_of_dead</th>';
echo'<th>Reason_of_dead</th>';
echo'<th>burried_place</th>';

echo'<th>Age</th>';






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

 <div align="center">
<form action="empsrchv.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>
</div>
</body>
</html>

'




?>
