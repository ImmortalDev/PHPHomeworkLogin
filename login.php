
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>
<body>
	<form action="information_page.php" method="POST">

        <label>Username: </label>
        <input class="form-control" type="text" name="txtUsername" placeholder="Username">
		<br>
		<label>Password: </label>
		<input class="form-control" type="password" name="txtPassword" placeholder="Password"><br>
		<input class="btn btn-primary mybtn" type="submit" name="btnSubmit" >

	</form>

</body>
</html>
