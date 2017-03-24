
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<style type="text/css">
		form{ text-align: center;}
		input{padding: 10px; margin-bottom: 10px; }
	</style>


</head>
<body>
	<form action="information_page.php" method="POST">
        <label>Username: </label>
        <input class="form-control" type="text" name="txtUsername" placeholder="Username">
		<br>
		<label>Password: </label>
		<input type="text" name="txtPassword" placeholder="Password"><br>
		<input type="submit" name="btnSubmit" >
	</form>

</body>
</html>
