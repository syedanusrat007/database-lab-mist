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
<h1>Governing Body</h1>
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
   <form action="G_insert.php"  method="POST">

    <input type="text" name="ID" id="email" placeholder="ID for Governing_body" required><br><br>
    <input type="text" name="NID" id="email" placeholder="NID for Governing_body" required><br><br>
    <input type="text" name="Name" id="email" placeholder="Name" required><br><br>
    <input type="date" name="BD" id="email" placeholder="Date_of_birth" required><br><br>
	<input type="text" name="OCUPATION" id="email" placeholder="OCUPATION" required><br><br>
    <input type="text" name="EDUCATION" id="email" placeholder="EDUCATION" required><br><br>
    <input type="text" name="PAddress" id="email" placeholder="Present Address" required><br><br>
    <input type="text" name="Address" id="email" placeholder="Permenant Address" ><br><br>
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
	
	<input type="date" name="Day" id="email" placeholder="Joining date" ><br><br>
    <input type="number" name="EXPERIENCE" id="email" placeholder="EXPERIENCE" ><br><br>
    <input type="date" name="Day" id="email" placeholder="Fund date" ><br><br>
    <input type="number" name="Income" id="email" placeholder="Income" ><br><br>

	
	
    <input type="submit" name="ok" id="submit"></div>
   

  
   </form>
   </div>
</url>
</body>
</html>';




?>