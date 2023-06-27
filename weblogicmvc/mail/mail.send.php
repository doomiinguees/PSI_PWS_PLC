<?php
require_once 'vendor/autoload.php';
require_once 'mail/functions.php';
require_once 'mail/config.php';
function sendPassword($email, $nome, $pass, $username){
    require "mailerSettings.php";

    try {
    // Recipients
    $mail->setFrom('noreply@hdservices.botelho.eu.org', 'HD Services');
    $mail->addAddress($email, $nome);

    // Content
    $mail->Subject = "Envio de palavra-passe - HD Services";
    $mail->Body = "Caro ".$nome.",<br>Junto enviamos o seu username e a sua palavra-passe para acesso à plataforma HD Services<br><br><b>Username: </b>".$username."<br><b>Plavra-Passe: </b>".$pass."<br><br>A equipa HD Services!";
    $mail->send();
    //redirectSuccess();

    } catch (Exception $e) {
        echo $e;
        redirectWithError("An error occurred while trying to send your message: ".$mail->ErrorInfo);
    }

}

//sendPassword('dadomingues2003@gmail.com', 'Daco', 'jhsdfakf$usernamehvb');