<?php
if(!empty($_POST["send"])) {
	$firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$toEmail = "admin@phppot_samples.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "index.php";
?>