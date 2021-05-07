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
<h1>Donar</h1>
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
   <form action="donarinsert2.php"  method="POST">

    <input type="text" name="ID" id="ID" placeholder="ID for Donar" required><br><br>
    
    <input type="text" name="Name" id="Name" placeholder="Name" ><br><br>
    <input type="text" name="Amount" id="Amount" placeholder="Amount" ><br><br>
    <td>Date</td>
    <input type="date" name="BD" id="BD" placeholder="Date of Birth" ><br><br>
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
    <input type="text" name="OCUPATION" id="OCUPATION" placeholder="OCUPATION" ><br><br>
    <input type="text" name="EXPERIENCE" id="EXPERIENCE" placeholder="Experience"><br><br>
  
    <input type="text" name="house_no" id="house_no" placeholder="house_no"><br><br>
    <input type="text" name="street_no" id="street_no" placeholder="street_no" ><br><br>

     <input type="text" name="city" id="city" placeholder="city" ><br><br>

    <input type="submit" name="ok" id="submit"></div>
   

   </form>
   </div>
</url>
</body>
</html>';

?>