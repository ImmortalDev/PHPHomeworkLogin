
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
<<<<<<< Updated upstream
    <div class="login-page">
        <div class="form">
            <form class="register-form" action="information_page.php" method="post">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email address"/>
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form">
                <input type="text" name="txtUsername" placeholder="username"/>
                <input type="password" name="txtPassword" placeholder="password"/>
                <button type="submit">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
=======
	<form action="infor
	mation_page.php" method="POST">

        <label>Username: </label>
        <input class="form-control" type="text" name="txtUsername" placeholder="Username">
		<br>
		<label>Password: </label>
		<input class="form-control" type="password" name="txtPassword" placeholder="Password"><br>
		<input class="btn btn-primary mybtn" type="submit" name="btnSubmit" >

	</form>
>>>>>>> Stashed changes

</body>
</html>
