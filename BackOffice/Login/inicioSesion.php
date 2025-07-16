<?php  
    include "../../parametros.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=TITULO?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>plantilla/style.css">
  </head>
  <body>

    <div class="flecha-retorno">
      <a href="<?=BASE_URL?>index.php" class="flecha-retorno">
        <i class="bi bi-arrow-left"></i>
      </a>
    </div>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center mb-3">
          <h1 class="mb-0 display-5">Inicio de Sesión</h1>
        </div>

        <form action="inicioSesionVerificar.php" method="post">
          <div class="mb-3">
            <input type="text" name="username" id="name" class="form-control form-control-lg" placeholder="Ingrese nombre de usuario" required>
          </div>
          <div class="mb-3">
            <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Ingrese su contraseña" required>
          </div>
          <div class="d-grid mb-2">
            <button type="submit" class="btn btn-primary btn-lg">Acceder</button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
