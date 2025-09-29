<?php
include_once __DIR__ . '/../parametros.php';
$archivo = archivo_actual();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../plantilla/iconos/ms-icon-144x144.png">
  <meta name="theme-color" content="#0056b3">

  <title><?= TITULO ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASE_URL ?>plantilla/style.css">

  <link rel="icon" href="http://localhost/DefensoriaDelPueblo/plantilla/iconos/favicon.ico" type="image/x-icon">

  <link rel="icon" type="image/png" sizes="32x32" href="../plantilla/iconos/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../plantilla/iconos/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../plantilla/iconos/favicon-96x96.png">

  <link rel="apple-touch-icon" sizes="57x57" href="../plantilla/iconos/apple-icon.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../plantilla/iconos/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../plantilla/iconos/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../plantilla/iconos/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../plantilla/iconos/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../plantilla/iconos/apple-icon-180x180.png">

  <link rel="icon" type="image/png" sizes="192x192" href="../plantilla/iconos/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="144x144" href="../plantilla/iconos/android-icon-144x144.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../plantilla/iconos/android-icon-96x96.png">
  <link rel="icon" type="image/png" sizes="72x72" href="../plantilla/iconos/android-icon-72x72.png">
  <link rel="icon" type="image/png" sizes="48x48" href="../plantilla/iconos/android-icon-48x48.png">
  <link rel="icon" type="image/png" sizes="36x36" href="../plantilla/iconos/android-icon-36x36.png">

  <link rel="manifest" href="../plantilla/iconos/manifest.json">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark px-3">
    <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>Secciones/Inicio/principal.php">
      <img src="<?= BASE_URL ?>plantilla/logo_nuevo.jpeg" alt="Logo" style="height:80px; margin-right:10px; border-radius:50%">
      
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContenido">
      <ul class="navbar-nav ms-auto">
        <!-- Institucional -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Institucional</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Institucional/QueHacemos/queHacemos.php">¿Qué hacemos?</a></li>
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Institucional/Autoridades/autoridades.php">Autoridades</a></li>
          </ul>
        </li>

        <!-- Prensa -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Prensa</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Prensa/Noticias/noticias.php">Noticias</a></li>
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Prensa/Memorias/memorias.php">Memorias</a></li>
          </ul>
        </li>
        <!-- Normativa -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Normativa</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Normativa/Ordenanzas/ordenanzas.php">Ordenanzas</a></li>
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Normativa/Reglamento/reglamento.php">Reglamento Interno</a></li>
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Normativa/Resoluciones/resoluciones.php">Resoluciones</a></li>
          </ul>
        </li>

        <!-- Links -->
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>Secciones/Links/links.php">Links</a>
        </li>

        <!-- Contacto -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Contáctenos</a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Contactenos/FAQ/faq.php">Preguntas Frecuentes</a></li>
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Contactenos/FormContacto/contactenos.php">Formulario de Contacto</a></li>
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Contactenos/Resenas/resenas.php">Reseña</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  
  