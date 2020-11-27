<?php

// if(isset( $_POST['email']))
// $email = $_POST['email'];
// if(isset( $_POST['subject']))
// $subject = $_POST['subject'];
// if(isset( $_POST['message']))
// $message = $_POST['message'];

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: stepOUT";

mail($email, $subject, $message, $mailheader) or die("Error!");
echo "Email sent!";

?>