<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }

          echo ' <h1> Relatives </h1>';
    $stid = oci_parse($c1, 'SELECT  *FROM oldrelation_view1');
                oci_execute($stid);


echo "<table border='1'>\n";
echo'<th>Name</th>';
echo'<th>Doctor Name</th>';
echo'<th>Fee</th>';
echo'<th>Visited Date</th>';






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


<form action="qureyold.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'



?>