<?php 

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;

 require __DIR__."/vendor/autoload.php";

 $mail = new PHPMailer(true);

//using smtp server for authentication
 //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

 $mail->isSMTP();
 $mail->SMTPAuth = true;

 $mail->Host = "smtp.gmail.com";
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 $mail->Port = 587;
 $mail->Username = "ecorisequest@gmail.com";
 $mail->Password = "tqhw mpud vvfp tgzy";

 $mail->isHTML(TRUE);

 return $mail;
?> 