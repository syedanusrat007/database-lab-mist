<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');








  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }




   $Oldname  = $_POST['Type'];

   echo $Oldname ;

echo "</table>\n";

          echo ' <h1>Old People</h1>';

      //"SELECT * FROM Employee WHERE Employee.lname='$fname'"    
    //$stid = oci_parse($c1, "SELECT  *FROM oldpeople where oldpeople.O_id = $Oldid" );
        //  "SELECT * FROM Employee WHERE Employee.lname='$name'"
     $stid = oci_parse($c1, "SELECT  *FROM  oldpeople2 where oldpeople2.O_name= initcap('$Oldname') "  );
                oci_execute($stid);


                echo $stid;





echo "<table border='1'>\n";
echo'<th>Old people ID</th>';
echo'<th> Name</th>';
echo'<th>Date of birth</th>';
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

echo'<th>Date OF Death</th>';
echo'<th>Reason Of Death</th>';
echo'<th>Buried Place</th>';

echo'<th>Age</th>';



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