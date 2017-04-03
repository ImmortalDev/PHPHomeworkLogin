<?php session_start() ?>
<!DOCTYPE html>

<html>
<head>
	<title>Login Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>
<body>
    <div class="login-page">
        <div class="form">
            <form method="post" action=''>
                 <input type="text" placeholder="User Name"  name="txtUsername" > <br>
                <input type="password" placeholder="Password" name="txtPassword"> <br>
                <input type="submit">
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>

    <?php

    if (isset($_POST['txtUsername']) && $_POST['txtPassword']){
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];

        $userLoop = array("admin","vichit","prohos");
        $passLoop = array("123", "123", "123");

        for ($i =0; $i <count($userLoop); $i++) {
            for ($j =0; $j <count($passLoop) ; $j++) {
                if ($j == $i) {
                    if ($username == $userLoop[$i] && $password == $passLoop[$j]) {
                        $_SESSION['current_user'] = $username;
                        header("location:information_page.php");

                    }
                }
            }
        }
    }
    ?>
</body>
</html>
