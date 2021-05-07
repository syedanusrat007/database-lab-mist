
<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');
if (isset($_POST['ok']))
{

    $OR_NID             = $_POST['OR_NID'];
    $OR_name            = $_POST['Name'];
    $O_rel_add         = $_POST['Address'];
    $OR_blood_grp   = $_POST['tbox'];
    $O_relation     = $_POST['Relation'];
    $Ammount       = $_POST['Ammount'];
    

    {
      
        $stmt = "INSERT INTO OldPeopleRelative (OR_NID,OR_name,O_rel_add,OR_blood_grp,O_relation,Ammount)  
        VALUES (:OR_id_bv,:OR_NID_bv,:OR_name_bv,:O_rel_add_bv,
        :OR_blood_grp_bv,:O_relation_bv,:Ammount_bv)";
        $s    = oci_parse($c1, $stmt);


                oci_bind_by_name($s, ':OR_NID_bv', $OR_NID);
        oci_bind_by_name($s, ':OR_name_bv', $OR_name);
        oci_bind_by_name($s, ':O_rel_add_bv', $O_rel_add);
        
        oci_bind_by_name($s, ':OR_blood_grp_bv', $OR_blood_grp);
        oci_bind_by_name($s, ':O_relation_bv', $O_relation);
        oci_bind_by_name($s, ':Ammount_bv', $Ammount);
        


        oci_execute($s);
       
    }

  

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
       <a href="O_insert1.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
	  <a href="#">Relative of Oldpeople</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="empudate.php">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
	  <a href="#">Relative of Oldpeople</a>
    </div>
  </li>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="delete1O.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
	  <a href="#">Relative of Oldpeople</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="oldview1.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
	  <a href="#">Relative of Oldpeople</a>
    </div>
  </li>
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Old People Relation</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';





 
    $stid = oci_parse($c1, 'SELECT *FROM OldPeopleRelative');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>OR_ID</th>';
echo'<th>OR_NID</th>';
echo'<th>Name</th>';
echo'<th>Address</th>';
echo'<th>blood_group</th>';
echo'<th>Relation</th>';
echo'<th>Ammount</th>';





while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}


echo '


<!DOCTYPE html>
<html>

<body>


<form action="rel.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'



?>



	

