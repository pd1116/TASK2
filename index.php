<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" a href="style.css">
	
</head>
<body>
	<div class="container index-blocks">
	    <img src="profile1.png"/>
		<form  action="validation.php" method="POST">
			<div>
				<input type="text" name="username" placeholder="Enter the Username"/>	
			</div>
			<div>
				<input type="password" name="password" placeholder="Password"/>
			</div>
            <section>
                <p>New User?<a href="register.html"> Register</a></p>
            </section>
			<!--<input type="submit" type="submit" value="LOGIN" class="btn-login"/>-->
            <button type="submit" name="submit_login">SIGN IN</button>
		</form>
	</div>
</body>
</html>