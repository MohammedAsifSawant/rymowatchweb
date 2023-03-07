<html>
	<head>
		<title>
			registrationpage...
		</title>
       <link rel="stylesheet" href="reges.css">
	</head>
	<body>
		<img class="background1" src="bg1.jpg">
		<div class="container">
			<div class="mainbox">
				<fieldset>
				<a href="login.php">Login</a>
				<h1>Registration</h1>
				<div class="form">
					<form action="register.php" method="post">
						<label>Username<span>*</span></label>
						<br>
						<input type="text" name="username">
						<br><br>
						<label>Email<span>*</span></label>
						<br>
						<input type="email" name="email">
						<br><br>
						<label>Password<span>*</span></label>
						<br>
						<input type="password" name="password">
						<br><br>
						<label>Confirm Password<span>*</span></label>
						<br>
						<input type="password" name="cpassword">
						<br><br><br>
						<input type="submit" name="Login" value="Sign up" class="button">
					</form>
				</div>
				</fieldset>
			</div>
		</div>	
	</body>
</html>