<?php

require_once("mailSender/class.smtp.php");
require_once("mailSender/class.phpmailer.php");

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "mail.lotuswebstudio.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "cdgzz19@gmail.com";
$mail->Password = "carlos06";
$mail->SetFrom("cdgzz19@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("cdgzz19@gmail.com");

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}
