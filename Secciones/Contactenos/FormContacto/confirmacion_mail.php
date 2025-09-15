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
    // Validación reCAPTCHA v3
    $recaptchaSecret = '6LcIosorAAAAANcR02IjKQWGweGKUE1v6MKWGqTd';
    $token = $_POST['recaptcha_token'] ?? '';

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$token}");
    $result = json_decode($response);

    if ($result->success && $result->score >= 0.5) {
        $nombre = isset($_POST["name"]) ? trim($_POST["name"]) : '';
        $apellido = isset($_POST["surename"]) ? trim($_POST["surename"]) : '';
        $comentario = isset($_POST["comentario"]) ? trim($_POST["comentario"]) : '';
        $email = isset($_POST["email"]) ? trim($_POST["email"]) : '';
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : '';

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

        // Envío de correo con PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'highlet.sample@gmail.com';
            $mail->Password = 'qdzw sbyt awmx oknm'; // Usá una contraseña segura o App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('highlet.sample@gmail.com', 'Defensoría del Pueblo');
            $mail->addAddress($email);
            $mail->Subject = 'Confirmación de contacto';
            $mail->Body = "Hola " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . ",\n\nTu mensaje ha sido recibido con éxito. En menos de 72 horas hábiles recibirás una respuesta.\n\nSaludos cordiales,\nDefensoría del Pueblo.";

            if ($mail->send()) {
                echo "<div class='alert alert-success'>Correo enviado correctamente.</div>";
            } else {
                echo "<div class='alert alert-danger'>Error al enviar el correo.</div>";
            }
        } catch (Exception $e) {
            echo "<div class='alert alert-danger'>Error al enviar el correo: {$mail->ErrorInfo}</div>";
        }

    } else {
        echo "<div class='alert alert-danger'>No pudimos verificar que seas un usuario legítimo. Por favor intentá nuevamente.</div>";
        exit;
    }

    header("Location: ./contactenos.php?estado=exito");
    exit;
}
?>