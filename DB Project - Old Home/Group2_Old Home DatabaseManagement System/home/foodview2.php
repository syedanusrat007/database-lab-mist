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




   

    $med1 = $_POST['ID'];//person
   

   
   $med2  = $_POST['value'];//new

   $med3  = $_POST['tbox'];//text select

/*$update = " update TABLENAME SET LASTMOD=current_timestamp WHERE TABLE_NAME=:table;";
$stmt = oci_parse($conn, $update);
oci_bind_by_name($stmt, ':table', $table);
$result = oci_execute($stmt, OCI_DEFAULT);
if (!$result) {
  echo oci_error();   
}
*/
if($med3 == 'Menu')
 { $stid1 = oci_parse($c1, "UPDATE  food set food_menu='$med2' where serial_id  = ('$med1')");
  
            oci_execute($stid1);
 }


 if($med3 == 'Cost')
 { $stid1 = oci_parse($c1, "UPDATE  food set income ='$med2' where serial_id  = ('$med1')");
  
            oci_execute($stid1);
 }
    



    
              


echo "</table>\n";

         


     $stid = oci_parse($c1, "SELECT  *FROM food " );
                     oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>ID</th>';
echo'<th>Day</th>';
echo'<th>Type</th>';
echo'<th>Cost</th>';
echo'<th>Menu</th>';
echo'<th>Date</th>';
echo'<th>Period</th>';






while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
 
    }
    echo "</tr>\n";
}
echo "</table>\n";


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