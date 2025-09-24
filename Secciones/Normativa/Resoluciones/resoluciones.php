<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/DefensoriaDelPueblo/parametros.php';
include(HEADER);
include(CONEXION);

$aniosQuery = "SELECT DISTINCT Anio FROM resoluciones ORDER BY Anio DESC";
$aniosResult = mysqli_query($link, $aniosQuery);

$anioSeleccionado = isset($_GET['anio']) ? intval($_GET['anio']) : 0;

$sql = "SELECT resolucion_id, estado, Anio, Titulo, pdf 
        FROM resoluciones 
        WHERE estado = 1";

if ($anioSeleccionado > 0) {
    $sql .= " AND Anio = $anioSeleccionado";
}

$sql .= " ORDER BY resolucion_id DESC";
$resultado = mysqli_query($link, $sql);
?>

<main>
  <div class="container py-5">
    <h1 class="titulo-seccion-ordenanza anim-slide mb-4 text-center">Resoluciones de la Defensoría del Pueblo de la Municipalidad de General Pueyrredon</h1>
    <hr class="mb-2 slideIn">
    <br>
    <!-- Formulario de filtro -->
    <form method="GET" class="mb-4 text-center">
      <label for="anio" class="form-label fw-bold">Filtrar por Año:</label>
      <select name="anio" id="anio" class="form-select d-inline-block w-auto mx-2">
        <option value="">Todos</option>
        <?php while ($anioRow = mysqli_fetch_assoc($aniosResult)): ?>
          <option value="<?= $anioRow['Anio'] ?>" <?= ($anioSeleccionado == $anioRow['Anio']) ? 'selected' : '' ?>>
            <?= $anioRow['Anio'] ?>
          </option>
        <?php endwhile; ?>
      </select>
      <button type="submit" class="btn btn-resoluciones">Filtrar</button>
    </form>

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
                <a href="<?= htmlspecialchars($row['pdf'])  ?>" class="btn btn-outline-primary" target="_blank">
                  <i class="bi bi-file-earmark-text me-2"></i> Ver Resolución Completa
                </a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p class="text-center">No se encontraron resoluciones para el año seleccionado.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>
<?php include(FOOTER); ?>

