<?php
include('../../../plantilla/head.php'); 
include_once __DIR__ . "/../../../Conexion/conexion.php";
include_once __DIR__ . '/../../../breadcrumbConfig.php'; 
include_once __DIR__ . '/../../../breadcrumb.php'; 
mysqli_set_charset($link, "utf8mb4");

$sql = "SELECT noticia_id, titulo, contenido, fecha_publicacion, foto FROM noticias WHERE estado = 1 ORDER BY fecha_publicacion DESC";
$resultado = mysqli_query($link, $sql);
?>

<section class="noticias-publicas container py-5">
  <h2 class="mb-4">Últimas Noticias</h2>
  <div class="row">
    <?php while ($noticia = mysqli_fetch_assoc($resultado)) { ?>
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <?php if (!empty($noticia['foto'])): ?>
            <img src="/<?= $noticia['foto'] ?>" class="card-img-top" alt="Imagen noticia">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($noticia['titulo']) ?></h5>
            <p class="card-text"><small class="text-muted"><?= date("d/m/Y H:i", strtotime($noticia['fecha_publicacion'])) ?></small></p>
            <p class="card-text"><?= substr(strip_tags($noticia['contenido']), 0, 150) ?>...</p>
            <a href="detalleNoticia.php?id=<?= $noticia['noticia_id'] ?>" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</section>
<?php include('../../../plantilla/footer.php'); ?>
