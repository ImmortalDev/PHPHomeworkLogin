
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
            <form class="login-form" action="information_page.php" method="post">
                <input type="text" name="txtUsername" placeholder="username"/>
                <input type="password" name="txtPassword" placeholder="password"/>
                <button type="submit">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>

</body>
</html>
