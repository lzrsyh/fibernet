<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';



if(isset($_POST["send"])) {
    $mail = new PHPmailer(true);
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dumbtestermails@gmail.com';
    $mail->Password = 'kcrcurtawyzdjmaa';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setFrom('dumbtestermails@gmail.com');

    $mail->addAddress("haikallazarus@gmail.com");

    $mail->isHTML(true);

    $message = "ini adalah email saya ";
    $body = $message . $_POST["message"];

    // $mail->Subject = $_POST["subject"];
    $mail->Subject = "email dari web fibernet";
    $mail->Body = $body;

    $mail->send();

    echo
    "
        <script>
            alert('Email Terkirim');
            document.location.href = 'index.php';
            </script>
            ";
}

?>