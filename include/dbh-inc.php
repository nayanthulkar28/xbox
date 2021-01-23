<?php 
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "password";
	$dbname = "xbox";

	$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

	if(!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}
?>