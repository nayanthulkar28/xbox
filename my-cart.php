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
	<script src="https://kit.fontawesome.com/d894fc2311.js" crossorigin="anonymous"></script>
	<!-- Custom StyleSheet -->
	<link rel="stylesheet" type="text/css" href="./css/my-cart-style.css">
	<title>Online Game Store</title>
</head>
<body>
	<?php 
		require 'header.php';
	?>
	<div class="container">
		<h1>Games List</h1>
		<?php 
			require './include/dbh-inc.php';
			$sql = 'select * from cart where userId='.$_SESSION["userId"].';';
			$res = mysqli_query($conn,$sql);
			if(mysqli_num_rows($res)==0) {
				echo '<p class="empty-list">Empty List</p>';
			}
			else {
				while($row = mysqli_fetch_assoc($res)) {
					$sql2 = 'select * from games where gameId="'.$row["gameId"].'";';
					$res2 = mysqli_query($conn,$sql2);
					$row2 = mysqli_fetch_assoc($res2);
					if($row2["price"] == 0) $row2["price"] = "Free";
					echo '<div class="games">
							<div class="game-pic">
								<img src="'.$row2["imgDir"].'" alt="">
							</div>
							<div class="game-disc">
								<p>'.$row2["gameName"].'</p>
								<p>Category: '.$row2["category"].'</p>
								<p>Disc: '.$row2["disc"].'</p>
								<p>Price: '.$row2["price"].'</p>
							</div>
							<div class="btn">
								<form action="./include/buy-game-inc.php" method="post" accept-charset="utf-8">
									<input type="hidden" name="gameId" value="'.$row2["gameId"].'">
									<button type="submit" name="buy-submit">Buy & Download</button>
								</form>
								<form action="./include/remove-game-inc.php" method="post" accept-charset="utf-8">
									<input type="hidden" name="gameId" value="'.$row2["gameId"].'">
									<button type="submit" name="remove-submit">Remove</button>
								</form>
							</div>
						</div>';
				}
			}
		?>
	</div>
	<script src="./js/header.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>