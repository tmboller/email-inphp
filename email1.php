<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



$mail = new PHPMailer(true);

try {
    $name123 = 'wenzile@mightycomms.co.za';
    //Server settings
    $mail->SMTPDebug = 3;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'tumelofaith924@gmail.com';                     // SMTP username
    $mail->Password   = 'ntsakoaphane@1';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('tumelofaith924@gmail.com', 'Tumelo Aphane');
    $mail->addAddress($name123, 'Tumelo');     // Add a recipient
   

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hellow World';
    $mail->Body    = 'inventory system hellow world 123dmfvkjdsbkbfldkbdjdsjkdf';
    //$mail->AltBody = ' jkhuwghef iuhwiu  hwei';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}