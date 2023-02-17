HTML
<!DOCTYPE html>
<html>
<head>
  <style>
    #wrapper {
	width: 800px;
	margin: 0 auto;
  background-color: red;
}

#login-form {
	float: left;
	width: 400px;
	padding: 20px;
	border: 1px solid #000;
}

#register-form {
	float: right;
	width: 400px;
	padding: 20px;
	border: 1px solid #000;
}

#login-form h1, #register-form h1 {
	margin: 0 0 20px 0;
	padding: 0;
	font-weight: normal;
	font-size: 18px;
}

#login-form label, #register-form label {
	display: block;
	margin: 0 0 10px 0;
	font-weight: bold;
}

#login-form input, #register-form input {
	width: 300px;
	height: 25px;
	padding: 5px;
	border: 1px solid #ccc;
}

#login-form input[type="submit"], #register-form input[type="submit"] {
	width: 100px;
	height: 30px;
	margin-top: 20px;
	cursor: pointer;
}

  </style>
	<title>Login/Register Form</title>
</head>
<body>
	<div id="wrapper">
		<div id="login-form">
			<h1>Login</h1>
			<form action="login.php" method="post">
				<label for="username">Username: </label>
				<input type="text" name="username" id="username" />
				<br />
				<label for="password">Password: </label>
				<input type="password" name="password" id="password" />
				<br />
				<input type="submit" value="Login" />
			</form>
		</div>
		<div id="register-form">
			<h1>Register</h1>
			<form action="register.php" method="post">
				<label for="username">Username: </label>
				<input type="text" name="username" id="username" />
				<br />
				<label for="password">Password: </label>
				<input type="password" name="password" id="password" />
				<br />
				<label for="confirm_password">Confirm Password: </label>
				<input type="password" name="confirm_password" id="confirm_password" />
				<br />
				<input type="submit" value="Register" />
			</form>
		</div>
	</div>
</body>
</html>