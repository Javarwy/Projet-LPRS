<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp@gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'schumanair@gmail.com';                    
    $mail->Password   = 'pfmrcghbuttxmjlg ';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
    $mail->Port       = 465;                                   

    $mail->setFrom('schumanair@gmail.com', 'Schuman');
    $mail->addAddress($_POST["email_support"]);
    #*---$mail->addReplyTo('info@example.com', 'Information'); 

    $mail->isHTML(true);                                  
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    echo 'Message has been sent';
    echo var_dump($mail);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}