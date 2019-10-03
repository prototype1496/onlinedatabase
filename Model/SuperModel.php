<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);     


    $name = "Name"; 
    $email = "enaile to contact "; 
    $phone = "phone"; 
    $company_name = "company name"; 
    $message = "This is a test drive"; 
    $subject = "Subject"; 

//    echo 'Name: ' . $name . '<br>Email: ' . $email . '<br>Phone: ' . $phone .
//    '<br>Company Name: ' . $company_name . '<br>Message: ' . $message .
//    '<br>Subject: ' . $subject;

    try {
        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'mu2014adevelopers@gmail.com';                 // SMTP username
        $mail->Password = 'mulungushi';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        
        //Recipients
        $mail->setFrom($email, 'Vaccination And Immunization System ');
        $mail->addAddress('prototype1496@gmail.com', $company_name);

        $mail->isHTML(TRUE);
        $mail->Subject = $subject;
        $mail->Body = 'Name: ' . $name . 
                '<br>Company: ' . $company_name . 
                '<br>Email: ' . $email . 
                '<br>Contact: ' . $phone . 
                '<br><br>' . $message;


        $mail->send();
//        echo 'Message has been sent'; 
        echo 'Message Has Been Sent';
    } catch (Exception $e) {
//        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        echo 'Message Not sent';
    }
