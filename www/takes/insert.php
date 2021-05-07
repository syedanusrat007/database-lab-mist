
<?php

  $c1 = oci_connect("nusrat", "1234", 'localhost/XE');


  

$O_id= $_POST['ID'];
$O_quantity= $_POST['medicine_quantity'];
 $med_name = $_POST['Name'];

 
$stmt= "INSERT INTO TAKES (O_id,O_quantity,med_name ) VALUES (:O_id_bv,:O_quantity_bv,:med_name_bv)";
 $s=oci_parse($c1, $stmt);


 
oci_bind_by_name($s, "O_id_bv", $O_id);
oci_bind_by_name($s, "O_quantity_bv", $O_quantity);
oci_bind_by_name($s, "med_name_bv", $med_name);

 


         oci_execute($s);
        echo "inserted<br>\n";
?>



	

