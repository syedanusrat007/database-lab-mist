<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }

          echo ' <h1> Average Salary of Employee under each manager </h1>';
    $stid = oci_parse($c1, 'SELECT  *FROM ee_view');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>Name</th>';
echo'<th>present address</th>'
echo'<th>Blood group</th>';
echo'<th>Joning date</th>';
echo'<th>Category</th>';





while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";



?>