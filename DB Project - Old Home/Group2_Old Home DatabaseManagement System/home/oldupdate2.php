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
      <a href="#">Old People</a>
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
      <a href="reludate.php">Oldpeople relative</a>
      <a href="#">Doctor</a>
    </div>
  </li>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="olddelete.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="oldsrchv.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">

<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';


   $old1  = $_POST['Type'];
   $old2  = $_POST['value'];
   $old3  = $_POST['tbox'];
  $old4  = $_POST['status'];
  $old5  = date('m.d.y', strtotime($_POST['dd']));
   $old6  = $_POST['bp'];
    $old7  = $_POST['dr'];


/*$update = " update TABLENAME SET LASTMOD=current_timestamp WHERE TABLE_NAME=:table;";
$stmt = oci_parse($conn, $update);
oci_bind_by_name($stmt, ':table', $table);
$result = oci_execute($stmt, OCI_DEFAULT);
if (!$result) {
  echo oci_error();   
}
*/



if($old3 == 'Status')
 { 
  $stid1 = oci_parse($c1, "UPDATE  oldpeople set O_status='$old4',O_date_of_dead='$old5' , O_reason_of_dead = '$old7' , O_burried_place = '$old6' where O_id = '$old1'");
  
            oci_execute($stid1);

 $stid3 = oci_parse($c1, "SELECT  *FROM DeathOldPEOPLE " );
                     oci_execute($stid3);

   echo ' <h1>Death OldPeople</h1>';

echo "<table border='1'>\n";
echo'<th>Old ID</th>';
echo'<th>Name</th>';
echo'<th>DOB</th>';
echo'<th>Relative Address</th>';
echo'<th>Relative Phone</th>';
echo'<th>Blood_group</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>Status</th>';
echo'<th>Date_of_dead</th>';
echo'<th>Reason_of_dead</th>';
echo'<th>burried_place</th>';






 while ($row = oci_fetch_array($stid3, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
 
    }
    echo "</tr>\n";
}
echo "</table>\n";








 }


 if($old3 == 'Med_list')
 { $stid1 = oci_parse($c1, "UPDATE  oldpeople set O_medicine_list='$old2' where O_id = '$old1' ");
  
            oci_execute($stid1);
 }
    


    if($old3 == 'Diease')
 { $stid1 = oci_parse($c1, "UPDATE  oldpeople set O_diease='$old2' where O_id = '$old1' ");
  
            oci_execute($stid1);
 }
    
              


echo "</table>\n";

          echo ' <h1>Old People</h1>';


     $stid = oci_parse($c1, "SELECT  *FROM oldpeople " );
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


<form action="oldudate.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'




?>