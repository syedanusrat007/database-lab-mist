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
<h1>Employee</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';


   $emp1  = $_POST['date'];
   $emp2  = $_POST['value'];

   $emp3  = $_POST['tbox'];
/*$update = " update TABLENAME SET LASTMOD=current_timestamp WHERE TABLE_NAME=:table;";
$stmt = oci_parse($conn, $update);
oci_bind_by_name($stmt, ':table', $table);
$result = oci_execute($stmt, OCI_DEFAULT);
if (!$result) {
  echo oci_error();   
}
*/
if($emp3 == 'PLACE')
 { $stid1 = oci_parse($c1, "UPDATE  EVENTS set PLACE ='$emp2' where EVENT_DATE = '$emp1'");
  
            oci_execute($stid1);
 }


 if($emp3 == 'COST')
 { $stid1 = oci_parse($c1, "UPDATE  EVENTS set income ='$emp2' where EVENT_DATE = '$emp1'");
  
            oci_execute($stid1);
 }

if($emp3 == 'TYPE')
 { $stid1 = oci_parse($c1, "UPDATE  EVENTS set TYPE ='$emp2' where EVENT_DATE = '$emp1'");
  
            oci_execute($stid1);
 }

 if($emp3 == 'NO_OF_PEOPLE')
 { $stid1 = oci_parse($c1, "UPDATE  EVENTS set NO_OF_PEOPLE ='$emp2' where EVENT_DATE = '$emp1'");
  
            oci_execute($stid1);
 }

    
    
              


echo "</table>\n";

          echo ' <h1>Event</h1>';


     $stid = oci_parse($c1, "SELECT  *FROM EVENTS " );
                     oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>EVENT DATE</th>';
echo'<th>PLACE</th>';
echo'<th>COST AMOUNT</th>';
echo'<th>TYPE</th>';
echo'<th>NO OF PEOPLE</th>';





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


<form action="eventsupdate.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'




?>