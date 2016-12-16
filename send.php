<?php

/////////// Add your own email below //////////////// 
define("WEBMASTER_EMAIL", 'hablemos@raulramirez.info');
error_reporting(E_ALL ^ E_NOTICE);

//////////////////////////////////////////////////////
function ValidateEmail($email) {
    $regex = '/([a-z0-9_.-]+)' . # name
            '@' . # at
            '([a-z0-9.-]+){2,255}' . # domain & possibly subdomains
            '.' . # period
            '([a-z]+){2,10}/i'; # domain extension 

    if ($email == '')
        return false;
    else
        $eregi = preg_replace($regex, '', $email);
    return empty($eregi) ? true : false;
}

if (isset($_POST)) {
    $name = stripslashes($_POST['name']);
    $email = trim($_POST['email']);
    $phone = stripslashes($_POST['phone']);
    $message = stripslashes($_POST['message']).'Phone: '.$phone;
    $subject = 'Consulta sobre servicios web';
    // Check name
    if (!$name)
        $error .= 'Nombre Requerido! ';
    // Check email
    if (!$email)
        $error .= 'E-mail Requerido! ';
    if ($email && !ValidateEmail($email))
        $error .= 'La dirección de E-mail no es valida! ';
    // Check message
    if (!$message)
        $error .= "Por favor ingrese su mensaje !";
    if (!$error) {
        $mail = mail(WEBMASTER_EMAIL, $subject, $message, "From: " . $name . " <" . $email . ">\r\n"
                        . "Reply-To: " . $email . "\r\n"
                        . "Return-Path: " . $email . "\r\n"
                        . "MIME-Version: 1.0\r\n"
                        . "Content-type: text/html; charset=UTF-8\r\n");
        if ($mail) {
            echo '<strong style="color:green; font-size: 16px;">Se ha enviado su mensaje</strong>';
            var_dump($mail);
        } else {
            echo 'Could not send email!';
        }
    }
    else
        echo $error;
}
?>