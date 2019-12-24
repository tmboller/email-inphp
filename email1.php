<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



 $mail = new PHPMailer(true);


 if(isset($_POST) & !empty($_POST)){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    if(!isset($name) || empty($name)){
        $error[] = "Name is required";
    }
    
    if(!isset($email) || empty($email)){
        $error[] = "E-Mail is required";
    }
    
    if(!isset($subject) || empty($subject)){
        $error[] = "Subject is required";
    }
    
    if(!isset($message) || empty($message)){
        $error[] = "Message is required";
    }
    
    if(!isset($error) || empty($error)){

            try {
             $name123 = 'tumelo@mightycomms.co.za';
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
            $mail->Subject = $subject;
	        $mail->Body    = $message . " Name : " . $name . ".\n E-Mail : " . $email;

                $mail->send();
            echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                    }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Contact form in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
	<div class="row">
		<form class="col-md-6 col-md-offset-3" method="post">
			<h2>Contact Us</h2>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Full Name" required="">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email" required="">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Subject</label>
		    <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Subject" required="">
		  </div>
		  <textarea class="form-control"  name="message" rows="3" placeholder="Enter Your Query Here" required=""></textarea>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>
</body>
</html>