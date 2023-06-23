<?php
require_once 'vendor/autoload.php';
require_once 'mail/functions.php';
require_once 'mail/config.php';
function sendPassword($email, $nome, $pass){
require "mailerSettings.php";

try {
// Recipients
$mail->setFrom('noreply@hdservices.botelho.eu.org', 'HD Services');
$mail->addAddress($email, $nome);

// Content
$mail->Subject = "Envio de palavra-passe - HD Services";
$mail->Body = "Caro ".$nome.",<br>Junto enviamos a sua palavra-passe para acesso à plataforma HD Services<br><br><b>".$pass."</b><br><br>A equipa HD Services!";
$mail->send();
//redirectSuccess();

} catch (Exception $e) {
redirectWithError("An error occurred while trying to send your message: ".$mail->ErrorInfo);
}

}

//sendPassword('dadomingues2003@gmail.com', 'Daco', 'jhsdfakfhvb');