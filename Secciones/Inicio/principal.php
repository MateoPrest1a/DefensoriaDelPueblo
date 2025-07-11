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
    <h1 class="display-1">Bienvenidos a la Defensoría del Pueblo</h1>
    <p class="lead">
      Esta es la página web de la Defensoría del Pueblo de la Municipalidad de General Pueyrredon...
    </p>
  </div>
</section>

<!-- Mapa -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Dónde estamos</h2>
    <div class="map-container mx-auto" style="max-width: 800px;">
      <iframe src="https://www.google.com/maps/embed?pb=..."
        width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy">
      </iframe>
    </div>
  </div>
</section>

<?php include('../../plantilla/footer.php');?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>