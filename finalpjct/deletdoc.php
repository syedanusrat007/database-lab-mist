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
<h1>Employee</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';


          
     $stid = oci_parse($c1, "SELECT  *FROM  DOCTOR ");
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
 <br>
 <br>
 <br>
 <link rel="stylesheet" href="style1.css" type="text/css"/>
   <form action="docdelv.php"  method="POST" >
  <div class="styled_div2" >
 <div align="center">
 
     Update::
     <br>
     <br>
   
     <td>Enter The ID</td>
    <tr>
        <td><input type="text" name="Type" class="textInput" ></td> 
    </tr>
     <br>
     </div>
    <br>

 <div align="center">
  <td>Type</td>
  <tr>
<td><select class="styled_input"  name="tbox"></td>
      <option value="DOC_ID">ID</option>
    </select></div>
    </tr>
    <br>
    <br>

    
    <tr>
    <td> <input type="submit" name="ok" value="OK"></td>
     </tr>
    <br>
    <br>
 


  


 </div> </div> </form>

 '





?>

