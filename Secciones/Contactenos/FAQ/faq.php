<?php 

    include('../../../plantilla/head.php'); 
    include_once __DIR__ . "/../../../Conexion/conexion.php";
    include_once __DIR__ . '/../../../breadcrumbConfig.php'; 
    include_once __DIR__ . '/../../../breadcrumb.php'; 
    mysqli_set_charset($link, "utf8mb4");

    $sql = "SELECT faq_id, pregunta, respuesta FROM faq WHERE estado = ?";
    $stmt = $link->prepare($sql);
    $estado = 1;
    $stmt->bind_param('i', $estado);
    $stmt->execute();
    $resultado = $stmt->get_result();
?>
    <section class="container py-5">
        <h1 class="titulo-seccion anim-slide mb-4 text-center">Preguntas Frecuentes</h1>
        <hr class="mb-4 slideIn">
            <div class="accordion slideUpFade-1s" id="faqAccordion">
                <?php
                    $index = 0;
                    while ($faq = mysqli_fetch_assoc($resultado)) {
                    $index++;
                    $faqId = "faq" . $index;
                ?>
                <div class="accordion-item mb-3 faq-item">
                    <h2 class="accordion-header" id="heading<?= $faqId ?>">
                        <button class="accordion-button <?= $index > 1 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $faqId ?>" aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" aria-controls="collapse<?= $faqId ?>">
                            <?= htmlspecialchars($faq['pregunta']) ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $faqId ?>" class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" aria-labelledby="heading<?= $faqId ?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <?= nl2br(htmlspecialchars($faq['respuesta'])) ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
    </section>

    <?php include('../../../plantilla/footer.php'); ?>
  </body>
</html>