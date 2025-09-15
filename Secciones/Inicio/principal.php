<!DOCTYPE html>
<html lang="es">
<?php
include('../../plantilla/head.php');
include_once __DIR__ . "/../../Conexion/conexion.php";

$stmt = $link->prepare("SELECT noticia_id, titulo, contenido, foto FROM noticias WHERE estado = 1 ORDER BY fecha_publicacion DESC LIMIT 5");
$stmt->execute();
$resultadoCarrusel = $stmt->get_result();
?>

<body>
  <section class="hero-defensoria">
    <div class="contenido-hero">
      <h1>Defensoría del Pueblo</h1>
      <p>
        Protegiendo tus derechos, escuchando tu voz. Conectate con nosotros para que tus inquietudes sean escuchadas.
        Esta es la página web de la Defensoría del Pueblo de la Municipalidad de General Pueyrredon.
        Por este medio tratamos de dar a conocer nuestro trabajo, nuestras actividades y de brindarte un canal de comunicación directo con nosotros.
      </p>
    </div>
  </section>
  <section class="card-section">
    <div class="card card-seccion-principal" data-url="<?= QUEHACEMOS ?>">
      <h3>¿Qué hacemos?</h3>
      <p>Conocé nuestras funciones y cómo trabajamos para defender tus derechos.</p>
    </div>
    <div class="card card-seccion-principal" data-url="<?= NOTICIAS ?>">
      <h3>Noticias</h3>
      <p>Enterate de las últimas acciones y comunicados institucionales.</p>
    </div>
    <div class="card card-seccion-principal" data-url="<?= CONTACTENOS ?>">
      <h3>Contacto</h3>
      <p>Mandanos tus inquietudes, quejas o sugerencias. Estamos para escucharte.</p>
    </div>
  </section>
  <h2 class="text-center mb-4">¿Dónde estamos?</h2>
  <div class="map-container ms-2 text-center imagen-cuadro mb-2">
    <a href="https://www.google.com.ar/maps/place/Municipalidad+de+General+Pueyrredon/@-37.9976633,-57.5516251,16z/data=!3m1!4b1!4m6!3m5!1s0x9584dc03bb58eb2b:0xfc58db7e5aa0879f!8m2!3d-37.9976663!4d-57.5498044!16s%2Fg%2F1tdb0w9g?hl=es&entry=ttu&g_ep=EgoyMDI1MDcwOS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
      <img src="./images/mapa.png" alt="Ubicación Municipalidad" class="img-fluid" style="max-height: 400px; object-fit: cover;">
    </a>
  </div>
  <br>
  <br>
  <section class="slider-noticias container py-4 position-relative">
    <h2 class="fs-4 fw-bold text-black mb-3 position-relative">
      Últimas Noticias
      <span class="decor-line"></span>
    </h2>

    <!-- Flechas -->
    <button class="slider-btn prev-btn" onclick="document.getElementById('sliderWrapper').scrollBy({left: -320, behavior: 'smooth'})">
      <i class="bi bi-chevron-left"></i>
    </button>
    <button class="slider-btn next-btn" onclick="document.getElementById('sliderWrapper').scrollBy({left: 320, behavior: 'smooth'})">
      <i class="bi bi-chevron-right"></i>
    </button>

    <div class="slider-wrapper d-flex overflow-auto gap-4 pb-3" id="sliderWrapper">
      <?php
      $resultadoCarrusel->data_seek(0);
      while ($noticia = $resultadoCarrusel->fetch_assoc()) {
        $foto = !empty($noticia['foto']) ? '/' . $noticia['foto'] : './images/default.jpg';
      ?>
        <div class="card flex-shrink-0" style="min-width: 300px; max-width: 300px;">
          <img src="<?= $foto ?>" class="card-img-top object-fit-cover" style="height: 180px;" alt="Imagen noticia">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-semibold"><?= htmlspecialchars($noticia['titulo']) ?></h5>
            <p class="card-text small text-muted"><?= substr(strip_tags($noticia['contenido']), 0, 100) ?>...</p>
            <a href="../Prensa/noticias/detalleNoticia.php?id=<?= $noticia['noticia_id'] ?>" class="btn btn-sm btn-outline-primary mt-auto rounded-pill d-flex align-items-center justify-content-center gap-2">
              Ver más <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      <?php } ?>
  </section>
  <br>
  <?php include('../../plantilla/footer.php'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.card').on('click', function() {
        const url = $(this).data('url');
        window.location.href = url;
      });
    });
  </script>
  <!--script para el boton de volver arriba-->
  <script>
    document.querySelector('.flecha-pegada-footer a').addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>
  
</body>

</html>