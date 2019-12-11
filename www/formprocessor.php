<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$to_address = 'melatassefaab@gmail.com';
$subject = 'Re-Directed From Website';
$message = '$firstname $lastname $email' . "\n\r";
$headers = 'From: melatassefaab@gmail.com' . "\n";

mail( $to_address, $subject, $message, $headers);

?>