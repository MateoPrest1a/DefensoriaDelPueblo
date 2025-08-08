<body>
    <!-- Cabecera -->
    <?php include "../../plantilla/head.php"; ?>

    <!-- Contenedor principal con navbar lateral y contenido -->
    <div class="d-flex">
        <!-- Navbar vertical -->
        <nav class="d-flex flex-column bg-light p-3" style="width: 220px; min-height: 100vh; border-right: 1px solid #ccc;">
            <a href="#" class="btn btn-clean mb-5"><i class="bi bi-person-circle"></i>&nbsp;Autoridades</a>
            <a href="#" class="btn btn-clean mb-5"><i class="bi bi-patch-question-fill"></i>&nbsp;FAQ</a>
            <a href="#" class="btn btn-clean mb-5"><i class="bi bi-bookmark-fill"></i>&nbsp;Normativas</a>
            <a href="#" class="btn btn-clean mb-5"><i class="bi bi-newspaper"></i>&nbsp;Noticias</a>
            <a href="#" class="btn btn-clean mb-5"><i class="bi bi-book-fill"></i>&nbsp;Auditorías</a>
        </nav>

        <!-- Contenido principal -->
        <main class="flex-grow-1 p-4">
            <div class="container mt-4">
                <div class="row">
                    <div class="col">
                        <div class="card w-100" style="max-width: 600px;">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-bar-chart-line"></i>&nbsp;Ultimas Noticias</h5>
                                <!-- Aca debajo podria haber una query que traiga las ultimas 3 noticias cargadas por DATETIME y que el cuerpo de la noticia tenga las primeras 100 palabras hasta que haya un boton de "Leer más"-->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi-earmark"></i>&nbsp;Cargar una nueva opcion</h5>
                                <hr><br>
                                <div class="row">
                                    <button class="btn btn-primary mb-3"><i class="bi-plus-lg"></i>&nbsp;Cargar Noticia</button><br>
                                </div>
                                <div class="row">
                                    <button class="btn btn-primary mb-3"><i class="bi-plus-lg"></i>&nbsp;Cargar Normativa</button><br>
                                </div>
                                <div class="row">
                                    <button class="btn btn-primary mb-3"><i class="bi-plus-lg"></i>&nbsp;Cargar Memoria</button><br>
                                </div>                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include "../../plantilla/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
