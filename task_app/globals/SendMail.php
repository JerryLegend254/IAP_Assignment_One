<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Download PHP mailer library from Github and add to project
//Turn on two-step verification code from email account to be used
//Get app password for the email

require 'vendor/autoload.php';

// require './mailer/src/Exception.php';
// require './mailer/src/PHPMailer.php';
// require './mailer/src/SMTP.php';
class SendMail{
	public function SendeMail($details, $conf){
		if(!empty($details["sendToEmail"]) & !empty($details["sendToName"]) & !empty($details["emailSubjectLine"]) & !empty($details["emailMessage"])){
			
			
			$emailFrom = $conf["au_email_address"]; 
			$subject = $details["emailSubjectLine"];
			$message = $details["emailMessage"];
			$senderName = $conf['sender_name'];
			$mail = new PHPMailer(true);

		try {
			$mail->isSMTP();
			$mail->Host = 'smtp.sendgrid.net'; //main SMTP server
			$mail->SMTPAuth = true; //enable SMTP Authentication
			$mail->Username = $conf['username_email']; //Username
			$mail->Password = $conf['api_key']; //secret password of email account awdjldafizeqtvrg-Dennis
			$mail->Port = 465;
			$mail->SMTPSecure = 'ssl';
			$mail->isHTML(true);
			//Recipients details
			$mail->setFrom($emailFrom, $senderName); //Set sender 
			$mail->addAddress($details["sendToEmail"]); //Recipient
			$mail->Subject = ("$subject");
			$mail->Body = $message;
			$mail->send(); 
		}catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		}else{
			print_r($details);
			die("Error: Some details are missing.");
		}
		}
	}