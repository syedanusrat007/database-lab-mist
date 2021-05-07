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
      <a href="oldinsert.php">Old People</a>
      <a href="empinsert.php">Employee</a>
      <a href="goverinsert.php">Governing body</a>
      <a href="insert_doc.php">Doctor</a>
       <a href="medicine.php">Medicine</a>
        <a href="donarinsert1.php">Donar</a>
        <a href="Acount_insert.php">Account</a>
      <a href="rel.php">Old people relative</a>
      <a href="food.php">Food</a>
      <a href="mp1.php">Maintainance</a>
        <a href="eventin">Event</a>
          <a href="gof.php">Government Fund </a>
          
        
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="oldsrchv.php">Old People</a>
      <a href="empsrchv.php">Employee</a>
       <a href="medview.php">Medicine</a>
        <a href="donarv.php">Donar</a>
        <a href="#">Account</a>
      <a href="relviewup.php">Old people relative</a>
      <a href="docdelv.php">Doctor</a>
      <a href="foodview.php">Food</a>
      <a href="#">Maintainance</a>
       <a href="#">Dead People</a>
        <a href="eventview.php">Event</a>
          <a href="gofview.php">Government Fund </a>
           <a href="gview.php">Governing Body </a>
         
    </div>
  </li>

   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="oldpudate.php">Old People</a>
      <a href="empudate.php">Employee</a>
       <a href="medupdate.php">Medicine</a>
        <a href="accupdate.php">Account</a>
      <a href="reludate.php">Old people relative</a>
      <a href="docup.php">Doctor</a>
      <a href="foodupdt.php">Food</a>
        <a href="eventsupdate.php">Event</a>
           <a href="gudate.php">Governing Body </a>
       
    </div>
  </li>

   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="olddelete.php">Old People</a>
      <a href="empdelete.php">Employee</a>
       <a href="meddel.php">Medicine</a>
        <a href="donardelete.php">Donar</a>
        <a href="accdelete.php">Account</a>
      <a href="delete1OR.php">Old people relative</a>
      <a href="deletdoc.php">Doctor</a>
      <a href="fooddel.php">Food</a>
      <a href="#">Maintainance</a>
        <a href="eventsdelete.php">Event</a>
           <a href="delete1g.php">Governing Body </a>
  
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
<h1>Cost Of Food</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';



          
  
     $stid = oci_parse($c1, "SELECT  *FROM food_view" );
                     oci_execute($stid);




echo "<table border='1'>\n";


echo'<th>Date</th>';
echo'<th>Cost</th>';





while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
 
    }
    echo "</tr>\n";
}
echo "</table>\n";



?>