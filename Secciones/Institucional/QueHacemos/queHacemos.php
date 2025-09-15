<?php include "../../../plantilla/head.php"; 
?>

<?php
    include_once __DIR__ . '/../../../breadcrumbConfig.php';
    include_once __DIR__ . '/../../../breadcrumb.php';
?>
    <section class="que-hacemos-section d-flex align-items-center justify-content-center mt-3">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <h1 class="titulo-seccion anim-slide mb-4">
                        ¿Qué hacemos?
                    </h1>

                    <h5 class="  fade-on-scroll">
                        Debe consignarse que la operatoria de la Defensoría del Pueblo se rige por la Ordenanza 13663 y modificatorias que, en su artículo 15º, establece que su actuación no estará sujeta a formalidad alguna.
                    </h5>
                    <br>
                    <h5 class="  fade-on-scroll">
                        En virtud de ello, el procedimiento implementado permite – en una primera atención – la evaluación respecto a la incumbencia del tema traído a consulta y, en caso de no corresponder la intervención, su derivación al organismo competente.
                    </h5>
                    <br>
                    <h5 class="  fade-on-scroll">
                        Evaluado el tema y, de resultar pertinente al ámbito de actuación de la Defensoría, hay distintos procedimientos, dos de ellos previos a la formalización de una actuación, que se llevan a cabo: Si el ciudadano presentante no ha efectuado previamente su queja a la dependencia municipal directamente involucrada y/o a la empresa prestadora de servicios público, se le solicita que cumplimente con ello y – de no mediar respuesta favorable – vuelva a la Defensoría para iniciar la actuación correspondiente.
                    </h5>
                    <br>
                    <h5 class="  fade-on-scroll">
                        Si el caso traído a consulta requiere de una respuesta rápida y permite un tipo de gestión directa se procede a viabilizar tal procedimiento a través de la intervención telefónica o derivación directa a la persona que podrá dar solución al mismo, con resultado positivo desde el propio ciudadano y la administración, dado el ahorro de costo en tiempo y dinero que demanda la puesta en marcha de los mecanismos burocráticos tradicionales de la administración pública.
                    </h5>
                    <br>
                    <h5 class="  fade-on-scroll mb-3">
                        Finalmente, y cuando ninguno de los procedimientos precedentes han podido instrumentarse, se inicia la tramitación de un expediente (Actuación) que opera a partir de las normas y procedimientos administrativos previstos en la Ordenanza de creación y la Ordenanza General de Procedimientos Administrativos.
                    </h5>

                </div>
            </div>
        </div>
    </section>

<?php include('../../../plantilla/footer.php'); ?>

</body>
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
</html>

    