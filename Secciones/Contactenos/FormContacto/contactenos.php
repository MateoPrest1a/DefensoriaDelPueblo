<?php include "../../../plantilla/head.php"; 
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php // API de reCAPTCHA v3?>
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
                <h1 class="display-1 py-4 titulo-display-1">Contactenos</h1>
                <div class="card">
                    <div class="card-body">                        
                        <form action="confirmacion_mail.php" method="post">
                            <div class="mb-3 position-relative">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3 position-relative">
                                <label for="surename" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="surename" name="surename">
                            </div>
                            <div class="mb-3 position-relative">
                                <label for="email" class="form-label">Correo Electronico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@ejemplo.com">
                            </div>
                            <div class="mb-3 position-relative">
                                <label for="comentario" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="comentario" rows="3" placeholder="Ingrese su mensaje aqui..." name="comentario"></textarea>
                            </div>
                            <div class="mb-3 position-relative">
                                <button type="submit" class="form-control button-envio">Enviar</button>

                                <!-- <button class="g-recaptcha" 
                                    data-sitekey="reCAPTCHA_site_key" 
                                    data-callback='onSubmit' 
                                    data-action='submit'>Submit</button> -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php //<hr class="my-1" style="background-color: black"> ?>
<?php include('../../../plantilla/footer.php'); ?>

</body>
</html>