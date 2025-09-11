<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function validar_string($valor) {
    return is_string($valor) && trim($valor) !== '';
}

function validar_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST["name"]) ? trim($_POST["name"]) : '';
    $apellido = isset($_POST["surename"]) ? trim($_POST["surename"]) : '';
    $comentario = isset($_POST["comentario"]) ? trim($_POST["comentario"]) : '';
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : '';

    $errores = [];

    if (!validar_string($nombre)) {
        $errores[] = "El nombre es obligatorio y debe ser texto.";
    }
    if (!validar_string($apellido)) {
        $errores[] = "El apellido es obligatorio y debe ser texto.";
    }
    if (!validar_string($comentario)) {
        $errores[] = "El mensaje es obligatorio y debe ser texto.";
    }
    if (!validar_email($email)) {
        $errores[] = "El correo electrónico no es válido.";
    }

    if ($errores) {
        foreach ($errores as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
        exit;
    }

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
        $mail->Body = "Hola " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . ",\n\n Tu mensaje ha sido recibido con éxito, en menos de 72 horas hábiles recibirás una respuesta. Saludos";

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