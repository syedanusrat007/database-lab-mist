<?php

echo '<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
  <div class="header" align="center">
       <h1>Delete from Employee</h1>
  </div>
   
   <form action="delete2.php"  method="POST" >
   <div  align="center">
   	      <tr>
   		    <td>Enter The Employee Id</td>
          </tr>
   			<td><input type="text" name="Type" class="textInput" ></td>

   			<td><input type="submit" name="ok" value="Press"></td>

     </div>


   </form>


   <form action="qureyemp.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>

</body>
</html>';

?>