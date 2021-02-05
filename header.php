<div class="mynav">
	<div class="nav-left">
		<div class="empty"></div>
		<a href="./main-page.php" title="" class="ms-logo"><img src="./images/ms-logo.png" alt=""></a>
		<div class="separate"></div>
		<a href="./main-page.php" title="" class="xbox-logo"><img src="./images/xbox-logo.png" alt=""></a>
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
											<a href="my-cart.php" class="my-cart">My Cart</a>
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