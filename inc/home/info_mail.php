<?php

if(isset($_POST['send_form_message'])){

    $mail_succesfully_sended = NULL;

    // Daten über den Empfänger der Email und die Umleitung auf Seite nach Senden der EMail
    $recipient = 'info@pride-warriors.com';
    $redirect = 'index.php#contact';
    $tryAgain = 'index.php#contact';
    
//Daten über den Absender der Email
$sender = htmlentities($_POST["email"]);
$name = htmlentities($_POST["name"]) . "," . $sender;
$phoneNumber = "Meine Telefonnummer: " . htmlentities($_POST["phone"]);
$message = htmlentities($_POST["message"]);
$eingabe = htmlentities($_POST["captcha"]);

$headers = [];
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=utf-8";
$headers[] = "From:" . $sender;
$headers[] = "X-Mailer: PHP/".phpversion();

if(password_verify($eingabe, $_POST["bildtext"])){
    mail($recipient, $name, $phoneNumber, $message, implode("\r\n", $headers));
    $mail_succesfully_sended = true;
}else{
    $mail_succesfully_sended = false;
}
}
