<?php
include('../../../plantilla/head.php'); 
include_once __DIR__ . "/../../../Conexion/conexion.php";
include_once __DIR__ . '/../../../breadcrumbConfig.php'; 
include_once __DIR__ . '/../../../breadcrumb.php'; 
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM noticias WHERE noticia_id = $id AND estado = 1";
$resultado = mysqli_query($link, $sql);
$noticia = mysqli_fetch_assoc($resultado);

if (!$noticia) {
  echo "<div class='container py-5'><div class='alert alert-danger'>Noticia no encontrada.</div></div>";
  exit;
}
?>

<article class="container py-5">
  <h1><?= htmlspecialchars($noticia['titulo']) ?></h1>
  <p class="text-muted"><?= date("d/m/Y H:i", strtotime($noticia['fecha_publicacion'])) ?></p>
  <?php if (!empty($noticia['foto'])): ?>
    <img src="/<?= $noticia['foto'] ?>" class="card-img-top" alt="Imagen noticia">
  <?php endif; ?>
  <div class="contenido">
    <?= nl2br($noticia['contenido']) ?>
  </div>
</article>
