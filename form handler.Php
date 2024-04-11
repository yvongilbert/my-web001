<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$Subject = $_POST['Subject'];
$message = $_POST['message'];

$email_from = 'yg@kabaye.com';

$email_subject = 'New Form Admission'

$email_body = "User Name: $name.\n".
               "User Email: $visitor-email.\n".
                "Subject: $subject.\n";
$to = 'necessaryyvon@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>