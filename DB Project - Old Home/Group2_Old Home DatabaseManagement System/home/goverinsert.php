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
      <a href="#">Employee</a>
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

echo '<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<title>Old HOME</title>
  <link rel="stylesheet" href="design.css" type="text/css"/>

<body>
<url>
  

   <div class="login" align="center">
   <form action="empinsert2.php"  method="POST">

    <input type="text" name="ID" id="ID" placeholder="ID for employee" required><br><br>
    <input type="text" name="MID" id="MID" placeholder="Manager Id " ><br><br>
    <input type="text" name="Name" id="Name" placeholder="Name" ><br><br>
    <input type="text" name="NID" id="NID" placeholder="National ID" ><br><br>
    <input type="date" name="BD" id="BD" placeholder="Date of Birth" ><br><br>
    <input type="text" name="PAddress" id="PAddress" placeholder="Present Address"><br><br>
    <input type="text" name="Address" id="Address" placeholder="Permanent Address"><br><br>
    <input type="email" name="Email" id="Email" placeholder="Email" ><br><br>
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
    <input type="text" name="EDUCATION" id="EDUCATION" placeholder="Education" ><br><br>
    <input type="text" name="EXPERIENCE" id="EXPERIENCE" placeholder="Experience"><br><br>
   <input type="date" name="J_Day" id="J_Day" placeholder="Joining Date" ><br><br>
    <input type="date" name="L_Day" id="L_Day" placeholder="Leaving Date"><br><br>
    <input type="number" name="SALARY" id="SALARY" placeholder="SALARY"><br><br>
    <input type="text" name="TYPE" id="TYPE" placeholder="TYPE" ><br><br>

    <input type="submit" name="ok" id="submit"></div>
   

   </form>
   </div>
</url>
</body>
</html>';

?>