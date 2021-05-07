<?php

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
<h1>DOCTOR</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';
if (isset($_POST['ok']))
{

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');


   $DOC_NAME          = $_POST['DOC_NAME'];
    $DOC_ID            = $_POST['DOC_ID'];
    $DOC_DOB            = date('m.d.y', strtotime($_POST['DOC_DOB']));
    $DOC_NID            = $_POST['DOC_NID'];
    $DOC_EMAIL            = $_POST['DOC_EMAIL'];
    $DOC_BLOOD_GRP        = $_POST['tbox'];
    $DOC_JOINING_DATE     = date('m.d.y', strtotime($_POST['DOC_JOINING_DATE']));
    $DOC_ADDRESS           = $_POST['DOC_ADDRESS'];
    $SPECIALIST             = $_POST['SPECIALIST'];
    $HOSPITAL_NAME           = $_POST['HOSPITAL_NAME'];
    $HOSPITAL_ADDRESS             = $_POST['HOSPITAL_ADDRESS'];
    $HOSPITAL_EMERGENCYNUM          = $_POST['HOSPITAL_EMERGENCYNUM'];

    if (isset($DOC_NAME) OR isset( $DOC_ID) OR isset($DOC_DOB) OR isset( $DOC_NID)
        OR isset( $DOC_EMAIL) OR 
        isset( $DOC_BLOOD_GRP) OR isset($DOC_JOINING_DATE)OR isset($DOC_ADDRESS) OR 
        isset($SPECIALIST) OR isset($HOSPITAL_NAME)OR isset($HOSPITAL_ADDRESS)OR isset( $HOSPITAL_EMERGENCYNUM)
    )
    {
        ///table EMPLOYEE
        $stmt = "INSERT INTO DOCTOR 
        (DOC_NAME,DOC_ID, DOC_DOB, DOC_NID, DOC_EMAIL, DOC_BLOOD_GRP, DOC_JOINING_DATE, DOC_ADDRESS, SPECIALIST, HOSPITAL_NAME, HOSPITAL_ADDRESS ,HOSPITAL_EMERGENCYNUM) 
        VALUES (:DOC_NAME_bv,:DOC_ID_bv,to_date('" .$DOC_DOB. "','MM/DD/YYYY'),:DOC_NID_bv,:DOC_EMAIL_bv,:DOC_BLOOD_GRP_bv,to_date('" . $DOC_JOINING_DATE . "','MM/DD/YYYY'),:DOC_ADDRESS_bv,:SPECIALIST_bv,:HOSPITAL_NAME_bv,:HOSPITAL_ADDRESS_bv,:HOSPITAL_EMERGENCYNUM_bv)";
        $s = oci_parse($c1, $stmt);

         

        oci_bind_by_name($s, ':DOC_NAME_bv', $DOC_NAME);
        oci_bind_by_name($s, ':DOC_ID_bv', $DOC_ID);
        oci_bind_by_name($s, ':DOC_NID_bv', $DOC_NID);
        oci_bind_by_name($s, ':DOC_EMAIL_bv', $DOC_EMAIL);
        oci_bind_by_name($s, ':DOC_BLOOD_GRP_bv', $DOC_BLOOD_GRP);
        oci_bind_by_name($s,':DOC_ADDRESS_bv', $DOC_ADDRESS);
        oci_bind_by_name($s, ':SPECIALIST_bv', $SPECIALIST);
        oci_bind_by_name($s,':HOSPITAL_NAME_bv', $HOSPITAL_NAME);
        oci_bind_by_name($s, ':HOSPITAL_ADDRESS_bv', $HOSPITAL_ADDRESS);
        oci_bind_by_name($s, ':HOSPITAL_EMERGENCYNUM_bv', $HOSPITAL_EMERGENCYNUM);
     
        oci_execute($s);
        //echo'hi';
       
    }

    else{
        echo '<div style="color:red;font-weight: bold;">Please fillup  all the fields of the form</div>';
          echo'hi';
    }
  }




$stid = oci_parse($c1, 'SELECT * FROM DOCTOR');
                oci_execute($stid);

echo "<table border='1'>\n";
echo'<th>DOC_NAME</th>';
echo'<th>DOC_ID</th>';
echo'<th>DOC_DOB</th>';
echo'<th>DOC_NID</th>';
echo'<th>DOC_EMAIL</th>';
echo'<th>DOC_BLOOD_GRP</th>';
echo'<th>DOC_JOINING_DATE</th>';
echo'<th>DOC_ADDRESS</th>';
echo'<th>SPECIALIST</th>';
echo'<th>HOSPITAL_NAME</th>';
echo'<th>HOSPITAL_ADDRESS</th>';
echo'<th>HOSPITAL_EMERGENCYNUM</th>';

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
   echo "</tr>yuytrertyedf\n";
}
echo "</table>\n";



$stid1 = oci_parse($c1, 'SELECT *FROM phone_view');
                oci_execute($stid1);

echo "<table border='1'>\n";
echo'<th>Doc_name</th>';
echo'<th>Doc_mobile</th>';


while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
   //echo "</tr>yuytrertyedf\n";
}
echo "</table>\n";

echo '


<!DOCTYPE html>
<html>

<body>


<form action="insert_doc.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'


?>