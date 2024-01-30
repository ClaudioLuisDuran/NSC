<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require ('PHPMailer/PHPMailer.php');
require ('PHPMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pais = $_POST['pais'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$body = <<<HTML
    <h2>Nuestra Señora de la conversión</h2>
    <h2>Datos del contacto via web</h2>
    <p>Nombre: $nombre <br>
    Email: $email<br>
    Apellido: $apellido<br>
    Pais: $pais <br>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$mailer = new PHPMailer();

$mailer->isSMTP();
$mailer->Host = 'https://nuestrasenoraymadredelaconversion.org'; // Reemplaza con la dirección del servidor SMTP
$mailer->SMTPAuth = true;
$mailer->Username = 'claudio'; // Reemplaza con el nombre de usuario del servidor SMTP
$mailer->Password = 'NSC1967$$$'; // Reemplaza con la contraseña del servidor SMTP
$mailer->SMTPSecure = 'ssl'; // Opcional: si tu servidor SMTP utiliza SSL, cambia a 'ssl'
$mailer->Port = 24; // Reemplaza con el puerto del servidor SMTP

$mailer->setFrom($email, "$nombre");
$mailer->addReplyTo('duranclaudioluis@gmail.com', 'Claudio*');
$mailer->addAddress('duranclaudioluis@gmail.com', 'Claudio*');
$mailer->Subject = "Mensaje de: $nombre";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';
/* $rta = $mailer->send(); */

/* var_dump($rta); */

//send the message, check for errors
if (!$mailer->send()) {
    echo 'Mailer Error: ' . $mailer->ErrorInfo;
} else {
    echo 'Message sent!';
    header("location: index.html");
}

/* if($rta){
    header("location: index.html");
} */

?>