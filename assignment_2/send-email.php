<?php
$name=$_POST["name"];
$email = $_POST["email"];
$subject=$_POST["subject"];
$message =$_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAUth =  true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail-> Port =587;


$mail->Username ="";//my Username 
$mail->Password = "";//myPassword

$mail->setFrom($email, $name);//my Gmail
$mail->addAddress("", "");

$mail->Subject ="$subject";
$mail->Body ="$message";

$mail->send();

echo "email sent succesfully";



