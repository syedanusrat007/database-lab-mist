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

    <input type="text" name="ID" id="email" placeholder="ID for OLD People" required><br><br>
    <input type="text" name="Name" id="email" placeholder="Name " ><br><br>
    <input type="date" name="BD" id="email" placeholder="DOB" ><br><br>
    <input type="text" name="Address" id="email" placeholder="Address"><br><br>
	<input type="text" name="Phone" id="email" placeholder="Phone" ><br><br>
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
	<input type="date" name="Day" id="email" placeholder="Joining Date" ><br><br>
    <input type="text" name="EDUCATION" id="email" placeholder="EDUCATION" ><br><br>
    <input type="text" name="Hobby" id="email" placeholder="Hobby" ><br><br>
     
    <input type="text" name="Med_list" id="email" placeholder="Med_list" ><br><br>
    <input type="text" name="Diease" id="email" placeholder="Diease" ><br><br>
   <input type="text" name="Relogion" id="email" placeholder="Relogion" ><br><br>
    <input type="text" name="O_food_restriction" id="email" placeholder="Food Restriction" ><br><br>
    <input type="text" name="Status" id="email" placeholder="Status" ><br><br>

   <input type="date" name="email" id=""  placeholder="Date_of_dead" ><br><br>
    <input type="text" name="Reason_of_dead" id="email" placeholder="Reason_of_dead" ><br><br>
    <input type="text" name="Burried_place" id="email"  placeholder="Burried_place" ><br><br>

	
	
    <input type="submit" name="ok" id="submit"></div>
   

  
   </form>
   </div>
</url>
</body>
</html>';




?>