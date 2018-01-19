<?php
require_once("admin/scripts/connect.php");
require_once("admin/scripts/config.php");

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$street = $_POST['street'];
	$direct = "thankyou.php";
	
	if($street === ""){
		$sendMail = submitMessage($name, $email, $message, $direct);
		$querysert = "INSERT INTO visitors (visitors_name, visitors_email, visitors_message) VALUES ($name, $email, $message)";
		$postit = $link->query($querysert);
		echo $name;
	echo $email;
	echo $message;
	
	} 
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyActiveIngredient</title>
	<link rel="stylesheet" type="text/css" href="prod/css/styles.css">
</head>

<body>
	<h1 class="hidden">title</h1>
	<div id="container">	

		<header  id="headerBack">
			<img id="maiLogo" src="images/logo_mai.svg" alt="my active ingredient logo">
 			<div id="heading">
 				<h1>#MyActiveIngredient</h1>
 				<h3>Peer-to-peer healthcare and curated content on movement as medicine by @janesthornton. Building on #MakeYourDayHarder.</h3>
			</div>

			<div id="sub-head">
				<h2>Check Back Soon!</h2>
				<h3>See how a little movement and can have an incredible impact on your overall health.</h3>
				
	
			</div>
		</header>


		<section id="social">
			<h1>Connect with Us</h1>
			<div id="twitter-feed">
				<a class="twitter-timeline" data-height="600" data-theme="dark" data-chrome="transparent noheader noborders" href="https://twitter.com/MyActivIngrednt?ref_src=twsrc%5Etfw"></a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</section>





		


		



		<!-- CONTACT -->

		<section class="contact-box" id="form">
			<h1 class="hidden">Contact Form</h1>
			<h1 class="title ">We'd Like to Hear From You</h1>
			<!-- like what you see? -->
			<p class=" description" >Why not fill out the form below and say hello?</p>
			<form  action="admin/scripts/insert.php" method="POST">
				<label class="contact-label" for="name">name</label>
				<input class="form-mat" type="text"  id="name" name="name">

				<label class="contact-label" for="email">email</label>
				<input class="form-mat" type="email"  id="email" name="email">

				<label for="street" class="hidden">Street: </label>
				<input class="street hidden" name="street" type="text" size="21" maxlength="30" />

				<label class="contact-label" for="message">message</label>
				<textarea class="form-mat"   id="message" name="message"></textarea>
				<button type="submit"  id="sendbutton">SUBMIT</button>         
                
			</form>
		</section>

		

		
		<footer>
			
			
					
				
				<a id="twitter" href="https://twitter.com/myactivingrednt" target="_blank"><img  src="images/social-twitter.png" alt="twitter logo"></a>
				<h6 class="cright">© My Active Ingredient 2018</h6>
				
				
		</footer>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/easing/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/ScrollToPlugin.min.js"></script>

<script type="text/javascript" src="prod/js/scripts.js"></script>

</body></html>