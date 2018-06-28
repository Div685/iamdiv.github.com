<?php 
	if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$msg = $_POST['message'];
	
	$to = 'divyeshpatel685@gmail.com';
	$subject = 'Form Submission';
	$message = "Name: ".$name."\n"."Following message: "."\n\n".$msg;
	$header = "From: ".$email;
	
	if(mail($to, $subject, $message, $header)){
		echo "<h1>Sent Successfully!! Thank you "." ".$name.", we will contact you shortly </h1>";
	}else{
		echo "Sorry Something went wrong!!";
	} 
	
	}
	
?>