<?php 

$nom_auteur_message = $_POST["auteur_message"]
$email_auteur_message = $_POST["email_auteur_message"]
$message_auteur_message = $_POST["message_auteur_message"]

require "vendor/autoload.php";

use PHPMailer/PHPMailer/PHPMailer;
use PHPMailer/PHPMailer/SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;






?>