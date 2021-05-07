<?php

 $c1 = oci_connect("nusrat", "1234", 'localhost/XE');




  
   
    $d_name    = $_POST['Name'];
    $d_ammount          = $_POST['Amount'];
    $d_date            = date('m.d.y', strtotime($_POST['BD']));
    $d_blood           = $_POST['Blood_group'];
    $d_occupation      = $_POST['OCUPATION'];
    $addrs        = $_POST['house_no'].$_POST['street_no'].$_POST['city'];
 
    
 



    
        $stmt = "INSERT INTO donar (d_name,income,d_date,d_blood,d_occupation,addrs)
        VALUES (:d_name_bv,:d_ammount_bv,to_date('" . $d_date . "','MM/DD/YYYY')
        ,:d_blood_bv,:d_occupation_bv,:addrs_bv)";
        $s    = oci_parse($c1, $stmt);


       // oci_bind_by_name($s, ':d_id_bv',  $d_id);
        oci_bind_by_name($s, ':d_name_bv', $d_name );
        oci_bind_by_name($s, ':d_ammount_bv',  $d_ammount);
        oci_bind_by_name($s, ':d_blood_bv', $d_blood);
        oci_bind_by_name($s, ':d_occupation_bv', $d_occupation );
        oci_bind_by_name($s, ':addrs_bv)', $addrs  );
    
        
    
        oci_execute($s);
       
    

   

}

echo ' <h1> Table of donar</h1>';
    $stid = oci_parse($c1, 'SELECT  d_id.nextval,d_name,d_ammount,d_date,d_blood,d_occupation,d_address FROM donar');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>ID</th>';
echo'<th>Name</th>';
echo'<th>Amount</th>';
echo'<th>Date</th>';
echo'<th>BLOOD GROUP</th>';
echo'<th>OCUPATION</th>';
echo'<th>ADDRESS</th>';




while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";



?>
            



 