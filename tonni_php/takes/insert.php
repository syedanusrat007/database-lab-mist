


<?php


$c1 = oci_connect("MOHOSHINA", "Helloworld32", 'localhost/XE');

if (isset($_POST['ok']))
{
    $O_id= $_POST['ID'];
$O_quantity= $_POST['medicine_quantity'];
 $med_name = $_POST['Name'];
 
    if (isset($O_id) OR isset($O_quantity) OR isset($med_name))
    {
      
        $stmt= "INSERT INTO TAKES (O_id,O_quantity,med_name ) VALUES (:O_id_bv,:O_quantity_bv,:med_name_bv)";
        $s=oci_parse($c1, $stmt);



        oci_bind_by_name($s, "O_id_bv", $O_id);
        oci_bind_by_name($s, "O_quantity_bv", $O_quantity);
        oci_bind_by_name($s, "med_name_bv", $med_name);
      

        oci_execute($s);
       
    }

    else{
        echo '<div style="color:red;font-weight: bold;">Please fillup  all the fields of the form</div>';
    }


}

echo ' <h1> Table of takes</h1>';
    $stid = oci_parse($c1, 'SELECT O_id,O_quantity,med_name FROM TAKES');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>Old people ID</th>';
echo'<th>Medicine quantity</th>';
echo'<th>Medicine Name</th>';




while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";



?>
            



 



	

