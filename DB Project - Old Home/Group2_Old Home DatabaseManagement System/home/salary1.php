<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }

 
 echo ' <h1>Salary</h1>';
 echo 'Salary of employee whose salary is greater than avarage salary of employee group by Manager ';
    $stid = oci_parse($c1, 'SELECT  *FROM Emp_view');
                oci_execute($stid);



    



echo "<table border='1'>\n";
echo'<th>Employee ID</th>';
echo'<th>Manager ID</th>';
echo'<th>NAME</th>';
echo'<th>National ID</th>';
echo'<th>Date of Birth</th>';
echo'<th>PRESENT ADDRESS</th>';
echo'<th>PARMANENT ADDRESS</th>';
echo'<th>EMAIL</th>';
echo'<th>BLOOD GROUP</th>';
echo'<th>EDUCATION</th>';
echo'<th>EXPERIENCE</th>';
echo'<th>JOINING DATE</th>';
echo'<th>Leaving DATE</th>';
echo'<th>SALARY</th>';
echo'<th>TYPE</th>';





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