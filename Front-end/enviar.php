<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$companyname = $_POST['companyname'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message = "Apellido: " . $lastname . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "El nombre de la Compañía es: " . $companyname . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'yesicaguidounla@hotmail.com';
$asunto = 'Mensaje desde mi Portfolio Web';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
-->