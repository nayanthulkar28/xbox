<?php  
if(isset($_POST['sign-up-submit'])) {
	
	require 'dbh-inc.php';

	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	$pwd = $_POST['pwd'];
	$cpwd = $_POST['cpwd'];
	$country = $_POST['country'];
	$dob = $_POST['dob'];

	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		header("Location: ../sign-up.php?error=invalidemail&fname=".$firstName."&lname=".$laseName.
			"&country=".$country."&dob=".$dob);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $firstName.$laseName)){
		header("Location: ../sign-up.php?error=invalidname&email=".$email."&country=".$country."&dob=".$dob);
		exit();
	}
	else if($pwd !== $cpwd) {
		header("Location: ../sign-up.php?error=passwordmismatch&fname=".$firstName."&lname=".$laseName.
			"&email=".$email."&country=".$country."&dob=".$dob);
		exit();
	}
	else {
		$sql = "select email from users where email=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../sign-up.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt,"s",$email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0) {
				echo $resultCheck;
				// header("Location: ../sign-up.php?error=usertaken&fname=".$firstName."&lname=".$laseName.
				// "&country=".$country."&dob=".$dob);
				// exit();
			}
			else {
				$sql = "insert into users(firstName,lastName,email,password,country,dob,type) 
				values(?,?,?,?,?,?,'user')";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)) {
					header("Location: ../sign-up.php?error=sqlerror");
					exit();
				}
				else {
					mysqli_stmt_bind_param($stmt,"ssssss",$firstName,$lastName,$email,$pwd,$country,$dob);
					mysqli_stmt_execute($stmt);
					header("Location: ../sign-up.php?error=success");
					exit();
				}
			}
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {	
	header("Location: ../sign-up.php");
	exit();
}
?>