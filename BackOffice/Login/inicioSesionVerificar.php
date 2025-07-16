<?php
session_start(); // Activar la sesión al inicio del archivo

// Lista de usuarios con sus respectivas contraseñas y páginas de redirección
$usuarios = array(
    array("username" => "admin", "password" => "1", "redirect" => "../Main/backoffice.php")
);

// Verificar si se enviaron datos
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = strtolower(trim($_POST["username"])); // Limpiar y estandarizar el nombre de usuario
    $password = trim($_POST["password"]); // Limpiar espacios en contraseña
    
    foreach ($usuarios as $usuario) {
        if ($username === $usuario["username"] && $password === $usuario["password"]) {
            $_SESSION["username"] = $usuario["username"]; // Guardar sesión
            header("Location: " . $usuario["redirect"]); // Redirigir a la página correspondiente
            exit();
        }
    }
    // Si no coincide ningún usuario, tira error
    header("Location: inicioSesion.php?op=ERROR");
    exit();
}

// Redirigir a la página de inicio si no se envió el formulario
header("Location: inicioSesion.php");
exit();
?>