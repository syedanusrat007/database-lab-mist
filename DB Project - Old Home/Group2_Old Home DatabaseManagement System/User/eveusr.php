<?php

$c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');


echo '
<!DOCTYPE html>
<html>
<head>
<title>Old Home Database Management System</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
  <link rel="icon" href="home.ico" type="image/x-icon">
</head>
<body>

<ul>
  <li><a href="user.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="oldusr.php">Old People</a>
      <a href="oldrelusr.php">Old People Relative</a>
      <a href="empusr.php">Employee</a>
      <a href="docusr.php">Doctor</a>
      <a href="eveusr.php">Event</a>
      <a href="foodusr.php">Food</a>
    </div>
  </li>
  <li><a href="donate.php">Donate</a></li>
  <li><a href="#">Contact Info</a></li>
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>List of events that were held</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">


</body>

</html>';

if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }

          
    $stid = oci_parse($c1, 'SELECT  *FROM eventsusr_view');
                oci_execute($stid);


echo "<table border='1' width='100%' height='150'>\n";
echo'<th>EVENT ID</th>';
echo'<th>EVENT DATE</th>';
echo'<th>PLACE</th>';
echo'<th>TYPE</th>';
echo'<th>NO OF PEOPLE</th>';
echo'<th>SPONSORDED BY</th>';



while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>
