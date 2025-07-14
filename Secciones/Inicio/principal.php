<!DOCTYPE html>
<html lang="es">
<?php include('../../plantilla/head.php'); ?>

<style>
  #carouselDefensoria .carousel-inner {
  max-height: 300px;
  overflow: hidden;
}

#carouselDefensoria .carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

</style>

<body>

<!-- Carrusel -->
<div id="carouselDefensoria" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/image1.jpg" class="d-block w-100" alt="Actividad 1">
    </div>
    <div class="carousel-item">
      <img src="./images/image2.jpg" class="d-block w-100" alt="Actividad 2">
    </div>
    <div class="carousel-item">
      <img src="./images/image3.jpg" class="d-block w-100" alt="Publicidad institucional">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselDefensoria" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselDefensoria" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<!-- Bienvenida -->
<section class="py-5 text-center bg-white">
  <div class="container">
    <h1 class="display-1 titulo-animado">Bienvenidos a la Defensoría del Pueblo</h1>
    <br>
    <p class="lead">
      Esta es la pagina web de la Defensoría del Pueblo de la Municipalidad de General Pueyrredon.
      Por este medio trataremos de dar a conocer nuestro trabajo, las acciones que realizamos y el tratamiento dado a los temas que nos llegan.
      Creemos en un sistema comunicacional de ida y vuelta, por lo que sumamos este medio para que se contacten con nosotros para acercarnos las inquietudes y quejas para poder analizarlas y tratarlas.
    </p>
  </div>
</section>

<!-- Mapa imagen-->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">¿Dónde estamos?</h2>
    <div class="map-container mx-auto text-center" style="max-width: 800px;">
      <a href="https://www.google.com.ar/maps/place/Municipalidad+de+General+Pueyrredon/@-37.9976633,-57.5516251,16z/data=!3m1!4b1!4m6!3m5!1s0x9584dc03bb58eb2b:0xfc58db7e5aa0879f!8m2!3d-37.9976663!4d-57.5498044!16s%2Fg%2F1tdb0w9g?hl=es&entry=ttu&g_ep=EgoyMDI1MDcwOS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
        <img src="./images/mapa.png" alt="Ubicación Municipalidad" class="img-fluid" style="max-height: 400px; object-fit: cover;">
      </a>
    </div>
  </div>
</section>

<?php include('../../plantilla/footer.php');?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>