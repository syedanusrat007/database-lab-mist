<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

 echo '
<!DOCTYPE html>
<html>
<head>
<title>Old HOME</title>
	<link rel="stylesheet" href="style1.css" type="text/css"/>
</head>
<body>

<ul>
 
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Insertion</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
       <a href="medicine.php">Medicine</a>
        <a href="#">Donar</a>
        <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="#">Food</a>
      <a href="#">Maintainance</a>
       <a href="#">Dead People</a>
        <a href="#">Event</a>
          <a href="#">Government Fund </a>
         
         
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
       <a href="medview.php">Medicine</a>
        <a href="#">Donar</a>
        <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="#">Doctor</a>
      <a href="#">Food</a>
      <a href="#">Maintainance</a>
       <a href="#">Dead People</a>
        <a href="#">Event</a>
          <a href="#">Government Fund </a>
           <a href="#">Governing Body </a>
       
    </div>
  </li>

   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
       <a href="medupdate.php">Medicine</a>
        <a href="#">Donar</a>
        <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="#">Doctor</a>
      <a href="#">Food</a>
      <a href="#">Maintainance</a>
       <a href="#">Dead People</a>
        <a href="#">Event</a>
          <a href="#">Government Fund </a>
           <a href="#">Governing Body </a>
       
    </div>
  </li>

   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
       <a href="meddel.php">Medicine</a>
        <a href="#">Donar</a>
        <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="#">Doctor</a>
      <a href="#">Food</a>
      <a href="#">Maintainance</a>
       <a href="#">Dead People</a>
        <a href="#">Event</a>
          <a href="#">Government Fund </a>
           <a href="#">Governing Body </a>
      
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">cost</a>
    <div class="dropdown-content">
      <a href="event1.php">Event</a>
      <a href="#">Maintainane</a>
       <a href="meddel.php">Medicine</a>
       <a href="meddel.php">Food</a>
        <a href="#">Total Cost</a>
    
      
    </div>
  </li>
    <li><a href="#">Income</a></li>
  
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Table of Medicine</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';

echo '


<!DOCTYPE html>
<html>

<body>


<form action="medicine.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

';


  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }

          echo ' <h1> Cost Of Events</h1>';
    $stid = oci_parse($c1, 'SELECT  *FROM eve_view');
                oci_execute($stid);


echo "<table border='1'>\n";

echo'<th>Place</th>';
echo'<th>Date</th>';
echo'<th>Cost</th>';






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


<form action="cost.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'



?>