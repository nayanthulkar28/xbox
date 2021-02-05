<?php 
	require 'check-login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/buy-all-game-style.css">
	<script src="https://kit.fontawesome.com/d894fc2311.js" crossorigin="anonymous"></script>
	<title>Buy games</title>
</head>
<body>
	<?php 
		require 'header.php';
	?>

	<?php 
		if(!isset($_GET['error'])) {
			echo '<p class="error-msg"></p>';
		}
		else {
			if($_GET['error'] === "added") {
				echo '<p class="error-msg">Game added successfully</p>';
			}
			else if($_GET['error'] === "alreadyadded"){
				echo '<p class="error-msg">Game already added in cart</p>';
			}
			else {
				echo '<p class="error-msg">Unable to add</p>';
			}
		}
	?>

	<div class="games">
		<h1>All games</h1>
		<div class="games-container">
			<?php
				require './include/dbh-inc.php';
				$sql = "select * from games;"; 
				$res = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($res)) {
					echo '<div class="single-game">
							<a href=""><img src="'.$row["imgDir"].'" alt=""></a>
							<div class="game-name">
								<p>'.$row["gameName"].'</p>
								<form action="./include/add-game-in-cart-inc.php" method="post" accept-charset="utf-8">
									<input type="hidden" name="gameId" value="'.$row["gameId"].'">
									<button type="submit" name="add-to-cart">Add to cart</button>
								</form>
							</div>
						</div>';
				}
			?>
		</div>
	</div>

	<script src="./js/header.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="./js/buy-all-games.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>