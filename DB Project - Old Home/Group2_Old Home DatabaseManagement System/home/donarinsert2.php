<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');


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
      <a href="empinsert.php">Employee</a>
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
      <a href="#">Old People</a>
      <a href="empdelete.php">Employee</a>
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
 
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Donar</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';







    $d_ID      =  $_POST['ID'];
    $d_name      =  $_POST['Name'];
    $d_ammount   = $_POST['Amount'];
    $d_date      = date('m.d.y', strtotime($_POST['BD']));
    $d_blood     = $_POST['tbox'];
    $d_occupation  = $_POST['OCUPATION'];
    $addrs1         = $_POST['house_no'];
    $addrs2         = $_POST['street_no'];
     $addrs3        =$_POST['city'];
   
 
     
  $stmt= "INSERT INTO donar(d_id,d_name,d_ammount,d_date,d_blood,d_occupation,d_address) values ('$d_ID','$d_name','$d_ammount',to_date('" . $d_date . "','MM/DD/YYYY'),'$d_blood','$d_occupation',addrs('$addrs1','$addrs2','$addrs3'))";


        $s   = oci_parse($c1, $stmt);

        oci_execute($s);


echo ' <h1> Table of donar</h1>';
    $stid = oci_parse($c1, 'SELECT  d_id,d_name,d_ammount,d_date,d_blood,d_occupation FROM donar');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>ID</th>';
echo'<th>Name</th>';
echo'<th>Amount</th>';
echo'<th>Date</th>';
echo'<th>BLOOD GROUP</th>';
echo'<th>OCUPATION</th>';





while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";


 $stid1 = oci_parse($c1, "SELECT a.d_name ,a.d_address.city,a.d_address.houseno,a.d_address.streetno from donar a ");
                oci_execute($stid1);



echo '<h1>Address</h1>';

echo "<table border='1'>\n";

echo'<th>Name</th>';
echo'<th>City</th>';
echo'<th>Houseno</th>';
echo'<th>Street no</th>';




  while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
 
    }
    echo "</tr>\n";
}
echo "</table>\n";




?>
            



 