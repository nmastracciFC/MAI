<?php
function redirect_to($location){
	if($location != NULL) {
		header("Location: {$location}");
		exit;
	}

}



function submitMessage($name, $email, $message, $direct) {
	$to = "329243@hp213.hostpapa.com"; 
	$subj = "Message from MAI Form"; 
	$extra = "Reply-To: ".$email; 
	$msg = "name: ".$name."\n\nEmail: ".$email."\n\nComments: ".$message;
	
	mail($to, $subj, $msg, $extra); 
	$direct = $direct."?name={$name}";
	redirect_to($direct);
}





?>