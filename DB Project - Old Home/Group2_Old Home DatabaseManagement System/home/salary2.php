<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }

 
 echo ' <h1>Salary</h1>';
 echo 'Heighest Paid Employee';
    $stid = oci_parse($c1, 'SELECT  *FROM height_sal_view2');
                oci_execute($stid);



    



echo "<table border='1'>\n";

echo'<th>Manager Name</th>';
echo'<th>Heighest Salary of Employee</th>';






while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";


echo'

<!DOCTYPE html>
<html>

<body>


<form action="qureyemp.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'



?>