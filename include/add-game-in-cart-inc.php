<?php 
	require '../check-login.php';
	if(isset($_POST['add-to-cart'])) {
		require './dbh-inc.php';
		$gameId = $_POST['gameId'];
		$userId = $_SESSION['userId'];
		$sql = 'select * from cart where userId="'.$userId.'" and gameId="'.$gameId.'";';
		$res = mysqli_query($conn,$sql);
		if(mysqli_num_rows($res) > 0) {
			header("Location: ../buy-all-games.php?error=alreadyadded");
			exit();
		}
		$sql = 'insert into cart(userId,gameId) values("'.$userId.'", "'.$gameId.'")';
		$res = mysqli_query($conn,$sql);
		if($res) {
			header("Location: ../buy-all-games.php?error=added");
			exit();
		}
		else {
			header("Location: ../buy-all-games.php?error=unabletoadd");
			exit();
		}
	}
	else {
		header("Location: ../buy-all-games.php");
		exit();
	}
?>