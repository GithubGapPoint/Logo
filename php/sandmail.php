<?php

    $to= "robbi@gmail.com";
    $from = trim($_POST['email']);
    $subject = $_POST['number'];

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);
    
    $headers = "From: $from" . "\r\n" . 
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $message, $headers))
    {
        echo 'Письмо отправлено';
    }
    else {
        echo 'Письмо не отправлено';
    }
?>