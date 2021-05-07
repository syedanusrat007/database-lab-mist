<?php

 $c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');


  if(!$c1){

    $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }




   $employee_ID  = $_POST['Type'];

   echo  $employee_ID ;

echo "</table>\n";

          echo ' <h1>Employee</h1>';

      //"SELECT * FROM Employee WHERE Employee.lname='$fname'"    
    //$stid = oci_parse($c1, "SELECT  *FROM oldpeople where oldpeople.O_id = $Oldid" );
        //  "SELECT * FROM Employee WHERE Employee.lname='$name'"
     $stid = oci_parse($c1, "DELETE  FROM EMPLOYEE  where EMPLOYEE.EMP_ID= '$employee_ID' "  );
     echo 'hi';
    // oci_bind_by_name($stid, ':e', $_POST['Type']);
                oci_execute($stid);
echo 'hlw';

     




$stid1 = oci_parse($c1, "SELECT  *FROM EMPLOYEE " );
                     oci_execute($stid1);


echo "<table border='1'>\n";
echo'<th>EMP_ID</th>';
echo'<th>M_ID</th>';
echo'<th>NAME</th>';
echo'<th>NID</th>';
echo'<th>DOB</th>';
echo'<th>PRESENT_ADDRESS</th>';
echo'<th>PARMANENT_ADDRESS</th>';
echo'<th>EMAIL</th>';
echo'<th>BLOOD_GROUP</th>';
echo'<th>EDUCATION</th>';
echo'<th>EXPERIENCE</th>';
echo'<th>JOINING_DATE</th>';
echo'<th>SALARY</th>';
echo'<th>TYPE</th>';




while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
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


<form action="delete1.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>

'

?>