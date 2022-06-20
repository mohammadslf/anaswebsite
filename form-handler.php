<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = info@yourwebsite.com';

$email_subject = New Form Submission';

$email_body = "User Name: $name.\ n".
"User Email: $visitor_email .\ n".
"Subject: $subject .\n".
"User message: $message .\n";

$to = 'mohdanas93098@gmail.com';
 
$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

email($to,$email,$subject,$email_body,$header);

header("Location: contact.html");

?>