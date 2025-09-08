<?php
include('../../../plantilla/head.php');
include_once __DIR__ . "/../../../Conexion/conexion.php";
include_once __DIR__ . '/../../../breadcrumbConfig.php';
include_once __DIR__ . '/../../../breadcrumb.php';
mysqli_set_charset($link, "utf8mb4");

// Filtro por búsqueda
$busqueda = isset($_GET['busqueda']) ? trim($_GET['busqueda']) : '';
$condicion = "estado = 1";

if ($busqueda !== '') {
  $busqueda_sql = mysqli_real_escape_string($link, $busqueda);
  $condicion .= " AND (titulo LIKE '%$busqueda_sql%' OR contenido LIKE '%$busqueda_sql%')";
}

$sql = "SELECT noticia_id, titulo, contenido, fecha_publicacion, foto FROM noticias WHERE $condicion ORDER BY fecha_publicacion DESC";
$resultado = mysqli_query($link, $sql);
?>

<section class="seccion-noticias container py-5">
  <div class="mb-4 border-start border-3 border-black ps-3">
    <h2 class="fs-4 fw-bold text-uppercase text-black mb-1">Noticias</h2>
    <p class="text-muted small mb-0">Últimas novedades y actividades de la Defensoría</p>
  </div>

  <!-- Buscador -->
  <div class="mb-4 row">
    <div class="col-md-8">
      <input type="text" id="busqueda" class="form-control rounded-pill px-4 py-2" placeholder="Buscar por título o palabra clave...">
    </div>
    <div class="col-md-4">
      <button type="button" id="limpiar" class="btn btn-sm btn-outline-secondary rounded-pill mt-2 w-100">Limpiar</button>
    </div>
  </div>

  <!-- Grilla de noticias -->
  <div class="row g-4">
    <?php while ($noticia = mysqli_fetch_assoc($resultado)) { ?>
      <div class="col-lg-4 col-md-6 noticia-tarjeta">
        <article class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
          <?php if (!empty($noticia['foto'])): ?>
            <img src="/<?= $noticia['foto'] ?>" class="img-fluid w-100 object-fit-cover" style="height: 200px;" alt="Imagen noticia">
          <?php endif; ?>
          <div class="card-body d-flex flex-column">
            <h5 class="fw-bold text-dark titulo-noticia"><?= htmlspecialchars($noticia['titulo']) ?></h5>
            <p class="text-muted small mb-2"><i class="bi bi-calendar-event me-1"></i><?= date("d/m/Y H:i", strtotime($noticia['fecha_publicacion'])) ?></p>
            <p class="flex-grow-1 contenido-noticia"><?= substr(strip_tags($noticia['contenido']), 0, 140) ?>...</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <a href="detalleNoticia.php?id=<?= $noticia['noticia_id'] ?>" class="btn btn-outline-primary btn-sm rounded-pill">Ver más</a>
              <div class="share-icons">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://tusitio.com/detalleNoticia.php?id=<?= $noticia['noticia_id'] ?>" target="_blank" class="text-primary me-2"><i class="bi bi-facebook"></i></a>
                <a href="https://api.whatsapp.com/send?text=https://tusitio.com/detalleNoticia.php?id=<?= $noticia['noticia_id'] ?>" target="_blank" class="text-success me-2"><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="text-danger"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </article>
      </div>
    <?php } ?>
  </div>
</section>

<script>
  const input = document.getElementById('busqueda');
  const limpiar = document.getElementById('limpiar');
  const tarjetas = document.querySelectorAll('.noticia-tarjeta');

  input.addEventListener('input', () => {
    const texto = input.value.toLowerCase();
    tarjetas.forEach(card => {
      const titulo = card.querySelector('.titulo-noticia').textContent.toLowerCase();
      const contenido = card.querySelector('.contenido-noticia').textContent.toLowerCase();
      card.style.display = (titulo.includes(texto) || contenido.includes(texto)) ? 'block' : 'none';
    });
  });

  limpiar.addEventListener('click', () => {
    input.value = '';
    tarjetas.forEach(card => card.style.display = 'block');
  });
</script>

<?php include('../../../plantilla/footer.php'); ?>