<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../../vendor/autoload.php';



if (isset($_POST['approve'])) {

    $userMail = $_POST['email'];
    $userName = $_POST['fullName'];



    $mail = new PHPMailer();

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'zitounioussama95@gmail.com';                 // SMTP username
    $mail->Password = 'tvfobwfbyurjfjze';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->From = 'zitounioussama95@gmail.com';
    $mail->FromName = 'PESCASAMAC';
    $mail->addAddress($userMail, $userName);     // Add a recipient
    $mail->addAddress($userMail);              // Name is optional
    $mail->addReplyTo($userMail, $userMail);
    $mail->addCC($userMail);
    $mail->addBCC($userMail);

    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'xxxxxxxxxxxxxxx';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo $userMail;
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        header("Location: ../order.php");
    }
}
