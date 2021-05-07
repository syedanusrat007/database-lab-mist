<?php

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

echo '<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<title>Old HOME</title>
  <link rel="stylesheet" href="design.css" type="text/css"/>

<body>
<url>
  

   <div class="login" align="center">
   <form action="O_insert.php"  method="POST">

    <input type="text" name="ID" id="ID" placeholder="ID for OLD People" required><br><br>
    <input type="text" name="Name" id="Name" placeholder="Name " required><br><br>
    <input type="date" name="BD" id="BD" placeholder="DOB" required><br><br>
    <input type="text" name="Address" id="Address" placeholder="Address" required><br><br>
	<input type="text" name="Phone" id="Phone" placeholder="Phone" required><br><br>
    <tr>
           <div class="p">
            Blood Group 
    <td><select name="tbox"></td>
      <option value="A+">A+</option>
      <option value="B+">B+</option>
      <option value="AB+">AB+</option>
      <option value="O+">O+</option>
      <option value="A-">A-</option>
      <option value="B-">B-</option>
      <option value="AB-">AB-</option>
      <option value="O-">O-</option>
    </select></tr> </div>
	<input type="date" name="Day" id="Day" placeholder="Joining Date" required><br><br>
    <input type="text" name="EDUCATION" id="EDUCATION" placeholder="EDUCATION" required><br><br>
    <input type="text" name="Hobby" id="Hobby" placeholder="Hobby" required><br><br>
     
    <input type="text" name="Med_list" id="Med_list" placeholder="Med_list" required><br><br>
    <input type="text" name="Diease" id="Diease" placeholder="Diease" required><br><br>
   <input type="text" name="Relogion" id="Relogion" placeholder="Relogion" required><br><br>
    <input type="text" name="O_food_restriction" id="O_food_restriction" placeholder="Food Restriction" required><br><br>
  

	
	
    <input type="submit" name="submit" id="submit"></div>
   

  
   </form>
   </div>
</url>
</body>
</html>';

?>