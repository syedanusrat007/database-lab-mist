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
      <a href="O_insert1.php">Old People</a>
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
      <a href="oldview1.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Old People</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';

$c1 = oci_connect("nusrat", "1234", 'localhost/XE');

if (isset($_POST['ok']))
{
    $O_id              = $_POST['ID'];
  $O_name            = $_POST['Name'];
    $O_dob             = date('m.d.y', strtotime($_POST['BD']));
    $O_rel_add         = $_POST['Address'];
  $O_rel_phn         = $_POST['Phone'];
  $O_blood_grp       = $_POST['Blood_group'];
  $O_joining_date    = date('m.d.y', strtotime($_POST['Day']));
    $O_education       = $_POST['EDUCATION'];
    $O_hobby           = $_POST['Hobby'];
    $O_medicine_list   = $_POST['Med_list'];
    $O_diease          = $_POST['Diease'];
    $O_religion        = $_POST['Relogion'];
  $O_food_restriction  = $_POST['O_food_restriction'];

  

  
  
    if (isset($O_id) OR isset($O_name) OR isset($O_dob) OR isset($O_rel_add) OR isset($O_rel_phn) OR isset($O_blood_grp) 
    OR isset($O_joining_date) OR isset($O_education) OR isset($O_hobby) OR isset($O_medicine_list) OR isset($O_diease)
        OR isset($O_religion) OR
        isset($O_food_restriction) 

    )
    {
        ///table oldPeople
        $stmt = "INSERT INTO OldPEOPLE (O_id,O_name,O_dob,O_rel_add,O_rel_phn,O_blood_grp,O_joining_date,O_education,O_hobby,O_medicine_list,O_diease,O_religion,O_food_restriction
) 
  
        VALUES (:O_id_bv,:O_name_bv,to_date('" . $O_dob . "','MM/DD/YYYY')
        ,:O_rel_add_bv,:O_rel_phn_bv,:O_blood_grp_bv,
        to_date('" . $O_joining_date . "','MM/DD/YYYY'),:O_education_bv,:O_hobby_bv
        ,:O_medicine_list_bv,:O_diease_bv,:O_religion_bv,:O_food_restriction_bv)";
        $s    = oci_parse($c1, $stmt);


        oci_bind_by_name($s, ':O_id_bv', $O_id);
    oci_bind_by_name($s, ':O_name_bv', $O_name);
        oci_bind_by_name($s, ':O_rel_add_bv', $O_rel_add);
    oci_bind_by_name($s, ':O_rel_phn_bv', $O_rel_phn);
        oci_bind_by_name($s, ':O_blood_grp_bv', $O_blood_grp);
        oci_bind_by_name($s, ':O_education_bv', $O_education);
        oci_bind_by_name($s, ':O_hobby_bv', $O_hobby);
        oci_bind_by_name($s, ':O_medicine_list_bv', $O_medicine_list);
        oci_bind_by_name($s, ':O_diease_bv', $O_diease);
        oci_bind_by_name($s, ':O_religion_bv', $O_religion);
        oci_bind_by_name($s, ':O_food_restriction_bv', $O_food_restriction);
      

        oci_execute($s);
       
    }

    else{
        echo '<div style="color:red;font-weight: bold;">Please fillup  all the fields of the form</div>';
    }


}

echo ' <h1> Table of OldPEOPLE</h1>';
    $stid = oci_parse($c1, 'SELECT * FROM OldPEOPLE');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>ID</th>';

echo'<th>Name</th>';
echo'<th>Date of birth</th>';
echo'<th>Relative Address</th>';
echo'<th>Relative Phone</th>';
echo'<th>Blood_group</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>EDUCATION</th>';
echo'<th>Hobby</th>';
echo'<th>Med_list</th>';
echo'<th>Diease</th>';
echo'<th>Religion </th>';
echo'<th>Food Restriction</th>';





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


<form action="O_insert1.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>
'

?>
            



 