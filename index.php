<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Contact System</h1>
		<h1>Login</h1>

		<form action = "login.php" method = 'POST'>
			<label>Email:</label>
			<input type = "text" id = 'userEmail' name = 'userEmail'> </input><br>
			<br>
			<label>Password:</label>
			<input type = "password" id = 'password' name = "password"> </input><br>
			<br>
			<button type="submit" id = "btn" value="home">Login</button>
		</form>
		<br>
		<form action = "register_db.php" method = 'POST'>
			<button type="submit" id = "btn" value="register">Register</button>
		</form>
	</center>
</body>
</html>