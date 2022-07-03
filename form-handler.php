<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_form = 'info@yourwesite.com';
$email_subject = 'New form submission';
$email_body = "user name : $name.\n".
               "user email : $visitor_email.\n".
               "Subject : $subject.\n".
               "User Message : $message.\n".;

               $to = 'mumit9027@gmail.com';
               $headers = "From : $email_form \r\n";
               $headers .= "Reply to: $visitor_email  \r\n";

               mail($to, $email_subject, $email_body, $headers);

               header("Location: contact.html");
>