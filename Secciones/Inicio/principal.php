<!DOCTYPE html>
<html lang="es">
<?php
include_once __DIR__ . '/../../parametros.php';
include(HEADER);
include(CONEXION);
mysqli_set_charset($link, "utf8mb4");

$stmt = $link->prepare("SELECT noticia_id, titulo, contenido, foto FROM noticias WHERE estado = 1 ORDER BY fecha_publicacion DESC LIMIT 5");
$stmt->execute();
$resultadoCarrusel = $stmt->get_result();

$stmtResenas = $link->prepare("SELECT DISTINCT resena_id, resena FROM resenas WHERE estado = 1 ORDER BY resena_id DESC LIMIT 10");
$stmtResenas->execute();
$resultadoResenas = $stmtResenas->get_result();
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

  <section class="slider-noticias container py-4 position-relative fade-on-scroll">
    <h2 class="fs-4 fw-bold text-black mb-3 position-relative">
      Últimas Noticias
      <span class="decor-line "></span>
    </h2>
    <br>
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
        <a href="../Prensa/noticias/detalleNoticia.php?id=<?= $noticia['noticia_id'] ?>" class="card-full-link">
          <div class="card-full flex-shrink-0" style="min-width: 300px; max-width: 300px;">
            <div class="card-full-content">
              <h1 class="card-full-title"><?= htmlspecialchars($noticia['titulo']) ?></h1>
              <p class="card-full-copy"><?= substr(strip_tags($noticia['contenido']), 0, 100) ?>...</p>
              <span class="btn btn-sm btn-outline-primary mt-2 rounded-pill ver-mas-btn">Ver más</span>
            </div>
            <div class="card-full-image">
              <img src="<?= $foto ?>" alt="<?= htmlspecialchars($noticia['titulo']) ?>" />
            </div>
          </div>
        </a>

      <?php } ?>
  </section>
    <br>
    <h2 class="text-center mb-5 fade-on-scroll">¿Dónde estamos?</h2>
    <div class="map-container ms-2 text-center imagen-cuadro mb-2">
      <a href="https://www.google.com.ar/maps/place/Municipalidad+de+General+Pueyrredon/@-37.9976633,-57.5516251,16z/data=!3m1!4b1!4m6!3m5!1s0x9584dc03bb58eb2b:0xfc58db7e5aa0879f!8m2!3d-37.9976663!4d-57.5498044!16s%2Fg%2F1tdb0w9g?hl=es&entry=ttu&g_ep=EgoyMDI1MDcwOS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
        <img src="./images/mapa.png" alt="Ubicación Municipalidad" class="img-fluid" style="max-height: 400px; object-fit: cover;">
      </a>
    </div>
  
  <section class="reseñas-carrusel container py-4 fade-on-scroll">
    <h2 class="fs-4 fw-bold text-black mb-3 text-center position-relative">
        Reseñas de usuarios
        <span class="decor-line"></span>
    </h2>

    <!-- Flechas -->
    <button class="slider-btn prev-btn"
            onclick="document.getElementById('sliderResenas').scrollBy({left: -320, behavior: 'smooth'})">
        <i class="bi bi-chevron-left"></i>
    </button>
    <button class="slider-btn next-btn"
            onclick="document.getElementById('sliderResenas').scrollBy({left: 320, behavior: 'smooth'})">
        <i class="bi bi-chevron-right"></i>
    </button>    

    <?php    
        $numeros = range(1, 8);
        shuffle($numeros);
        $pos = 0;
    ?>

    <div class="slider-wrapper d-flex overflow-auto gap-3 pb-3 mt-3" id="sliderResenas">
        <?php while ($resena = $resultadoResenas->fetch_assoc()): ?>
            <?php
                // Si se agotaron los 8 números, vuelve a mezclarlos para el siguiente grupo
                if ($pos >= count($numeros)) {
                    $numeros = range(1, 8);
                    shuffle($numeros);
                    $pos = 0;
                }
                $imgNum  = $numeros[$pos];
                $pos++;
                $imgPath = "../../plantilla/imgs/personas/$imgNum.png";
            ?>
            <div class="card p-3 resena-card position-relative">
                <p class="card-text mb-0"><?= htmlspecialchars($resena['resena']) ?></p>
                <img src="<?= $imgPath ?>" class="resena-img" alt="icono reseña">
            </div>
        <?php endwhile; ?>
    </div>
</section>
  <br>
  <br>
  <?php include(FOOTER); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    //Script
    $(document).ready(function() {
      $('.card').on('click', function() {
        const url = $(this).data('url');
        if (!url) return;
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
  <script>
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll('.fade-on-scroll');
  const options = {
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        obs.unobserve(entry.target); // animar una sola vez
      }
    });
  }, options);

  elements.forEach(el => observer.observe(el));
});
</script>
</body>

</html>