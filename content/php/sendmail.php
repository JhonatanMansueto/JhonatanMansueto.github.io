<?php
    $fromname = htmlspecialchars_decode($_POST["nome"]);
    $frommail = htmlspecialchars_decode($_POST["email"]);
    $phone = htmlspecialchars_decode($_POST["telefone"]);
    $to = "contato@jhonatanmachado.com";
    $subject = htmlspecialchars_decode($_POST["assunto"]);
    $contact = $fromname . " " . $phone;
    $message = $contact . "\n" . htmlspecialchars_decode($_POST["menssagem"]);
    $headers = "From: " . $fromname . " <" . $frommail . ">";

    //echo $frommail . " " . $fromname . " " . $subject . " " . $headers;
    $i = 0;
    
    while($i < 2) {
        if($i == 0){
            mail($to, $subject, $message, $headers);
        }
        if($i == 1){
            header("Location: /email-enviado.html");
            die();
        }
        $i = $i + 1;
    }
?>