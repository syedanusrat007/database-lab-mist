<?php

$c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

if (isset($_POST['ok']))
{
    
    $G_ID              = $_POST['ID'];
    $G_NID             = $_POST['NID'];
    $G_NAME            = $_POST['Name'];
    $G_DOB             = date('m.d.y', strtotime($_POST['BD']));
    $OCUPATION         = $_POST['OCUPATION'];
    $EDUCATION         = $_POST['EDUCATION'];
    $PERSENT_ADDRESS   = $_POST['PAddress'];
    $PERMANENT_ADDRESS = $_POST['Address'];
    $BLOOD_GROUP       = $_POST['tbox'];
    $JOINING_DATE      = date('m.d.y', strtotime($_POST['Day']));
    $EXPERIENCE        = $_POST['EXPERIENCE'];
	$gb_date           = date('m.d.y', strtotime($_POST['Day']));
    $income            = $_POST['Income'];
	{
        $stmt = "INSERT INTO GOVERNING_BODY
        (G_ID,G_NID,G_NAME,G_DOB,OCUPATION,EDUCATION,PERSENT_ADDRESS,PERMANENT_ADDRESS
        ,BLOOD_GROUP,JOINING_DATE ,EXPERIENCE,gb_date,income) 
        VALUES (:G_ID_bv,:G_NID_bv,:G_NAME_bv,to_date('" . $G_DOB . "','MM/DD/YYYY')
        ,:OCUPATION_bv,:EDUCATION_bv,
        :PERSENT_ADDRESS_bv,:PERMANENT_ADDRESS_bv,:BLOOD_GROUP_bv
        ,to_date('" . $JOINING_DATE . "','MM/DD/YYYY'),:EXPERIENCE_bv,to_date('" . $gb_date . "','MM/DD/YYYY'),:Income_bv)";
        $s    = oci_parse($c1, $stmt);


        oci_bind_by_name($s, ':G_ID_bv', $G_ID);
        oci_bind_by_name($s, ':G_NID_bv', $G_NID);
        oci_bind_by_name($s, ':G_NAME_bv', $G_NAME);
        oci_bind_by_name($s, ':OCUPATION_bv', $OCUPATION);
        oci_bind_by_name($s, ':EDUCATION_bv', $EDUCATION);
        oci_bind_by_name($s, ':PERSENT_ADDRESS_bv', $PERSENT_ADDRESS);
        oci_bind_by_name($s, ':PERMANENT_ADDRESS_bv', $PERMANENT_ADDRESS);
        oci_bind_by_name($s, ':BLOOD_GROUP_bv', $BLOOD_GROUP);
        oci_bind_by_name($s, ':EXPERIENCE_bv', $EXPERIENCE);
		oci_bind_by_name($s, ':Income_bv', $income);
		


        oci_execute($s);

	}
}

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
      <a href="O_insert1.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
    </div>
  </li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="oldudate.php">Old People</a>
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
      <a href="oldview1.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Governing boby</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';

echo ' <h1> Table of Governing boby</h1>';
    $stid = oci_parse($c1, 'SELECT * FROM GOVERNING_BODY');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>ID</th>';
echo'<th>National ID</th>';
echo'<th>Date of birth</th>';
echo'<th>Name</th>';
echo'<th>OCUPATION</th>';
echo'<th>EDUCATION</th>';
echo'<th>PERSENT_ADDRESS</th>';
echo'<th>PERMANENT_ADDRESS</th>';
echo'<th>BLOOD_GROUP</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>EXPERIENCE</th>';
echo'<th>GD Date</th>';
echo'<th>Income</th>';




while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}




?>
            



 