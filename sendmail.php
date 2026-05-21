<?php
$to = "student@gmail.com";
$subject = "Registration Successful";
$message = "Welcome To Stock Pro Academy";
$headers = "From: admin@stockproacademy.com";

mail($to,$subject,$message,$headers);

echo "Email Sent";
?>