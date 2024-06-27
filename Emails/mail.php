<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
// //Load Composer's autoloader
// require 'vendor/autoload.php';
include("connect.php");

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$departure_date = $_POST["departure-date"];
$trip_type = $_POST["trip-type"];
$destination = $_POST["destination"];
$package = $_POST["package"];
$transaction = $_POST["transaction"];
$hear = $_POST["hear"];

$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com' ;                    
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'mail';                     
    $mail->Password   = 'code';                              
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 465;                                    

   
    $mail->setFrom('bupstuffs@gmail.com', 'Beyond Horizon');
    $mail->addAddress($email, $name);     
   

    $mail->isHTML(true);
    $mail->Subject = 'Your Booking is complete!';
    $mail->Body    = 'Thank you ' . '<b>' . $name .'</b>' .' for choosing us! Here is a details of your trip booking confirmation:' . '<br>'.
        'Your Departure date: ' . $departure_date .  '<br>'.
        'Your destination: ' . $destination . '<br>'.
        'Your choosen Package: ' . $package . '<br>'.
        'Your booking is confirmed! Enjoy! ';


    $mail->send();
    echo 'Message has been sent' . '<br>'; 
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}