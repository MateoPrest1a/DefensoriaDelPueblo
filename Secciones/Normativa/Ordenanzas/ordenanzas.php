<?php 
include('../../../plantilla/head.php'); 
include_once __DIR__ . '/../../../breadcrumbConfig.php';
include_once __DIR__ . '/../../../breadcrumb.php';
echo breadcrumbPersonalizado($breadcrumbNames);
?>

<main>
  <div class="container py-5">
    <div class="title mb-5">
      <h1 class="text-center fadeIn">Ordenanza de creación de la Defensoría del Pueblo <hr class="mb-2 slideIn"></h1>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-lg-8 scroll-reveal">
        <div class="card shadow-sm border-0 mx-auto">
          <div class="card-body">
            <h5 class="card-title text-uppercase fw-bold mb-3">
              Ordenanza Nº 26.185
            </h5>
            <p class="card-text">
              En el siguiente link, puede acceder a la Ordenanza Nº 26.185 con su texto ordenado.
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

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const elementos = document.querySelectorAll(".scroll-reveal");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // opcional: solo una vez
        }
      });
    }, {
      threshold: 0.1
    });

    elementos.forEach(el => observer.observe(el));
  });
</script>

<?php include('../../../plantilla/footer.php'); ?>
