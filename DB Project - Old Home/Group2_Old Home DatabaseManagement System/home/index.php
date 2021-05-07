<?php

echo '
	<html>


<div class="header" align="center">
       <h1>Welcome Admin</h1>
</div>
	<div align=center>
		<form action="login.php" method="POST">
		<input type="text" name="username"><br>
		<input type="password" name="password"><br>
		<input type="submit" value="Login">
		</form><br>
	';
	if(isset($_GET['message']))echo $_GET['message'];
	echo '</div>
	</html>' ;

?>