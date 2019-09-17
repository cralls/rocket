<?php

$subject = 'New Registration for '.$_POST['event'];
$msg = "Name: ".$_POST['your-name']."<br>";
$msg .= "Email: ".$_POST['your-email']."<br>";
$msg .= "Phone: ".$_POST['phone']."<br>";
$msg .= "Fax: ".$_POST['fax']."<br>";
$msg .= "Team Name: ".$_POST['team-name']."<br>";
$msg .= "School: ".$_POST['school']."<br>";
$msg .= "Country: ".$_POST['country']."<br>";
$msg .= "Swimmers: ".$_POST['swimmers']."<br>";
$msg .= "Comment: ".$_POST['your-message']."<br>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';

$mail = new PHPMailer ( true ); // Passing `true` enables exceptions
try {
	// Server settings
	$mail->SMTPDebug = 0; // Enable verbose debug output
	$mail->isSMTP (); // Set mailer to use SMTP
	$mail->Host = 'mail.rocketsciencesports.com'; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'no-reply@rocketsciencesports.com'; // SMTP username
	$mail->Password = '8aQ8ZnXv4qC'; // SMTP password
	$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587; // TCP port to connect to
	
	// Recipients
	$mail->setFrom ( 'no-reply@rocketsciencesports.com', 'Rocket Science Sports' );
	$mail->addAddress ( 'events@rocketsciencesports.com', 'Production' ); // Add a recipient
	
	// Content
	$mail->isHTML ( true ); // Set email format to HTML
	$mail->Subject = $subject;
	$mail->Body = $msg;
	
	$mail->send ();
	
	require_once 'app/Mage.php';
	umask(0);
	Mage::app();    
	Mage::getSingleton('core/session', array('name'=>'frontend')); Mage::getSingleton('customer/session');
	Mage::getSingleton('core/session')->addSuccess('Thank you! Your registration has been sent successfully');

	header("Location: https://www.rocketsciencesports.com/events-home");
	
} catch ( Exception $e ) {
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>
