<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/d894fc2311.js" crossorigin="anonymous"></script>

	<title>Xbox Official Site</title>
</head>
<body>

	<!-- NavBar -->
	<?php 
		require 'header.php';
	?>

	<!-- Carousel Slider -->
	<div class="carousel-container">
		<i class="fas fa-chevron-left prevBtn"></i>
		<i class="fas fa-chevron-right nextBtn"></i>
		<div class="carousel-slide">
			<img src="./images/pic-4.jpg" alt="" id="lastclone">
			<img src="./images/pic-1.jpg" alt="">
			<img src="./images/pic-2.jpg" alt="">
			<img src="./images/pic-3.jpg" alt="">
			<img src="./images/pic-4.jpg" alt="">
			<img src="./images/pic-1.jpg" alt="" id="firstclone">
		</div>
	</div>

	<!-- Option Bar -->
	<div class="option-bar">
		<div class="op-img">
			<img src="./images/op-bar-1.svg" alt="">
			<p>Console</p>
		</div>
		<a href="buy-all-games.php">
			<div class="op-img">
				<img src="./images/op-bar-2.svg" alt="">
				<p>Buy games</p>
			</div>
		</a>
		<div class="op-img">
			<img src="./images/op-bar-3.svg" alt="">
			<p>Game pass</p>
		</div>
		<div class="op-img">
			<img src="./images/op-bar-4.svg" alt="">
			<p>Accessories</p>
		</div>
		<?php
			if($_SESSION['type'] === "admin") {
				echo '<a href="./sell-games.php">
						<div class="op-img">
							<img src="./images/op-bar-5.svg" alt="">
							<p>Sell games</p>
						</div>
					</a>';	
			}
		?>
		<div class="op-img">
			<img src="./images/op-bar-6.svg" alt="">
			<p>My account</p>
		</div>
	</div>
	<script src="./js/main-js.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>