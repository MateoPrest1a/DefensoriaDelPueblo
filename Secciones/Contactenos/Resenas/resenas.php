<?php 
include('../../../plantilla/head.php'); 
include_once __DIR__ . "/../../../Conexion/conexion.php";
include_once __DIR__ . '/../../../breadcrumbConfig.php'; 
include_once __DIR__ . '/../../../breadcrumb.php'; 
mysqli_set_charset($link, "utf8mb4");

$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resena = trim($_POST['resena']);

    if (!empty($resena)) {
        $sql = "INSERT INTO resenas (resena, fecha) VALUES (?, NOW())";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("s", $resena);
        if ($stmt->execute()) {
            $mensaje = '<div class="alert alert-success text-center">¡Gracias! Tu reseña ha sido enviada.</div>';
        } else {
            $mensaje = '<div class="alert alert-danger text-center">Hubo un error. Intenta nuevamente.</div>';
        }
    }
}
?>

<section class="container py-5">
    <h1 class="titulo-seccion anim-slide mb-4 text-center">Reseña</h1>
    <hr class="mb-4 slideIn">

    <!-- Mensaje de confirmación -->
    <?php if ($mensaje) echo $mensaje; ?>

    <!-- Formulario de reseña -->
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <form method="POST" id="form-resena">
                <div class="mb-3">
                    <label for="resena" class="form-label fs-4">Déjanos tu opinión <span class="asterisco" style="opacity:0;color:red;">*</span></label>
                    <textarea class="form-control" id="resena" name="resena" rows="6" placeholder="Escribe tu reseña aquí..."></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('../../../plantilla/footer.php'); ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {

    $("#form-resena").submit(function (e) {
        e.preventDefault();
        let textarea = $("#resena");
        let contenido = textarea.val().trim();
        $("span.asterisco").css("opacity", "0");

        if (contenido === "") {
            textarea.addClass("is-invalid");
            $("span.asterisco").css("opacity", "1").addClass("animar-asterisco");
            return;
        } else {
            textarea.removeClass("is-invalid");
        }

        this.submit();
    });

    $("#resena").on("input", function () {
        if ($(this).val().trim() !== "") {
            $(this).removeClass("is-invalid");
            $("span.asterisco").css("opacity", "0").removeClass("animar-asterisco");
        }
    });

});
</script>
</html>