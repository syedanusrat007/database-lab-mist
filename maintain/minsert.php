
<?php

  $c1 = oci_connect("MOHOSHINA", "Helloworld32", 'localhost/XE');


$TYPE1= $_POST['Type'];
$COST1= $_POST['Cost'];
 $MDATE1 = date('m.d.y', strtotime($_POST['BD']));

 
$stmt= "INSERT INTO MAINTAINCE(TYPE,COST,MDATE) VALUES (:TYPE_bv,:COST_bv,to_date('" . $MDATE1 . "','MM/DD/YYYY'))";
 $s=oci_parse($c1, $stmt);


 
oci_bind_by_name($s, "TYPE_bv", $TYPE1);
oci_bind_by_name($s, "COST_bv", $COST1);

 


         oci_execute($s);
        echo "inserted<br>\n";
?>



	

