
<?php

$c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');


    
    $f_day         = $_POST['Day'];
    $food_type     = $_POST['Type'];
    $food_cost     = $_POST['Cost'];
    $food_menu     = $_POST['Menu'];
    $f_date        = date('m.d.y', strtotime($_POST['BD']));
    $period        = $_POST['Period'];
     $serial_id     = $_POST['ID'];
   

 
$stmt = "INSERT INTO FOOD
        (f_day,food_type,income,food_menu,f_date,period,serial_id,)
        VALUES (:f_day_bv,:food_type_bv,:food_cost_bv,:food_menu_bv,to_date('" . $f_date . "','MM/DD/YYYY'),:period_bv,:serial_id_bv,)";
        $s    = oci_parse($c1, $stmt);


        oci_bind_by_name($s, ':f_day_bv', $f_day);
        oci_bind_by_name($s, ':food_type_bv', $food_type);
        oci_bind_by_name($s, ':food_cost_bv', $food_cost);
        oci_bind_by_name($s, ':food_menu_bv', $food_menu);
        oci_bind_by_name($s, ':period_bv', $period);
        oci_bind_by_name($s, ':serial_id_bv', $serial_id);
       


        oci_execute($s);
 echo "inserted<br>\n";



echo '
<!DOCTYPE html>
<html>
<head>
<title>Old HOME</title>
  <link rel="stylesheet" href="style1.css" type="text/css"/>
</head>
<body>

<ul>
 
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Insertion</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
      <a href="#">Governing body</a>
      <a href="#">Doctor</a>
       <a href="medicine.php">Medicine</a>
        <a href="#">Donar</a>
        <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="food.php">Food</a>
      <a href="#">Maintainance</a>
        <a href="#">Event</a>
          <a href="#">Government Fund </a>
          
        
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
          <a href="#">Government Fund </a>
           <a href="#">Governing Body </a>
         
    </div>
  </li>

   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
       <a href="medupdate.php">Medicine</a>
        <a href="#">Donar</a>
        <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="#">Doctor</a>
      <a href="#">Food</a>
      <a href="#">Maintainance</a>
        <a href="#">Event</a>
          <a href="#">Government Fund </a>
           <a href="#">Governing Body </a>
       
    </div>
  </li>

   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="#">Old People</a>
      <a href="#">Employee</a>
       <a href="meddel.php">Medicine</a>
        <a href="#">Donar</a>
        <a href="#">Account</a>
      <a href="#">Old people relative</a>
      <a href="#">Doctor</a>
      <a href="#">Food</a>
      <a href="#">Maintainance</a>
        <a href="#">Event</a>
          <a href="#">Government Fund </a>
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
  
</ul>

<div style="padding:25px; margin-top:30px; text-align:center;">
<h1>Table of Food</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';








 
    $stid = oci_parse($c1, 'SELECT *FROM FOOD');
                oci_execute($stid);


echo "<table border='1'>\n";

echo'<th>Day</th>';
echo'<th>Type</th>';
echo'<th>Cost</th>';
echo'<th>Menu</th>';
echo'<th>Date</th>';
echo'<th>Period</th>';
echo'<th>ID</th>';






while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}

echo '


<!DOCTYPE html>
<html>

<body>


<form action="food.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

';




?>



	

