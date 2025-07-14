<?php 
include('../../../plantilla/head.php'); 
include_once __DIR__ . '/../../../breadcrumbConfig.php';
include_once __DIR__ . '/../../../breadcrumb.php';
echo breadcrumbPersonalizado($breadcrumbNames);
?>

<main>
  <div class="container py-5">
    <h1 class="text-center mb-5">Resoluciones de la Defensoría del Pueblo de la Municipalidad de General Pueyrredon
</h1>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title text-uppercase fw-bold mb-3">
              Ordenanza Nº 13.663
            </h5>
            <p class="card-text">
              En el siguiente link, puede acceder a la Ordenanza Nº 13.663 con su texto ordenado.
            </p>

            <a href="http://www.defensoriadelpueblo.mdp.gob.ar/wp-content/uploads/2015/05/DEFENSOR-DEL-PUEBLO-DEL-PARTIDO-DE-GENERAL-PUEYRREDON.pdf" class="btn btn-outline-primary" target="_blank">
              <i class="bi bi-file-earmark-text me-2"></i> Ver Ordenanza Completa
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


<?php include('../../../plantilla/footer.php'); ?>