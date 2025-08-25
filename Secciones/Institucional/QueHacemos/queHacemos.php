<?php include "../../../plantilla/head.php"; 
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
    include_once __DIR__ . '/../../../breadcrumbConfig.php';
    include_once __DIR__ . '/../../../breadcrumb.php';
    echo breadcrumbPersonalizado($breadcrumbNames);
?>
    <!--
     <?php //GENERAR EN UN FUTURO EL BREADCRUMB DE MANERA AUTOMATICA UTILIZANDO PHP ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../Inicio/index.php">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">¿Que Hacemos</a></li>
            </ol>
        </nav> -->

        <div class="container">
            <?php //Carrusel de imágenes ?>
            <!--<div class="row-md-12">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/fotomuestra1.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="images/fotomuestra2.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="images/fotomuestra3.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previa</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>   -->
        
            <div class="row align-items-center">
                <div class="col-12 col-md-5 text-center">
                    <img src="images/logo_viejo.png" class="img-shadow img-fluid" style="max-width: 300px;">
                </div>
                <div class="col-12 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="titulo-seccion">¿Qué hacemos?</h1>
                            <p>Debe consignarse que la operatoria de la Defensoría del Pueblo se rige por la Ordenanza 13663 y modificatorias que, en su artículo 15º, establece que su actuación no estará sujeta a formalidad alguna; en virtud de ello, el procedimiento implementado permite – en una primera atención – la evaluación respecto a la incumbencia del tema traído a consulta y, en caso de no corresponder la intervención, su derivación al organismo competente. Evaluado el tema y, de resultar pertinente al ámbito de actuación de la Defensoría, hay distintos procedimientos, dos de ellos previos a la formalización de una actuación, que se llevan a cabo: Si el ciudadano presentante no ha efectuado previamente su queja a la dependencia municipal directamente involucrada y/o a la empresa prestadora de servicios público, se le solicita que cumplimente con ello y – de no mediar respuesta favorable – vuelva a la Defensoría para iniciar la actuación correspondiente. Si el caso traído a consulta requiere de una respuesta rápida y permite un tipo de gestión directa se procede a viabilizar tal procedimiento a través de la intervención telefónica o derivación directa a la persona que podrá dar solución al mismo, con resultado positivo desde el propio ciudadano y la administración, dado el ahorro de costo en tiempo y dinero que demanda la puesta en marcha de los mecanismos burocráticos tradicionales de la administración pública. Finalmente, y cuando ninguno de los procedimientos precedentes han podido instrumentarse, se inicia la tramitación de un expediente (Actuación) que opera a partir de las normas y procedimientos administrativos previstos en la Ordenanza de creación y la Ordenanza General de Procedimientos Administrativos.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php include('../../../plantilla/footer.php'); ?>

</body>
</html>

    