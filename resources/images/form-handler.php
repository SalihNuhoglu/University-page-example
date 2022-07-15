<?php
$name = $_POST['name'];
$visitor_mail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com'

$email_subject ='New Form Submission'

$email_body = "User name: $name.\n". 
                "User Email: $visitor_mail.\n". 
                "Subject: $subject.\n". 
                "User Message: $message.\n". 

$to = 'ahmedi6547@gmail.com';
$headers = "From": $email_from \r\n";
$headers .= "Reply-To": $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");


             


?>