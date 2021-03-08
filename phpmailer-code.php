<?php
use PHPMailer\PHPMailer\PHPMailer; use PHPMailer\PHPMailer\SMTP; use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php'; require 'PHPMailer/PHPMailer.php'; require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.server';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'username';                     //SMTP username
$mail->Password   = 'password';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
$mail->setFrom('from@example.com', 'From Name');
$mail->addAddress('to@example.com', 'To Name');     //Add a recipient
// $mail->addAddress('to@example.com');               //Name is optional
// $mail->addReplyTo('replyto@example.com', 'Reply To Name');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
?>