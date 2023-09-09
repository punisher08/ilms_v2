<?php
require_once dirname(__DIR__).'/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jhomignacio08@gmail.com';
$mail->Password = 'bogdvzuxvyvitptf'; 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->setFrom('noreply@gmail.com');

// $mail = new PHPMailer(true);
// $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
// $mail->isSMTP();
// $mail->Host = 'smtp.sendgrid.net';
// $mail->SMTPAuth = true;
// $mail->Username = 'apikey';
// $mail->Password = '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'; 
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port = 587;
// $mail->setFrom('admin@jretech.com');

// 
// jhomel.i@onlinemarketinggurus.com.au
// 72F48DC456439B806DAA955B2214834997C5
// smtp.elasticemail.com
// 2525


// C736EF7567D2C42E54DAB4B142B49CDDCD854CCA88499F1F26684F6E63A0ACEBDC5E66A31EF576E4B54EB87DF3C3CBCD