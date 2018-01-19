<?php
	$user = "myact120_admin";
	$pass = "activateIngredients4now";
	$url = "hp213.hostpapa.com";
	$db = "myact120_db_mai";
	
	
	// $url = "localhost";
	// $user = "root";
	// $pass = "root";
	// $db = "db_mai";

	$link = mysqli_connect($url, $user, $pass, $db); 

	if(mysqli_connect_errno()) {
		printf("Connection Failed: %s\n", mysqli_connect_error());
		exit();
	}

	



?>