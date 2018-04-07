<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// require_once("connect.php");
$name = $_GET['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
	<title>Thank you!</title>
	<style type="text/css">
		body {
			color: #555;
			font-family: 'iris_fontregular', sans-serif;

		}
	</style>
</head>
<body>
	<h1>Thank you for your email, <?php echo $name ?></h1>
	<h2>you can expect a response within two days.</h2>
	<!-- <h2>Did you see my portfolio? Return to <a href="index.php">NatalieMastracci.com</a></h2> -->
	<h2>Return to <a href="index.php">myactiveingredient.org</a></h2>

	
</body>
</html>