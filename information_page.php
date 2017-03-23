<?php
	$username = $_POST["txtUsername"];
	$password = $_POST["txtPassword"];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php

	if ($username == "admin" && $password=="123") {
 	 ?>
 	 	<h1>Admin</h1>
 	 	<h1>Passoword: <?php echo "$password"; ?></h1>

 	<?php }elseif ($username == "user" && $password == "1234") {

 	?>

 		<h1>User</h1>
 		<h1>Passoword: <?php echo "$password"; ?></h1>

 	<?php } ?>
 </body>
 </html>
