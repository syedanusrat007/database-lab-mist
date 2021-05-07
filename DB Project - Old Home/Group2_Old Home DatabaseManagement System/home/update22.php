<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');


 





  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }




   $Oldname1  = $_POST['Type'];

   $madname1  = $_POST['Type1'];

   echo  $Oldname1;
      echo   $madname1;

/*$update = " update TABLENAME SET LASTMOD=current_timestamp WHERE TABLE_NAME=:table;";
$stmt = oci_parse($conn, $update);
oci_bind_by_name($stmt, ':table', $table);
$result = oci_execute($stmt, OCI_DEFAULT);
if (!$result) {
  echo oci_error();   
}
*/
  $stid1 = oci_parse($c1, "UPDATE  oldpeople set O_status = '$madname1' where O_name =' $Oldname1 '");
            
                 oci_execute( $stid1, OCI_COMMIT_ON_SUCCESS);
              


echo "</table>\n";

          echo ' <h1>Old People</h1>';


     $stid = oci_parse($c1, "SELECT  *FROM oldpeople " );
                     oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>Old people ID</th>';
echo'<th> Name</th>';
echo'<th>Date of birth</th>';
echo'<th>address</th>';
echo'<th>address</th>';
echo'<th>Phone Num</th>';
echo'<th>Blood group</th>';
echo'<th>Joinging Date</th>';
echo'<th>Education</th>';
echo'<th>hobby</th>';
echo'<th>Medicine</th>';
echo'<th>Dieases</th>';
echo'<th>religion</th>';
echo'<th>Food restriction</th>';
echo'<th>Status</th>';




while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
 
    }
    echo "</tr>\n";
}
echo "</table>\n";


?>