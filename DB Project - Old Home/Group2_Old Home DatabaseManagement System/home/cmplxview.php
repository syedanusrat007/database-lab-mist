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
<h1>View Events and Employee Table</h1>
<div style="padding:20px; margin-top:30px; text-align:left;">

</body>

</html>';
if (isset($_POST['ok']))
{

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');


   $EMPID         = $_POST['EMPID'];
    $NAME            = $_POST['NAME'];
    $EVENTDATE            = date('m.d.y', strtotime($_POST['EVENTDATE']));
    $EVENTID            = $_POST['EVENTID'];
    $PLACE            = $_POST['PLACE'];
    $COST           = $_POST['COST'];
    
    if (isset($EMPID) OR isset( $NAME) OR isset($EVENTDATE) OR isset($EVENTID)
        OR isset($PLACE) OR 
        isset($COST) 
    )
    {
        ///table EMPLOYEE
        $stmt = "INSERT INTO Complex_view_trig1
        (EMPID,NAME,EVENTDATE,EVENTID,PLACE,COST) 
        VALUES (:EMPID_bv,:NAME_bv,to_date('" .$EVENTDATE. "','MM/DD/YYYY'),:EVENTID_bv,:PLACE_bv,:COST_bv)";
        $s = oci_parse($c1, $stmt);

         

        oci_bind_by_name($s, ':EMPID_bv', $EMPID);
        oci_bind_by_name($s, ':NAME_bv', $NAME);
        oci_bind_by_name($s, ':EVENTID_bv', $EVENTID);
        oci_bind_by_name($s, ':PLACE_bv', $PLACE);
        oci_bind_by_name($s, ':COST_bv', $COST);
        
        oci_execute($s);
        //echo'hi';
       
    }

    else{
        echo '<div style="color:red;font-weight: bold;">Please fillup  all the fields of the form</div>';
          echo'hi';
    }
  }


 echo'
<h1>Event Table</h1>';


    $stid1 = oci_parse($c1, 'SELECT *FROM EVENTS1');
                oci_execute($stid1);


echo "<table border='1'>\n";
echo'<th>EVENTID</th>';
echo'<th>EVENTDATE</th>';
echo'<th>PLACE</th>';
echo'<th>COST</th>';
echo'<th>TYPE</th>';
echo'<th>NOPEOPLE</th>';
echo'<th>SPONSORDED</th>';

while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
   //echo "</tr>yuytrertyedf\n";
}
echo "</table>\n";


echo'
<br>
<br>';




 echo'
<h1>Employee Table</h1>';



$stid = oci_parse($c1, 'SELECT  *FROM EMPLOYEE1');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>ID</th>';
echo'<th>ManagerID</th>';
echo'<th>Name</th>';
echo'<th>National ID</th>';
echo'<th>Date of birth</th>';
echo'<th>PERSENT_ADDRESS</th>';
echo'<th>PERMANENT_ADDRESS</th>';
echo'<th>EMAIL</th>';
echo'<th>BLOOD_GROUP</th>';
echo'<th>EDUCATION</th>';
echo'<th>EXPERIENCE </th>';
echo'<th>JOINING_DATE</th>';
echo'<th>LEAVING_DATE</th>';
echo'<th>SALARY </th>';
echo'<th>TYPE </th>';
echo'<th>Age</th>';



while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
}
echo "</table>\n";



echo '


<!DOCTYPE html>
<html>

<body>


<form action="complxin.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'


?>