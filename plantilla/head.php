<?php
include_once __DIR__ . '/../parametros.php';
$archivo = archivo_actual();
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark px-3">
    <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>Secciones/Inicio/principal.php">
      <img src="<?= BASE_URL ?>plantilla/logo_nuevo.jpeg" alt="Logo" style="height:90px; margin-right:10px; border-radius:50%">
      <span class="fw-bold text-white"><?= TITULO ?></span>
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
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Contactenos/FAQ/faq.php">Preguntas Frecuentes</a></li>
            <li><a class="dropdown-item" href="<?= BASE_URL ?>Secciones/Contactenos/FormContacto/contactenos.php">Formulario de Contacto</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  
  