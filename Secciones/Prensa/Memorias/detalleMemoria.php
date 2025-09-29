<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/DefensoriaDelPueblo/parametros.php';
include(HEADER);
include(CONEXION);
mysqli_set_charset($link, "utf8mb4");

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM memorias WHERE memoria_id = ? AND estado = 1";
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$resultado = $stmt->get_result();
$memoria = $resultado->fetch_assoc();

if (!$memoria) {
  echo "<div class='container py-5'><div class='alert alert-danger'>Memoria no encontrada.</div></div>";
  exit;
}
?>

<article class="container py-5">
  <div class="text-center mb-4">
    <h1 class="fw-bold text-black titulo-seccion-ordenanza anim-slide mb-4 text-center"><?= htmlspecialchars($memoria['titulo']) ?></h1>
    <?php if (!empty($memoria['sub_titulo'])): ?>
      <p class="text-muted"><?= htmlspecialchars($memoria['sub_titulo']) ?></p>
    <?php endif; ?>
    <p class="text-muted"><i class="bi bi-calendar-event me-1"></i><?= date("d/m/Y", strtotime($memoria['fecha_creacion'])) ?></p>
  </div>

  <?php if (!empty($memoria['archivo'])): ?>
    <div class="mb-4 text-center">
      <iframe src="/<?= $memoria['archivo'] ?>" style="width:100%; height:600px;" frameborder="0"></iframe>
    </div>
  <?php else: ?>
    <p class="text-center text-muted">No hay archivo PDF disponible para esta memoria.</p>
  <?php endif; ?>
</article>

<?php include(FOOTER); ?>