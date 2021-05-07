<?php

echo '<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
  <div class="header" align="center">
       <h1>update employee table</h1>
  </div>

   
   <form action="empup.php"  method="POST" >
   <div  align="center">
   	
   		    <td>Insert employee name</td>
   			<td><input type="text" name="Type" class="textInput" ></td>

        <td>New present address</td>
        <td><input type="text" name="Type1" class="textInput" ></td>

   			<td><input type="submit" name="ok" value="press"></td>

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