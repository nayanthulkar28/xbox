<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Custom Stylesheet -->
		<link rel="stylesheet" type="text/css" href="./css/signup-style.css">
		<title>Login</title>
	</head>
	<body>
		<div class="xbox-live">
			<img src="./images/xbox-live.png" alt="">
		</div>
		<div class="login-box">
			<img src="./images/ms-logo.png" alt="">
			<div class="login-content">
				<form action="./include/sign-up-inc.php" method="post" accept-charset="utf-8">
					<div class="p">
						<p>Create account</p>
						<?php
							if($_GET['error'] == "invalidemail") {
								echo '<p class="error-msg">* invalid email address</p>';
							}
							else if($_GET['error'] == "invalidname") {
								echo '<p class="error-msg">* first/last name is not alphanumeric</p>';
							}
							else if($_GET['error'] == "passwordmismatch") {
								echo '<p class="error-msg">* password mismatched</p>';
							}
							else if($_GET['error'] == "sqlerror") {
								echo '<p class="error-msg">* internal error, please fill it again</p>';
							}
							else if($_GET['error'] == "usertaken") {
								echo '<p class="error-msg">* email id is already registered</p>';
							}
						?>
					</div>
					<input type="text" name="fname" placeholder="First name" required>
					<input type="text" name="lname" placeholder="Last name" required>
					<input type="text" name="email" placeholder="Someone@gmail.com" required>
					<input type="text" name="pwd" placeholder="Password" required>
					<input type="text" name="cpwd" placeholder="Conform-password" required>
					<input type="text" name="country" placeholder="Country">
					<input type="text" name="dob" placeholder="Date of birth" onfocus="(this.type='date')" onblur="(this.type)='text'">
					<button type="submit" name="sign-up-submit">Sign up</button>
				</form>
			</div>
		</div>
	</body>
</html>