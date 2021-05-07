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
<h1>DOCTOR</h1>
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
   <form action="insertdoc_view.php"  method="POST">

    <input type="text" name="DOC_NAME" id="DOC_NAME" placeholder="DOC_NAME" required><br><br>
    <input type="text" name="DOC_ID" id="DOC_ID" placeholder="DOC_ID" required><br><br>
    <h9>Date of birth</h9>
    <input type="date" name="DOC_DOB" id="DOC_DOB" placeholder="DOC_DOB" ><br><br>
    <input type="text" name="DOC_NID" id="DOC_NID" placeholder="DOC_NID" ><br><br>
    <input type="text" name="DOC_EMAIL" id="DOC_EMAIL" placeholder="DOC_EMAIL"><br><br>
    <h9>Joining date</h9>
     <input type="date" name="DOC_JOINING_DATE" id="DOC_JOINING_DATE" placeholder="DOC_JOINING_DATE" ><br><br>
    <input type="text" name="DOC_ADDRESS" id="DOC_ADDRESS" placeholder="DOC_ADDRESS" ><br><br>
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

    <input type="text" name="SPECIALIST" id="SPECIALIST" placeholder="SPECIALIST"><br><br>
   
   
    <input type="text" name="HOSPITAL_NAME" id="HOSPITAL_NAME" placeholder="HOSPITAL_NAME"><br><br>

    <input type="text" name="HOSPITAL_ADDRESS" id="HOSPITAL_ADDRESS" placeholder="HOSPITAL_ADDRESS"><br><br>


    <input type="text" name="HOSPITAL_EMERGENCYNUM" id="HOSPITAL_EMERGENCYNUM" placeholder="HOSPITAL_EMERGENCYNUM"><br><br>

    <input type="submit" name="ok" value="submit">
    </div>
<br><br>
   

   </form>
   </div>
   </url>
</body>
</html>';


?>