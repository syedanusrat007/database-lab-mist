<?php

$c1 = oci_connect("PROJECT", "Helloworld321", 'localhost/XE');

echo '
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="style3.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action=" "  method="POST">
			<h1>Login Form</h1>
			<div>
				<input type="text" name="us" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="password"  name="ps" placeholder="Password" required="" id="password" />
			</div>
			<div>
				<input type="submit" name="ok" value="Log in" />
				
				
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>';



  if (isset($_POST['ok']))
{

  $user          = $_POST['us'];
    $pass            = $_POST['ps'];




  if (isset($user) OR isset($pass) )

  {
    $stid = oci_parse($c1, 'SELECT name, password FROM admin');
    oci_execute($stid);

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
echo $row[0];;
         echo   $item[0];
    for ($x = 0; $x < 4; $x++) {
      
        if($row[$x]== $user  && $item[$x]==$pass )
   {

          header ('Location: adminhome.php');
   }
   else header('Location: login2.php?message=Enter correct username and password.');

    }
   
}
oci_free_statement($stid);
}
}






