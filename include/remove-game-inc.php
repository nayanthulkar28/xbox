<?php 
if(isset($_POST["remove-submit"])) {
	require '../check-login.php';
	require './dbh-inc.php';

	$userId = $_SESSION['userId'];
	$gameId = $_POST['gameId'];

	$sql = 'delete from cart where userId="'.$userId.'" and gameId="'.$gameId.'";';
	mysqli_query($conn,$sql);
	header("Location: ../my-cart.php?error=gameRemoved");
	exit();
}
else {
	header("Location: ../main-page.php");
	exit();
}
?>