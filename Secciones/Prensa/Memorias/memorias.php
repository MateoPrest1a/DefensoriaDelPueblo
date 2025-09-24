<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/DefensoriaDelPueblo/parametros.php';
include(HEADER);
include(CONEXION);
mysqli_set_charset($link, "utf8mb4");

// Filtro por búsqueda
$busqueda = isset($_GET['busqueda']) ? trim($_GET['busqueda']) : '';
$condicion = "estado = 1";
$params = [];
$types = '';

$sql = "SELECT memoria_id, titulo, sub_titulo, archivo, fecha_creacion, estado FROM memorias WHERE $condicion";

if ($busqueda !== '') {
    $sql .= " AND (titulo LIKE ? OR sub_titulo LIKE ?)";
    $busqueda_param = '%' . $busqueda . '%';
    $params[] = $busqueda_param;
    $params[] = $busqueda_param;
    $types .= 'ss';
}

$stmt = $link->prepare($sql);

if ($types) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$resultado = $stmt->get_result();
?>

<section class="seccion-noticias container py-5">
  <div class="mb-4 border-start border-3 border-black slideInUpNoticias-barra ps-3">
    <h2 class="fs-4 fw-bold text-uppercase text-black mb-1 slideInLeftNoticias-Titulo">Memorias</h2>
    <p class="text-muted small mb-0 slideInLeftNoticias-SubTitulo">Últimas memorias de la Defensoria del Pueblo</p>
  </div>

  <!-- Buscador -->
  <div class="mb-4 row">
    <div class="col-md-8">
      <input type="text" id="busqueda" class="form-control rounded-pill px-4 py-2 slideIn" placeholder="Buscar por título o subtítulo...">
    </div>
    <div class="col-md-4">
      <button type="button" id="limpiar" class="btn btn-sm btn-outline-secondary rounded-pill mt-2 w-100 slideInRight-btnNoticiaLimpiar">Limpiar</button>
    </div>
  </div>

  <!-- Grilla de memorias -->
  <div class="row g-4">
    <?php while ($memoria = mysqli_fetch_assoc($resultado)) { ?>
      <div class="col-lg-4 col-md-6 noticia-tarjeta">
        <div class="slideUpFade-1y5s h-100">
          <article class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
            <div class="card-body d-flex flex-column">
              <h5 class="fw-bold text-dark titulo-noticia"><?= htmlspecialchars($memoria['titulo']) ?></h5>
              <?php if (!empty($memoria['sub_titulo'])): ?>
                <p class="text-muted small mb-2"><?= htmlspecialchars($memoria['sub_titulo']) ?></p>
              <?php endif; ?>
              <p class="text-muted small mb-2"><i class="bi bi-calendar-event me-1"></i><?= date("d/m/Y", strtotime($memoria['fecha_creacion'])) ?></p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="detalleMemoria.php?id=<?= $memoria['memoria_id'] ?>" class="btn btn-outline-primary btn-sm rounded-pill">Ver más</a>
              </div>
            </div>
          </article>
        </div>
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
      const subtituloEl = card.querySelector('p.text-muted.small');
      const subtitulo = subtituloEl ? subtituloEl.textContent.toLowerCase() : '';
      card.style.display = (titulo.includes(texto) || subtitulo.includes(texto)) ? 'block' : 'none';
    });
  });

  limpiar.addEventListener('click', () => {
    input.value = '';
    tarjetas.forEach(card => card.style.display = 'block');
  });
</script>

<?php include(FOOTER); ?>