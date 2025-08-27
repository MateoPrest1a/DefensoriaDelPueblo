<?php include "../../../plantilla/head.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
</script>

<?php
include_once __DIR__ . '/../../../breadcrumbConfig.php';
include_once __DIR__ . '/../../../breadcrumb.php';
echo breadcrumbPersonalizado($breadcrumbNames);
?>

<div class="fondo py-5">
    <div class="container">
        <div class="row-md-12">
            <h1 class="titulo-contacto">Contáctenos</h1>
            <div class="card card-contacto">
                <div class="card-body card-contacto-body">
                    <form action="confirmacion_mail.php" method="post" id="demo-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="surename" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="surename" name="surename" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@ejemplo.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="comentario" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="comentario" rows="4" placeholder="Ingrese su mensaje aquí..." name="comentario" required></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-contacto">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../../../plantilla/footer.php'); ?>
</body>

</html>