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
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="medicine.php">Medicine</a>
      <a href="#">Donar</a>
      <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="#">Doctor</a>
      <a href="food.php">Food</a>
      <a href="#">Maintainance</a>
        <a href="#">Event</a>
          <a href="gof.php">Government Fund </a>
     

        
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
       <a href="medview.php">Medicine</a>
        <a href="#">Donar</a>
        <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="#">Doctor</a>
      <a href="foodview.php">Food</a>
      <a href="#">Maintainance</a>
       <a href="#">Dead People</a>
        <a href="#">Event</a>
          <a href="gofview.php">Government Fund </a>
           <a href="#">Governing Body </a>
       
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Cost</a>
    <div class="dropdown-content">
      <a href="event1.php">Event</a>
      <a href="man_view.php">Maintainane</a>
       <a href="medi_view.php">Medicine</a>
       <a href="food1.php">Food</a>
        <a href="total_cview.php">Total Cost</a>
    
      
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Income</a>
    <div class="dropdown-content">
      <a href="dincome.php">Donar</a>
      <a href="gbincome.php">Government Fund</a>
       <a href="govbodyincome.php">Governing Body</a>
        <a href="total_inview.php">Total Income</a>
    
      
    </div>
  </li>
  <li><a href="#">About Us</a></li>
</ul>


<div style="padding:25px; margin-top:30px; text-align:center;">

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
  
  <h1>Insertion In Government Fund Table </h1>
   <div class="login" align="center">
   <form action="gofinsert.php"  method="POST">

    
     <input type="date" name="BD" id="email" placeholder="Date" required><br><br>
      <input type="text" name="ID" id="email" placeholder="ID" required><br><br>
      <input type="text" name="Designation" id="password" placeholder="Designation" required><br><br>
    <input type="text" name="Name" id="email" placeholder="Name" required><br><br>
    <input type="text" name="Amount" id="email" placeholder="Amount" required><br><br>
   
    
    <input type="submit" name="submit" id="submit">
 
   

   </form>
   </div>
</url>
</body>
</html>';

echo '


<!DOCTYPE html>
<html>

<body>


<form action="gof.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'

?>

