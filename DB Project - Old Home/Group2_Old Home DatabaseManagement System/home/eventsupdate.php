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


          
     $stid = oci_parse($c1, "SELECT  *FROM  EVENTS ");
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
 <br>
 <br>
 <br>
 <link rel="stylesheet" href="style1.css" type="text/css"/>
   <form action="eventsupview.php"  method="POST" >
  <div class="styled_div2" >
 <div align="center">
 
     Update::
     <br>
     <br>
   
     <td>Enter The Event Date</td>
    <tr>
        <td><input type="date" name="date" ></td> 
    </tr>
     <br>
     </div>
    <br>

 <div align="center">
  <td>Type</td>
  <tr>
<td><select class="styled_input"  name="tbox"></td>
      <option value="PLACE">PLACE</option>
      <option value="COST">COST</option>
      <option value="TYPE">TYPE</option>
      <option value="NO_OF_PEOPLE">NO OF PEOPLE</option>
    </select></div>
    </tr>
    <br>
    <br>

 <div align="center">
     <tr>
      <td><td>Enter value </td></td>
  
  <td><input type="text" name="value" class="textInput" ></td>
  <br><br>
</tr>
    
    <tr>
    <td> <input type="submit" name="ok" value="OK"></td>
     </tr>
    <br>
    <br>
 


  


 </div> </div> </form>

 '





?>

