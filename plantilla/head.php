<?php
include_once __DIR__ . '/../parametros.php';
$archivo = archivo_actual();

if ($archivo == "inicioSesion.php" || $archivo == "backoffice.php") {
  $botonSesion = '<a href="' . BASE_URL . 'index.php" class="btn btn-outline-light btn-sm">Cerrar sesión</a>';
} else {
  $botonSesion = '<a href="' . BASE_URL . 'BackOffice/Login/inicioSesion.php" class="btn btn-outline-light btn-sm">Iniciar sesión</a>';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= TITULO ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASE_URL ?>plantilla/style.css">
</head>

<body>
  <nav class="navbar">
    <div class="navbar-logo">
      <a href="<?= BASE_URL ?>Secciones/Inicio/principal.php">
        <img src="<?= BASE_URL ?>plantilla/logo_viejo.png" alt="Logo" style="height:60px; margin-right:20px;">
      </a>
    </div>
    <div class="navbar-menu">
      <!-- Institucional -->
      <div class="dropdown">
        <a href="#">Institucional</a>
        <div class="dropdown-content">
          <a href="<?= BASE_URL ?>Secciones/Institucional/QueHacemos/queHacemos.php">¿Qué hacemos?</a>
          <a href="<?= BASE_URL ?>Secciones/Institucional/Autoridades/autoridades.php">Autoridades</a>
          <a href="<?= BASE_URL ?>Secciones/Institucional/Historia/historia.php">Historia</a>
        </div>
      </div>

      <!-- Prensa -->
      <div class="dropdown">
        <a href="#">Prensa</a>
        <div class="dropdown-content">
          <a href="<?= BASE_URL ?>Secciones/Prensa/Noticias/noticias.php">Noticias</a>
          <a href="<?= BASE_URL ?>Secciones/Prensa/Memorias/memorias.php">Memorias</a>
          <a href="<?= BASE_URL ?>Secciones/Prensa/Archivos/archivos.php">Archivos por años</a>
        </div>
      </div>

      <!-- Normativa -->
      <div class="dropdown">
        <a href="#">Normativa</a>
        <div class="dropdown-content">
          <a href="<?= BASE_URL ?>Secciones/Normativa/Ordenanzas/ordenanzas.php">Ordenanzas</a>
          <a href="<?= BASE_URL ?>Secciones/Normativa/Reglamentos/reglamentos.php">Reglamentos</a>
          <a href="<?= BASE_URL ?>Secciones/Normativa/Resoluciones/resoluciones.php">Resoluciones</a>
        </div>
      </div>

      <!-- Links -->
      <a href="<?= BASE_URL ?>Secciones/Links/links.php">Links</a>

      <!-- Contacto -->
      <div class="dropdown">
        <a href="#">Contáctenos</a>
        <div class="dropdown-content">
          <a href="<?= BASE_URL ?>Secciones/Contactenos/FAQ/faq.php">FAQ</a>
          <a href="<?= BASE_URL ?>Secciones/Contactenos/FormContacto/contactenos.php">Formulario de Contacto</a>
        </div>
      </div>
    </div>
    </div>
  </nav>