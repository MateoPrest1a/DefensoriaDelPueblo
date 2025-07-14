<?php 
  include_once __DIR__ . '/../parametros.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITULO?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>plantilla/style.css">
</head>
<body>
  <div class="container">
    <div class="row-md-12">
      <div class="col">
        <nav class="navbar">
          <div class="navbar-logo">
            <a href="/DefensoriaDelPueblov3/Secciones/Inicio/index.php"><img src="/DefensoriaDelPueblov3/plantilla/logo_viejo.png" alt="Logo Defensoría" /></a>
          </div>
          <div class="navbar-menu">

            <!-- Institucional -->
            <div class="dropdown">
              <a href="#">Institucional</a>
              <div class="dropdown-content">
                <a href="<?=BASE_URL?>/Secciones/Institucional/QueHacemos/queHacemos.php">¿Qué hacemos?</a>
                <a href="<?=BASE_URL?>/Secciones/Institucional/Autoridades/autoridades.php">Autoridades</a>
                <a href="#">Historia</a>
              </div>
            </div>

            <!-- Prensa -->
            <div class="dropdown">
              <a href="#">Prensa</a>
              <div class="dropdown-content">
                <a href="#">Noticias</a>
                <a href="#">Memorias</a>
                <a href="#">Archivos por años</a>
              </div>
            </div>

            <!-- Normativa -->
            <div class="dropdown">
              <a href="#">Normativa</a>
              <div class="dropdown-content">
                <a href="<?=BASE_URL?>/Secciones/Normativa/Ordenanzas/ordenanzas.php">Ordenanzas</a>
                <a href="#">Reglamentos</a>
                <a href="#">Resoluciones</a>
              </div>
            </div>

              <a href="#">Links</a>

              <!-- Contactenos -->
              <div class = "dropdown">
              <a href="#">Contáctenos</a>
              <div class="dropdown-content">
                <a href="#">FAQ</a>
                <a href="<?=BASE_URL?>/Secciones/Contactenos/FormContacto/contactenos.php">Formulario de Contacto</a>
              </div>
              </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <hr>
  