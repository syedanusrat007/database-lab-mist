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
      <a href="oldudate.php">Old People</a>
      <a href="empudate.php">Employee</a>
      <a href="#">Governing body</a>
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


          
     echo ' <h1> Table of Governing boby</h1>';
    $stid = oci_parse($c1, 'SELECT * FROM GOVERNING_BODY');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>ID</th>';
echo'<th>National ID</th>';
echo'<th>Date of birth</th>';
echo'<th>Name</th>';
echo'<th>OCUPATION</th>';
echo'<th>EDUCATION</th>';
echo'<th>PERSENT_ADDRESS</th>';
echo'<th>PERMANENT_ADDRESS</th>';
echo'<th>BLOOD_GROUP</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>EXPERIENCE</th>';
echo'<th>GD Date</th>';
echo'<th>Income</th>';




while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
 
    }
    echo "</tr>\n";
}
echo "</table>\n";

echo '<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
  <div class="header" align="center">
       <h1>Delete from Governing boby</h1>
  </div>
   
   <form action="delete2g.php"  method="POST" >
   <div  align="center">
   	      <tr>
   		    <td>Enter The Governing boby Id</td>
          </tr>
   			<td><input type="text" name="Type" class="textInput" ></td>

   			<td><input type="submit" name="ok" value="Press"></td>

     </div>


   </form>


   <form action="gview.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>';

?>