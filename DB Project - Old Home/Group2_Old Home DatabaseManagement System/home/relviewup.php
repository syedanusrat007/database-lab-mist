<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

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


   $old1  = $_POST['Type'];
   $old2  = $_POST['value'];

   $old3  = $_POST['tbox'];
/*$update = " update TABLENAME SET LASTMOD=current_timestamp WHERE TABLE_NAME=:table;";
$stmt = oci_parse($conn, $update);
oci_bind_by_name($stmt, ':table', $table);
$result = oci_execute($stmt, OCI_DEFAULT);
if (!$result) {
  echo oci_error();   
}
*/

 if($old3 == 'O_rel_add')
 { $stid1 = oci_parse($c1, "UPDATE  OldPeopleRelative set O_rel_add='$old2' where OR_id = '$old1' ");
  
            oci_execute($stid1);
 }
    


    if($old3 == 'Ammount')
 { $stid1 = oci_parse($c1, "UPDATE  OldPeopleRelative set Ammount='$old2' where OR_id= '$old1' ");
  
            oci_execute($stid1);
 }
    
              


echo "</table>\n";

          echo ' <h1>Old People Relative</h1>';


      $stid = oci_parse($c1,'SELECT OR_id,OR_NID,OR_name,O_rel_add,OR_blood_grp,O_relation,Ammount FROM OldPeopleRelative');
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
echo "</table>\n";

echo '


<!DOCTYPE html>
<html>

<body>


<form action="reludate.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'




?>