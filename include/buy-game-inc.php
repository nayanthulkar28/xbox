<?php 
if(isset($_POST["buy-submit"])) {
	require '../check-login.php';
	require './dbh-inc.php';

	$userId = $_SESSION['userId'];
	$gameId = $_POST['gameId'];

	$sql = 'delete from cart where userId="'.$userId.'" and gameId="'.$gameId.'";';
	mysqli_query($conn,$sql);
	
	$sql = 'select * from bought where userId="'.$userId.'" and gameId="'.$gameId.'";';
	$res = mysqli_query($conn,$sql);
	$freq=0;
	if(mysqli_num_rows($res)>0) {
		$row = mysqli_fetch_assoc($res);
		$freq = $row["freq"];
	}
	$freq++;
	echo $freq;

	$sql = 'delete from bought where userId="'.$userId.'" and gameId="'.$gameId.'";';
	mysqli_query($conn,$sql);	
	
	$sql = 'insert into bought(userId,gameId,freq) values("'.$userId.'","'.$gameId.'","'.$freq.'")';
	mysqli_query($conn,$sql);
	header("Location: ../my-cart.php?error=gamedownloaded");
	exit();
}
else {
	header("Location: ../main-page.php");
	exit();
}
?>