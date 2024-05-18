<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$body = "Nombre: " . $nombre . "<br>Correo: " . $correo . 
"<br>Asunto: " . $asunto . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';         
    $mail->SMTPAuth   = true;                         
    $mail->Username   = 'emerxon123@gmail.com';       
    $mail->Password   = 'rnusenqshutqpxwr';               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     
    $mail->Port       = 465;       
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('emerxon123@gmail.com');
    $mail->isHTML(true);                
    $mail->Subject = $asunto;
    $mail->Body    = $mensaje;
    $mail->CharSet = "UTF-8";
    $mail->send();
    echo '<script>
        alert("El mensaje se envio correctamente");
        window.open("../contact.php", "_self");
        </script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
