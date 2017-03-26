<?php
	$username = $_POST["txtUsername"];
	$password = $_POST["txtPassword"];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	 <title>Information </title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
 <body>
    <div class="jumbotron">
        <div class="container">
            <?php

            if ($username == "admin" && $password=="123") {
                ?>
                <h1>Admin</h1>
                <h1>Password: <?php echo "$password"; ?></h1>

            <?php }elseif ($username == "user" && $password == "1234") {

                ?>

                <h1>User</h1>
                <h1>Password: <?php echo "$password"; ?></h1>

            <?php }else{ ?>
                <div class="alert alert-danger" role="alert">
                    <p>Wrong user name password</p>
                </div>

            <?php }?>
        </div>

    </div>

 </body>
 </html>
