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
	<div class="mynav">
		<div class="nav-left">
			<div class="empty"></div>
			<a href="" title="" class="ms-logo"><img src="./images/ms-logo.png" alt=""></a>
			<div class="separate"></div>
			<a href="" title="" class="xbox-logo"><img src="./images/xbox-logo.png" alt=""></a>
		</div>
		<div class="nav-mid">
			<ul>
			    <li>Game Pass<i class="fas fa-chevron-down dd"></i></li>
			    <li>Games<i class="fas fa-chevron-down dd"></i></li>
			    <li>Devices<i class="fas fa-chevron-down dd"></i></li>
			    <li>Community<i class="fas fa-chevron-down dd"></i></li>
			    <li>Xbox Support<i class="fas fa-chevron-down dd"></i></li>
			</ul>
			<div class="empty"></div>
		</div>
		<div class="nav-right">
			<div class="all-ms">All Microsoft<i class="fas fa-chevron-down dd"></i></div>
			<div class="nav-search">
				<i class="fas fa-search"></i>
			</div>
			<div class="log">
				<?php  
					if(isset($_SESSION['userId'])) {
						echo '<img src="./images/login-pic.png" alt="">
						<div class="login-dropdown">
							<div class="logdd-up">
								<img src="./images/ms-logo.png" alt="">
								<a href="./include/logout-inc.php?link=true">Sign out</a>
							</div>
							<div class="logdd-down">
								<div class="logdd-down-img"><img src="./images/login-pic.png" alt=""></div>
								<div class="logdd-down-p">
									<p>'.$_SESSION['firstName'].' '.$_SESSION['lastName'].'</p>
									<p>'.$_SESSION['email'].'</p>
								</div>
							</div>
						</div>
						';
					}
					else {
						echo '<a href="login.php"><i class="fas fa-sign-in-alt"></i></a>';
					}
				?>
			</div>
		</div>
	</div>

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


	<script src="./js/main-js.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>