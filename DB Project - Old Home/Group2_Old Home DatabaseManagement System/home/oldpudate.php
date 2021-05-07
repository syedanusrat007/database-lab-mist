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
       <a href="O_insert1.php">Old People</a>
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
      <a href="delete1O.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="oldview1.php">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Cost</a>
      <a href="#">Income</a>
    </div>
  </li>
  <li><a href="#">About Us</a></li>
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Old People</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';


          
     $stid = oci_parse($c1, "SELECT  *FROM  oldpeople ");
                oci_execute($stid);



echo "<table border='1'>\n";
echo'<th>Old ID</th>';
echo'<th>Name</th>';
echo'<th>DOB</th>';
echo'<th>Relative Address</th>';
echo'<th>Relative Phone</th>';
echo'<th>Blood_group</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>Status</th>';
echo'<th>EDUCATION</th>';

echo'<th>Hobby</th>';
echo'<th>Med_list</th>';
echo'<th>Diease</th>';
echo'<th>Religion</th>';
echo'<th>Food Restriction</th>';

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
 <br>
 <br>
 <br>
 <link rel="stylesheet" href="style1.css" type="text/css"/>
   <form action="oldupdate2.php"  method="POST" >
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
       <option value="Status">Status</option>
      <option value="Med_list">Med list</option>
      <option value="Diease">Diease</option>
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
      <h1>Update For Deadpeople :( </h1>


   <td><td>Status</td></td>
  <td><input type="text" name="status" class="textInput" ></td>
  <br><br>
   <td><td>Date of death</td></td>
    <td><input type="date" name="dd"  ></td>
    <br><br>
     <td><td>Barried place</td></td>
      <td><input type="text" name="bp" class="textInput" ></td>
      <br><br>
       <td><td>Reason</td></td>
        <td><input type="text" name="dr" class="textInput" ></td>
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

