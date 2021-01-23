<?php 

if(isset($_POST['login-submit'])) {

	require 'dbh-inc.php';

	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "select * from users where email=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)) {
		header("Location: ../login.php?error=sqlerror");
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt,"s",$email);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($result)) {
			if($pwd === $row['password']) {
				session_start();
				$_SESSION['userId'] = $row['userId'];
				$_SESSION['firstName'] = $row['firstName'];
				$_SESSION['lastName'] = $row['lastName'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['type'] = $row['type'];
				header("Location: ../main-page.php?error=success");
				exit();
			}
			else {
				header("Location: ../login.php?error=wrongpwd");
				exit();
			}
		}
		else {
			header("Location: ../login.php?error=nouser");
			exit();
		}
	}

}
else {
	header("Location: ../login.php");
	exit();
}

?>