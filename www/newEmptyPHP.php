<?php
$to_address = 'ali8@simmons.edu';
$subject = 'This is a test of email';
$message = 'This is a test ' . "\n\r";
$message .= 'Will this come through?' . "\n\r";

$headers = 'From: melatassefaab@gmail.com' . "\n";
$headers .= 'Reply: melatassefaab@gmail.com' . "\n";

mail( $to_address, $subject, $message, $headers);
