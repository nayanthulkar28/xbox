<?php 
	require './check-login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/sell-games-style.css">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/d894fc2311.js" crossorigin="anonymous"></script>
	<title>Sell games</title>
</head>
<body>
	<?php 
		require './header.php';
	?>
	<div class="container">
		<form action="sell-games_submit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input type="file" name="file">
			<>
			<button type="submit" name="sell-submit">Upload games</button>
		</form>
	</div>
	<script src="./js/header.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>