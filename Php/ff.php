<?php

$to = "eternuz123@gmail.com";
$subject = "Prueba de correo electrónico desde PHP";
$message = "Su Contraseña es:aaa";
$headers="From : riseofrochy@gmail.com";

// Cabeceras del correo electrónico
// $headers = "From: riseofrochy@gmail.com\r\n";
// $headers .= "Reply-To: remitente@example.com\r\n";
// $headers .= "X-Mailer: PHP/" . phpversion();

// Envío del correo electrónico
if (mail($to, $subject, $message, $headers)) {
    echo "Si";
} else {
    echo "No";
}
?>