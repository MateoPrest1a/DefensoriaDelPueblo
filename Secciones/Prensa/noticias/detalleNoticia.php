<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/DefensoriaDelPueblo/parametros.php';
include(HEADER);
include(CONEXION);
mysqli_set_charset($link, "utf8mb4");

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
    <h1 class="fw-bold text-black anim-slide"><?= htmlspecialchars($noticia['titulo']) ?></h1>
    <p class="text-muted anim-slide"><i class="bi bi-calendar-event me-1"></i><?= date("d/m/Y H:i", strtotime($noticia['fecha_publicacion'])) ?></p>
  </div>
  <?php if (!empty($noticia['foto'])): ?>
    <div class="mb-4 text-center anim-slide">
      <img src="/<?= $noticia['foto'] ?>" class="img-fluid rounded shadow-sm" alt="Imagen noticia" style="max-height: 450px; object-fit: cover;">
    </div>
  <?php endif; ?>
  <div class="contenido fs-5 lh-lg px-3 px-md-5 text-center fade-on-scroll">
    <?= nl2br($noticia['contenido']) ?>
  </div>
</article>

<?php include(FOOTER); ?>

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
