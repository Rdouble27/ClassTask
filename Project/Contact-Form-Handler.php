<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'rafikrokon27@gmail.com';
$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
				    "User Message: $message.\n".
					
$to = "rafikrokon@yahoo.com";					

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email,$email_body,$headers);

header("Location: Contact.php");

?>