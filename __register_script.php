<?php
set_time_limit(600);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])){

$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
$otp = rand(1000,9999);

$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["pass"] = $pass;
$_SESSION["otp"] = $otp;





//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'smartoll@yandex.com';                 // SMTP username
    $mail->Password = 'smartoll1234567890';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('smartollt@yandex.com', 'administration');
    $mail->addAddress('sohaibalam67@gmail.com', 'user');     // Add a recipient             // Name is optiona
    //Attachments
   // Optional name
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'header';
    $mail->Body    = 'your code is '.$otp;
    $mail->AltBody = 'your code is '.$otp;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}
?>