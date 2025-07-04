<?php include('../../../plantilla/head.php'); 
    include_once __DIR__ . '/../../../breadcrumbConfig.php';
    include_once __DIR__ . '/../../../breadcrumb.php';
    echo breadcrumbPersonalizado($breadcrumbNames);
?>

<!-- Contenido principal -->
<main class="container my-5">
    <h1 class="mb-4 text-center">Autoridades</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Defensor del Pueblo</h5>
            <p class="card-text">Abog. Marcelo Pablo Lacedonia</p>
        </div>
    </div>
</main>

<?php include('../../../plantilla/footer.php'); ?>
