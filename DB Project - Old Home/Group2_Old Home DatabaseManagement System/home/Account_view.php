
<?php

 $c=OCI_connect("PROJECT", "Helloworld321", 'localhost/XE');

    $TRANSAC_ID         = $_POST['TR_ID'];
    $TRANSAC_TYPE       = $_POST['TR_TYPE'];
    $ACC_AMOUNT             = $_POST['ACC_AM'];
    $ACC_DATE              = date('m.d.y', strtotime($_POST['ACC_D']));


 
$stmt= "INSERT INTO ACCOUNT (TRANSACTION_ID, TRANSACTION_TYPE, ACC_AMOUNT, ACC_DATE) VALUES (:TRANSAC_ID_bv,:TRANSAC_TYPE_bv,:ACC_AMOUNT_bv,to_date('" . $ACC_DATE . "','MM/DD/YYYY'))";
 $s=oci_parse($c, $stmt);

        oci_bind_by_name($s, ':TRANSAC_ID_bv', $TRANSAC_ID);
        oci_bind_by_name($s, ':TRANSAC_TYPE_bv', $TRANSAC_TYPE);
        oci_bind_by_name($s, ':ACC_AMOUNT_bv', $ACC_AMOUNT);



 oci_execute($s);
 echo "inserted<br>\n";



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
      <a href="#">Old People Relative</a>
      <a href="#">Dead Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
      <a href="account_page2.php">Account</a>
      <a href="#">Event</a>
      <a href="#">Donar</a>
      <a href="#">Government Fund</a>
      <a href="#">Food</a>
      <a href="#">Maintenance</a>
      <a href="#">Medicine</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Old People Relative</a>
      <a href="#">Dead Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
      <a href="#">Account</a>
      <a href="#">Event</a>
      <a href="#">Donar</a>
      <a href="#">Government Fund</a>
      <a href="#">Food</a>
      <a href="#">Maintenance</a>
      <a href="#">Medicine</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Old People Relative</a>
      <a href="#">Dead Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
      <a href="#">Account</a>
      <a href="#">Event</a>
      <a href="#">Donar</a>
      <a href="#">Government Fund</a>
      <a href="#">Food</a>
      <a href="#">Maintenance</a>
      <a href="#">Medicine</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Old People Relative</a>
      <a href="#">Dead Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
      <a href="#">Account</a>
      <a href="#">Event</a>
      <a href="#">Donar</a>
      <a href="#">Government Fund</a>
      <a href="#">Food</a>
      <a href="#">Maintenance</a>
      <a href="#">Medicine</a>
    </div>
  </li>
  <li><a href="#">Contact Info</a></li>
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Table of Account</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';






 
    $stid = oci_parse($c, 'SELECT *FROM ACCOUNT');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>TRANSACTION ID</th>';
echo'<th>TRANSACTION TYPE</th>';
echo'<th>ACC AMOUNT</th>';
echo'<th>ACC DATE</th>';




while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    //echo "</tr>\n";
}
//echo "</table>\n";





?>



	

