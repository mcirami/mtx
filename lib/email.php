<?php
//require("../phpmailer/src/PHPmailer.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


date_default_timezone_set('America/Los_Angeles');

if( isset($_POST['submit']) &&  $_POST['submit'] == 'success' ){
        $mail = new PHPMailer(true);

    try {
        $firstName = $_POST["firstName"]; // HINT: use preg_replace() to filter the data
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $title = $_POST["title"];
        $practiceName = $_POST["practiceName"];
        $zipCode = $_POST["zipCode"];
        $phone = $_POST["phone"];

        $mail->SMTPDebug = 2;
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";  // specify main and backup server
        $mail->SMTPAuth = true;     // turn on SMTP authentication
        $mail->Username = "matteo@moneylovers.com";  // SMTP username
        $mail->Password = "RedBirds57"; // SMTP password
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->setFrom($email);
        //$mail->FromName = "Advantage Plus MD Form";
        $mail->AddAddress("matteo@moneylovers.com");
        $mail->AddAddress("matteo@mscwebservices.net");
        //$mail->AddAddress("ellen@example.com");                  // name is optional
        $mail->AddReplyTo($email, $name);

        $mail->WordWrap = 50;                                 // set word wrap to 50 characters
        //$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
        //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
        $mail->IsHTML(true);                                  // set email format to HTML

        $mail->Subject = "Advantage Plus MD Lead Submitted";

        $message = "First Name: " . $firstName .
            "<br> Last name: " . $lastName .
            "<br>Email: " . $email .
            "<br>Title: " . $title .
            "<br>Practice Name: " . $practiceName .
            "<br>Zip Code: " . $zipCode .
            "<br>Phone Number" . $phone;

        $mail->Body = $message;
        $mail->AltBody = $message;

        /*if (!$mail->Send()) {
            echo "Message could not be sent. <p>";
            //echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "success";
        }*/

        $mail->send();
        echo 'Message has been sent';

    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

}
?>