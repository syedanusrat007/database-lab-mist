
<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

$manid= $_POST['manid'];
$TYPE1= $_POST['Type'];
$COST1= $_POST['Cost'];
 $MDATE1 = date('m.d.y', strtotime($_POST['BD']));

 
$stmt= "INSERT INTO MAINTAINANCE(MAN_ID,TYPE,M_COST,M_DATE) VALUES (:manid_bv,:TYPE_bv,:COST_bv,to_date('" . $MDATE1 . "','MM/DD/YYYY'))";
 $s=oci_parse($c1, $stmt);


 oci_bind_by_name($s, "manid_bv", $manid);
oci_bind_by_name($s, "TYPE_bv", $TYPE1);
oci_bind_by_name($s, "COST_bv", $COST1);

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
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">delete</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>

</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Table of Maintaince</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';






 
    $stid = oci_parse($c1, 'SELECT *FROM  medicine');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>M_id</th>';
echo'<th>Type</th>';
echo'<th>Cost</th>';
echo'<th>Date</th>';




while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";



echo '





?>



	

