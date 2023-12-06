<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor\autoload.php';
require 'vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'vendor\phpmailer\phpmailer\src\Exception.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'alexrayer7@gmail.com';                     //SMTP username
    $mail->Password   = 'piyt qspf notf zhax';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('userid@gmail.com', 'website');
    $mail->addAddress('alexrayer7@gmail.com', 'Joe User');     //Add a recipient




//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['text'];

$mail->send();

exit();
} catch (Exception $e) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>