<?php 
	$email = $_POST['email'];
	$message = $_POST['message'];
	$error = '';

	if(trim($email) == '')
		$error = 'Get your email';
	else if(trim($message) == '')
		$error = 'Get your message';
	else if(strlen($message) < 10)
		$error = 'Your message should be longer than 10 characters';

	if ($error != '') {
		echo $error;
		exit;
	}

	$subject = "=?utf-8?B?".base64_encode("Test message")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain;charset=utf-8\r\n";

	mail('dzigurda2003@gmail.com', $subject, $message);

	header("Location: about.php");
?>