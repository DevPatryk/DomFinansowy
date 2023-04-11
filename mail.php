<?php


$from = $_POST["email"];
$subject = "Wiadomość ze strony Dom Finansowy Ślesin";
$to = "pmatuszak1607@gmail.com";
$message = $_POST["msg"]
$txt = "email" . $email . "\r\n" . "\r\n" . "Treść:" . $message;

$headers = "Reply-to:" . $from . "\r\n";

$mail_status = mail($to , $subject ,$message, $headers);
