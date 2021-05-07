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
<h1>Employee</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';



 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

echo 'insert';

if (isset($_POST['ok']))
{
    $EMP_ID          = $_POST['ID'];
    $M_ID            = $_POST['MID'];
    $NAME            = $_POST['Name'];
    $NID             = $_POST['NID'];
    $DOB             = date('m.d.y', strtotime($_POST['BD']));
    $PERSENT_ADDRESS   = $_POST['PAddress'];
    $PERMANENT_ADDRESS = $_POST['Address'];
    $EMAIL             = $_POST['Email'];
    $BLOOD_GROUP       = $_POST['tbox'];
    $EDUCATION         = $_POST['EDUCATION'];
    $EXPERIENCE        = $_POST['EXPERIENCE'];
    $JOINING_DATE      = date('m.d.y', strtotime($_POST['J_Day']));
    $LEAVING_DATE      = date('m.d.y', strtotime($_POST['L_Day']));
    $SALARY            = $_POST['SALARY'];
    $TYPE              = $_POST['EXPERIENCE'];

    if (isset($EMP_ID) OR isset($NID) OR isset($NAME) OR isset($DOB) OR isset($TYPE)
        OR isset($EDUCATION) OR 
        isset($PERSENT_ADDRESS) OR isset($PERMANENT_ADDRESS)
    )
    {
        ///table EMPLOYEE
        $stmt = "INSERT INTO EMPLOYEE 
        (EMP_ID,M_ID, NAME, NID, DOB, PRESENT_ADDRESS, PARMANENT_ADDRESS, EMAIL, BLOOD_GROUP, EDUCATION, EXPERIENCE, JOINING_DATE, LEAVING_DATE, SALARY, TYPE) 
        VALUES (:EMP_ID_bv,:M_ID_bv,:NAME_bv,:NID_bv,to_date('" . $DOB . "','MM/DD/YYYY')
            ,:PRESENT_ADDRESS_bv,:PARMANENT_ADDRESS_bv,:EMAIL_bv,:BLOOD_GROUP_bv,:EDUCATION_bv,:EXPERIENCE_bv
        ,to_date('" . $JOINING_DATE . "','MM/DD/YYYY'),to_date('" . $LEAVING_DATE . "','MM/DD/YYYY'),:SALARY_bv,:TYPE_bv)";
        $s    = oci_parse($c1, $stmt);

         echo 'insert2';

        oci_bind_by_name($s, ':EMP_ID_bv', $EMP_ID);
        oci_bind_by_name($s, ':M_ID_bv', $M_ID);
        oci_bind_by_name($s, ':NAME_bv', $NAME);
        oci_bind_by_name($s, ':NID_bv', $NID);
        oci_bind_by_name($s, ':PRESENT_ADDRESS_bv', $PERSENT_ADDRESS);
        oci_bind_by_name($s, ':PARMANENT_ADDRESS_bv', $PERMANENT_ADDRESS);
        oci_bind_by_name($s, ':EMAIL_bv', $EMAIL);
        oci_bind_by_name($s, ':BLOOD_GROUP_bv', $BLOOD_GROUP);
        oci_bind_by_name($s, ':EDUCATION_bv', $EDUCATION);
        oci_bind_by_name($s, ':EXPERIENCE_bv', $EXPERIENCE);
        oci_bind_by_name($s, ':SALARY_bv', $SALARY);
        oci_bind_by_name($s, ':TYPE_bv', $TYPE);

         echo 'insert3';
        oci_execute($s);
         echo 'insert3';
       
    }

    else{
        echo '<div style="color:red;font-weight: bold;">Please fillup  all the fields of the form</div>';
    }


}


    $stid = oci_parse($c1, 'SELECT EMP_ID,NAME,NID,DOB,PRESENT_ADDRESS,PARMANENT_ADDRESS,EMAIL
        ,BLOOD_GROUP,EDUCATION,EXPERIENCE,JOINING_DATE,LEAVING_DATE,SALARY,TYPE FROM EMPLOYEE');
                oci_execute($stid);


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



while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
}
echo "</table>\n";




?>