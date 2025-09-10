<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $apellido = $_POST["surename"];
    $comentario = $_POST["comentario"];
    $email = $_POST["email"];

    // validacion de campos obligatorios que no sean vacios  que el mail sea uno valido que el telefono sea un numero
    $mail = new PHPMailer(true);
    try {
        // Configuracion SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'highlet.sample@gmail.com';
        $mail->Password = 'qdzw sbyt awmx oknm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        // Cuerpo del Correo, quien lo envia
        $mail->setFrom('highlet.sample@gmail.com', 'Defensoria del Pueblo');
        $mail->addAddress($email);
        $mail->Subject = 'Defensoria del Pueblo';
        $mail->Body = "Hola $nombre $apellido,\n\n Tu mensaje a sido recibido con exito, en menos de 72 horas hábiles recibiras una respuesta. Saludos";

        if ($mail->send()) {
            echo "Correo enviado correctamente.";
        } else {
            echo "Error al enviar el correo.";
        }
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}

header("location:./contactenos.php");
?>