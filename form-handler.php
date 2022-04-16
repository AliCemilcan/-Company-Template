<?php
	$name = $_POST["name"];
	$visitor_email = $_POST["email"];
	$message = $_POST["message"];
	$subject = $_POST["subject"];
	$email_from = "cemilcanali@gmail.com";
	$email_subject = "Inquery";
	$email_body = "User name : $name.\n".
					"User email : $visitor_email.\n".
				"Subject : $subject.\n".
				"User message : $message.\n";
	$to = "devasaacc@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-to: $visitor_email \r\n";
	mail($to,$email_subject, $email_body, $headers);
	header("Location: contact.html");
?>