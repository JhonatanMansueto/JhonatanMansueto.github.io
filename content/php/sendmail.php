<?php
    $fromname = htmlspecialchars_decode($_POST["name"]);
    $frommail = htmlspecialchars_decode($_POST["mail"]);
    $phone = htmlspecialchars_decode($_POST["phone"]);
    $to = "contato@projetovida10.com.br";
    $subject = htmlspecialchars_decode($_POST["subject"]);
    $contact = $fromname . " " . $phone;
    $message = $contact . "\n" . htmlspecialchars_decode($_POST["message"]);
    $headers = "From: " . $fromname . " <" . $frommail . ">";

    //echo $frommail . " " . $fromname . " " . $subject . " " . $headers;
    $i = 0;
    
    while($i < 2) {
        if($i == 0){
            mail($to, $subject, $message, $headers);
        }
        if($i == 1){
            header("Location: /index.html#bannerContato");
            die();
        }
        $i = $i + 1;
    }
?>