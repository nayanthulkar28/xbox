<?php

if($_GET['link'] == true) {
	
	require 'dbh-inc.php';
	session_start();
	session_unset();
	session_destroy();
	$_GET['link'] = false;
}
header("Location: ../main-page.php");
exit();

?>