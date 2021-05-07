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
      <a href="empinsert.php">Employee</a>
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
      <a href="#">Old People</a>
      <a href="empdelete.php">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
    </div>
  </li>


  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="empsrchv.php">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
 
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Employee</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';


          
     $stid = oci_parse($c1, "SELECT  *FROM  EMPLOYEE ");
                oci_execute($stid);



echo "<table border='1'>\n";
echo'<th>EMP_ID</th>';
echo'<th>M_ID</th>';
echo'<th>NAME</th>';
echo'<th>NID</th>';
echo'<th>DOB</th>';
echo'<th>PRESENT_ADDRESS</th>';
echo'<th>PARMANENT_ADDRESS</th>';
echo'<th>EMAIL</th>';
echo'<th>BLOOD_GROUP</th>';
echo'<th>EDUCATION</th>';
echo'<th>EXPERIENCE</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>Leaving_DATE</th>';


echo'<th>SALARY</th>';
echo'<th>TYPE</th>';




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
   <form action="empview.php"  method="POST" >
  <div class="styled_div2" >
 <div align="center">
 
     Update::
     <br>
     <br>
   
     <td>Enter The Name</td>
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
      <option value="PRESENT ADDRESS">address</option>
      <option value="Email">Email</option>
      <option value="SALARY">SALARY</option>
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

