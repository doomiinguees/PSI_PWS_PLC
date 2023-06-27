<?php

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);
    //$mail->setLanguage('pt');

// Server settings
$mail->setLanguage(CONTACTFORM_LANGUAGE);
$mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
$mail->isSMTP();
$mail->Host = CONTACTFORM_SMTP_HOSTNAME;
$mail->SMTPAuth = true;
$mail->IsHTML(true);
$mail->Username = CONTACTFORM_SMTP_USERNAME;
$mail->Password = CONTACTFORM_SMTP_PASSWORD;
$mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
$mail->Port = CONTACTFORM_SMTP_PORT;
$mail->CharSet = CONTACTFORM_MAIL_CHARSET;
$mail->Encoding = CONTACTFORM_MAIL_ENCODING;

// Recipients
//$mail->setFrom("projectsfaculdade@hotmail.com", "HD Services");


?>