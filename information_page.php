<?php session_start() ?>
<!DOCTYPE html>
 <html>
 <head>
 	 <title>Information Page</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
 <body>
    <div class="jumbotron">
        <div class="container">
            <?php
            if (isset($_SESSION['current_user'])) {
                if ($_SESSION['current_user'] == "admin") {
                    echo "<h1>Admin page</h1>";
                } elseif ($_SESSION['current_user'] == "vichit") {
                    echo "<h1>Your Account is: </h1> <br>";
                    echo "<h3>Group ES1</h2><br>";
                    echo "<h3>Name : VICHIT  </h2><br>";
                }else{
                    echo "<h1>Your Account is: </h1> <br>";
                    echo "<h3>Group ES1</h2><br>";
                    echo "<h3>Name : Prohos  </h2><br>";
                }
                    
                
            }
            ?>
        </div>
    </div>
 </body>
 </html>
