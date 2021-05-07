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
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>DOCTOR</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';


   $emp1  = $_POST['Type'];//person name
   $emp2  = $_POST['value'];//new value

   $emp3  = $_POST['tbox'];//select kon option update korbo
/*$update = " update TABLENAME SET LASTMOD=current_timestamp WHERE TABLE_NAME=:table;";
$stmt = oci_parse($conn, $update);
oci_bind_by_name($stmt, ':table', $table);
$result = oci_execute($stmt, OCI_DEFAULT);
if (!$result) {
  echo oci_error();   
}
*/
if($emp3 == 'DOC_EMAIL')
 { $stid1 = oci_parse($c1, "UPDATE  DOCTOR set DOC_EMAIL ='$emp2' where DOC_NAME =INITCAP('$emp1')");
  
            oci_execute($stid1);
 }


 if($emp3 == 'DOC_ADDRESS')
 { $stid1 = oci_parse($c1, "UPDATE  DOCTOR set DOC_ADDRESS ='$emp2' where DOC_NAME =INITCAP('$emp1')");
  
            oci_execute($stid1);
 }
    


    if($emp3 == 'HOSPITAL_NAME')
 { $stid1 = oci_parse($c1, "UPDATE  DOCTOR set HOSPITAL_NAME ='$emp2' where DOC_NAME =INITCAP('$emp1')");
  
            oci_execute($stid1);
 }
    
              


echo "</table>\n";

          echo ' <h1>DOCTOR</h1>';


     $stid = oci_parse($c1, "SELECT  *FROM DOCTOR " );
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
    echo "</tr>\n";
}
echo "</table>\n";

echo '


<!DOCTYPE html>
<html>

<body>


<form action="docup.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'




?>