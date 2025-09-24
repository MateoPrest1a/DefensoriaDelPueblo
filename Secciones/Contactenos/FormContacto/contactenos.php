<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/DefensoriaDelPueblo/parametros.php';
include(HEADER);?>
<script src="https://www.google.com/recaptcha/api.js?render=6LcIosorAAAAADP5WzkUOuZw9Ko_YKTjDWSRnbBB"></script>

<div class="fondo-contactenos">
    <!-- Modal de error -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error en el formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="errorModalBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <?php
        include_once __DIR__ . '/../../../breadcrumbConfig.php';
        include_once __DIR__ . '/../../../breadcrumb.php';

    ?>

    <div class="container-fluid">
        <div class="row-md-12">
            <h1 class="titulo-contacto">Contáctenos</h1>
            <p class="text-center mb-0 text-secondary">El horario de atención al público es 8:00 a 13:30 hs de Lunes a Viernes</p>
            <br>
            <div class="card card-contacto">
                <div class="card-body card-contacto-body">
                    <div class="row mb-4 tipo-formulario">
                        <div class="col-12 col-md-6 mb-2 mb-md-0">
                            <button type="button" class="btn btn-toggle-form w-100 active" data-tipo="consulta">Consulta</button>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <button type="button" class="btn btn-toggle-form w-100" data-tipo="denuncia">Denuncia</button>
                        </div>
                    </div>

                    <form action="confirmacion_mail.php" method="post" id="demo-form">
                        <input type="hidden" name="tipo" id="tipoFormulario" value="consulta">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="name" class="form-label fs-4">Nombre<span class="asterisco">*</span></label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="surename" class="form-label fs-4">Apellido<span class="asterisco">*</span></label>
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
                                    <label for="telefono" class="form-label fs-4">Teléfono<span class="asterisco">*</span></label>
                                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ej: +1234567890">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="comentario" class="form-label fs-4">Mensaje<span class="asterisco">*</span></label>
                                    <textarea class="form-control" id="comentario" rows="4" placeholder="Ingrese su mensaje aquí..." name="comentario"></textarea>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="recaptcha_token" id="recaptchaToken">

                        <div class="text-end">
                            <button type="submit" class="btn btn-contacto">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include(FOOTER); ?>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    let tipoActual = "consulta";
    $("#tipoFormulario").val(tipoActual); // valor inicial

    $(".btn-toggle-form").click(function () {
        tipoActual = $(this).data("tipo");
        $("#tipoFormulario").val(tipoActual); // actualiza el campo oculto
        $(".btn-toggle-form").removeClass("active");
        $(this).addClass("active");
        $("span.asterisco").css("opacity", "0").removeClass("animar-asterisco");
        $("input, textarea").removeClass("campo-obligatorio");
    });

    $("#demo-form").submit(function (e) {
        e.preventDefault();

        let camposObligatorios = tipoActual === "denuncia"
            ? ["#name", "#surename", "#telefono", "#email", "#comentario"]
            : ["#name", "#email", "#comentario"];

        let incompletos = [];
        let errores = [];

        $("span.asterisco").css("opacity", "0").removeClass("animar-asterisco");
        $("input, textarea").removeClass("campo-obligatorio");

        const nombresCampos = {
            "#name": "Nombre",
            "#surename": "Apellido",
            "#email": "Correo electrónico",
            "#telefono": "Teléfono",
            "#comentario": "Mensaje"
        };

        camposObligatorios.forEach(function (selector) {
            const campo = $(selector);
            if (campo.val().trim() === "") {
                incompletos.push(nombresCampos[selector]);
                let span = campo.siblings("span.asterisco");
                if (span.length === 0) {
                    span = campo.closest(".mb-3, .col").find("span.asterisco");
                }
                if (span.length > 0) {
                    void span[0].offsetWidth;
                    span.addClass("animar-asterisco").css("opacity", "1");
                }
                campo.addClass("campo-obligatorio");
            }
        });

        let email = $("#email").val().trim();
        let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email && !emailRegex.test(email)) {
            errores.push("Ingrese un correo electrónico válido, por ejemplo: correo@valido.com");
        }

        let comentario = $("#comentario").val().trim();
        if (comentario && comentario.split(/\s+/).filter(Boolean).length < 20) {
            errores.push("El mensaje debe tener al menos 20 palabras.");
        }

        let telefono = $("#telefono").val().trim();
        if (tipoActual === "denuncia" && telefono) {
            let telSoloNumeros = telefono.replace(/\D/g, "");
            if (!/^\d{10,}$/.test(telSoloNumeros)) {
                errores.push("El teléfono debe contener solo números y al menos 10 dígitos.");
            }
        }

        if (incompletos.length > 0) {
            errores.push("Por favor complete los siguientes campos obligatorios: " + incompletos.join(", ") + ".");
        }

        if (errores.length > 0) {
            $("#errorModalBody").html(errores.map(e => `<div>${e}</div>`).join(""));
            $("#errorModal").modal("show");
            return;
        }

        // Ejecutar reCAPTCHA justo antes de enviar
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcIosorAAAAADP5WzkUOuZw9Ko_YKTjDWSRnbBB', {action: 'contacto'}).then(function (token) {
                document.getElementById('recaptchaToken').value = token;
                document.getElementById("demo-form").submit();
            });
        });
    });

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
