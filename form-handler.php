<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'your@website.com';

$email_from = 'New Form Submisson';

$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n"; 

$to = 'ssinghrrishabh@gmail.com'

$header = "From: $email_from \r\n";

$header = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)


header("loaction: contact.html");
?>