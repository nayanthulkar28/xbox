<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="./css/login-style.css">
	<title>Login</title>
</head>
<body>
	<div class="xbox-live">
		<img src="./images/xbox-live.png" alt="">
	</div>
	<div class="login-box">
		<img src="./images/ms-logo.png" alt="">
		<div class="login-content">
			<form action="./include/login-inc.php" method="post" accept-charset="utf-8">
				<p>Sign in</p>
				<input type="text" name="email" placeholder="Email" required>
				<input type="text" name="pwd" placeholder="password" required>
				<p>No account ? <a href="sign-up.php" title="">Create one !</a></p>
				<button type="submit" name="login-submit">Sign in</button>
			</form>
		</div>
	</div>
</body>
</html>