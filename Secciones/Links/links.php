<?php
include('../../plantilla/head.php');
?>

<main>
    <div class="container py-5">
        <h1 class="text-center mb-5 fadeIn">
            Links de Interés
            <hr class="mb-2 slideIn">
        </h1>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 mx-auto scroll-reveal">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold mb-3">
                            Presidencia de la Nación
                        </h5>
                        <a href="https://www.argentina.gob.ar/presidencia" class="btn btn-outline-primary" target="_blank">
                            <i class="bi bi-file-earmark-text me-2"></i> Ir a la página oficial de la Presidencia de la Nación
                        </a>
                    </div>
                </div>
                <br>
                <div class="card shadow-sm border-0 mx-auto scroll-reveal">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold mb-3">
                            Senadores de la Nación
                        </h5>
                        <a href="https://www.senado.gob.ar/" class="btn btn-outline-primary" target="_blank">
                            <i class="bi bi-file-earmark-text me-2"></i> Ir a la página oficial de los Senadores de la Nación
                        </a>
                    </div>
                </div>
                <br>
                <div class="card shadow-sm border-0 mx-auto scroll-reveal">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold mb-3">
                           Diputados de la Nación
                        </h5>
                        <a href="https://www.diputados.gov.ar/" class="btn btn-outline-primary" target="_blank">
                            <i class="bi bi-file-earmark-text me-2"></i> Ir a la página oficial de los Diputados de la Nación
                        </a>
                    </div>
                </div>
                <br>
                 <div class="card shadow-sm border-0 mx-auto scroll-reveal">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold mb-3">
                           Poder Judicial de la Nación
                        </h5>
                        <a href="https://www.pjn.gov.ar/" class="btn btn-outline-primary" target="_blank">
                            <i class="bi bi-file-earmark-text me-2"></i> Ir a la página oficial del Poder Judicial de la Nación
                        </a>
                    </div>
                </div>
                <br>
                  <div class="card shadow-sm border-0 mx-auto scroll-reveal">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold mb-3">
                           Defensoria del Pueblo la República Argentina
                        </h5>
                        <a href="https://www.dpn.gob.ar/" class="btn btn-outline-primary" target="_blank">
                            <i class="bi bi-file-earmark-text me-2"></i> Ir a la página oficial de la Defensoría del Pueblo de la República Argentina
                        </a>
                    </div>
                </div>
                <br>
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

<?php include('../../plantilla/footer.php'); ?>