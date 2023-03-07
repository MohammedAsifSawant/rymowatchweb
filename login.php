<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>
			loginpage...
		</title>
	    <link rel="stylesheet" href="reges.css">
	</head>
	<body>
		<img class="background1" src="bg1.jpg">
		<div class="container">
		<a href="adminlogin.php" class="admin" >Admin Login</a> 
			<div class="mainbox">

				<fieldset>	
				
				<a href="signup.php">Sign up</a>
				<h1>Login</h1>
				<div class="form">
					<form action="validation.php" method="post">
						<label>Username<span>*</span></label>
						<br>
						<input type="text" name="username">
						<br><br>
						<label>Password<span>*</span></label>
						<br>
						<input type="password" name="password">
						<br><br><br>
						<input type="submit" name="Login" value="Login" class="button">
					</form>
				</div>
				</fieldset>
			</div>
		</div>
	</body>
</html>
