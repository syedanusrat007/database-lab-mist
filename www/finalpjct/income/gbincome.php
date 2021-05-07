<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');








  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }




  
echo "</table>\n";

          echo ' <h1>Income from Government donation</h1>';

      //"SELECT * FROM Employee WHERE Employee.lname='$fname'"    
    //$stid = oci_parse($c1, "SELECT  *FROM oldpeople where oldpeople.O_id = $Oldid" );
        //  "SELECT * FROM Employee WHERE Employee.lname='$name'"
     $stid = oci_parse($c1, "SELECT  *FROM  gv_income  "  );
                oci_execute($stid);



echo "<table border='1'>\n";
echo'<th>Date</th>';
echo'<th> Amount</th>';





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


<form action="income.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'

?>