<?php
include('../../../plantilla/head.php');
include_once __DIR__ . '/../../../breadcrumbConfig.php';
include_once __DIR__ . '/../../../breadcrumb.php';
include_once __DIR__ . "/../../../Conexion/conexion.php";

echo breadcrumbPersonalizado($breadcrumbNames);

$sql = "SELECT resolucion_id, estado, Anio, Titulo, pdf FROM resoluciones WHERE estado = 1 ORDER BY resolucion_id DESC";
$resultado = mysqli_query($link, $sql);
?>

<main>
  <div class="container py-5">
    <h1 class="text-center mb-5">Resoluciones de la Defensoría del Pueblo de la Municipalidad de General Pueyrredon</h1>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <?php if ($resultado && mysqli_num_rows($resultado) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
            <div class="card shadow-sm border-0 mb-4 mx-auto">
              <div class="card-body">
                <h5 class="card-title text-uppercase fw-bold mb-3">
                  Resolución <?= htmlspecialchars($row['resolucion_id']) ?>/<?= htmlspecialchars($row['Anio']) ?>
                </h5>
                <p class="card-text"><?= htmlspecialchars($row['Titulo']) ?></p>
                <a href="<?= htmlspecialchars($row['pdf']) ?>" class="btn btn-outline-primary" target="_blank">
                  <i class="bi bi-file-earmark-text me-2"></i> Ver Resolución Completa
                </a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p class="text-center">No se encontraron resoluciones activas.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>

<?php include('../../../plantilla/footer.php'); ?>
