<?php

echo '<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
  <div class="header" align="center">
       <h1>Details of Old People</h1>
  </div>
   
   <form action="oldview2.php"  method="POST" >
   <div  align="center">
   	      <tr>
   		    <td>Enter The Name</td>
          </tr>
   			<td><input type="text" name="Type" class="textInput" ></td>

   			<td><input type="submit" name="ok" value="Serach"></td>

     </div>


   </form>


<form action="qureyold.php" method="POST">

        <tr>

            <td><input type="submit" name="ok" value="Back"></td>
        </tr>
</form>


</body>
</html>';

?>