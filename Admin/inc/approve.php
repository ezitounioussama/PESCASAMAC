<?php
if (isset($_POST['email'])) {
    $mail = $_POST['email'];

    $to = $mail;
    $subject = "COMMAND DE PESCASAMAC";
    $txt = "your command has been approved";
    $headers = "From: zitounioussama95@gmail.com" . "\r\n" .
        "CC: $mail";

    mail($to, $subject, $txt, $headers);
}
