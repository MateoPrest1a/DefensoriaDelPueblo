<?php include "../../../plantilla/head.php"; ?>
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

<div class="fondo-contactenos py-5">
    <div class="container-fluid">
        <div class="row-md-12">
            <h1 class="titulo-contacto">Contáctenos</h1>
            <div class="card card-contacto">
                <div class="card-body card-contacto-body">
                    <div class="row mb-4 tipo-formulario">
                        <div class="col-12 col-md-6 mb-2 mb-md-0 text-center">
                            <button type="button" class="btn btn-toggle-form w-100 active" data-tipo="consulta">Consulta</button>                            
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <button type="button" class="btn btn-toggle-form w-100" data-tipo="denuncia">Denuncia</button>
                        </div>
                    </div>
                    <form action="confirmacion_mail.php" method="post" id="demo-form">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="name" class="form-label fs-4">Nombre<span class="asterisco">*</span></label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="surename" class="form-label fs-4">Apellido<!--<span class="asterisco">*</span>--></label>
                                <input type="text" class="form-control" id="surename" name="surename">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="email" class="form-label fs-4">Correo Electrónico<span class="asterisco">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@ejemplo.com">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="telefono" class="form-label fs-4">Telefono<span class="asterisco">*</span></label>
                                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ej: +1234567890">
                                </div>
                            </div>                                                    
                        </div>

                        <?php //Apartado de Mensaje?>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="comentario" class="form-label fs-4">Mensaje<span class="asterisco">*</span></label>
                                    <textarea class="form-control" id="comentario" rows="4" placeholder="Ingrese su mensaje aquí..." name="comentario"></textarea>
                                </div>                                
                            </div>                            
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function () {
  let tipoActual = "consulta";

    $(".btn-toggle-form").click(function () {
        tipoActual = $(this).data("tipo");
        $(".btn-toggle-form").removeClass("active");
        $(this).addClass("active");

        // Limpiar estilos visuales al cambiar de tipo
        $("span.asterisco").css("opacity", "0").removeClass("animar-asterisco");
        $("input, textarea").removeClass("campo-obligatorio");
    });


  $("#demo-form").submit(function (e) {
    e.preventDefault(); // Bloqueamos el envío por defecto

    let camposObligatorios = tipoActual === "denuncia"
      ? ["#name", "#telefono", "#email", "#comentario"]
      : ["#name", "#email", "#comentario"];

    let incompletos = [];

    // Limpiar estilos previos
    $("span.asterisco").css("opacity", "0").removeClass("animar-asterisco");
    $("input, textarea").removeClass("campo-obligatorio");

    camposObligatorios.forEach(function (selector) {
      const campo = $(selector);
      if (campo.val().trim() === "") {
        incompletos.push(selector);

        // Mostrar asterisco con animación
        const span = campo.closest(".mb-3, .col").find("span.asterisco");
        void span[0].offsetWidth;
        span.addClass("animar-asterisco").css("opacity", "1");

        // Marcar borde rojo
        campo.addClass("campo-obligatorio");
      }
    });

    if (incompletos.length === 0) {
      // Si todo está completo, enviamos el formulario manualmente
      this.submit();
    }
  });

  // Limpieza en tiempo real
  $("#demo-form input, #demo-form textarea").on("input", function () {
    const campo = $(this);
    if (campo.val().trim() !== "") {
      campo.removeClass("campo-obligatorio");
      campo.closest(".mb-3, .col").find("span.asterisco").css("opacity", "0").removeClass("animar-asterisco");
    }
  });
});

</script>
</html>