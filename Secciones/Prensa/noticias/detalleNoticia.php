<?php
include('../../../plantilla/head.php'); 
include_once __DIR__ . "/../../../Conexion/conexion.php";
include_once __DIR__ . '/../../../breadcrumbConfig.php'; 
include_once __DIR__ . '/../../../breadcrumb.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM noticias WHERE noticia_id = ? AND estado = 1";
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$resultado = $stmt->get_result();
$noticia = $resultado->fetch_assoc();

if (!$noticia) {
  echo "<div class='container py-5'><div class='alert alert-danger'>Noticia no encontrada.</div></div>";
  exit;
}
?>

<article class="container py-5">
  <div class="text-center mb-4">
    <h1 class="fw-bold text-black"><?= htmlspecialchars($noticia['titulo']) ?></h1>
    <p class="text-muted"><i class="bi bi-calendar-event me-1"></i><?= date("d/m/Y H:i", strtotime($noticia['fecha_publicacion'])) ?></p>
  </div>
  <?php if (!empty($noticia['foto'])): ?>
    <div class="mb-4 text-center">
      <img src="/<?= $noticia['foto'] ?>" class="img-fluid rounded shadow-sm" alt="Imagen noticia" style="max-height: 450px; object-fit: cover;">
    </div>
  <?php endif; ?>
  <div class="contenido fs-5 lh-lg px-3 px-md-5">
    <?= nl2br($noticia['contenido']) ?>
  </div>
</article>

<?php include('../../../plantilla/footer.php'); ?>

