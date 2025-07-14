<?php
function breadcrumbPersonalizado($diccionario, $baseUrl = '/DefensoriaDelPueblo/') {
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $breadcrumb = '<nav aria-label="breadcrumb"><ol class="breadcrumb mb-0">';
    $build = $baseUrl;
    $ultimaClave = array_key_last($path);

    foreach ($path as $i => $segmento) {
        if (!array_key_exists($segmento, $diccionario) || $diccionario[$segmento] === null) {
            continue;
        }

        $nombre = $diccionario[$segmento];
        if ($i !== $ultimaClave) {
            $build .= $segmento . '/';
            $breadcrumb .= '<li class="breadcrumb-item"><a href="' . $build . '">' . $nombre . '</a></li>';
        } else {
            $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . $nombre . '</li>';
        }
    }

    $breadcrumb .= '</ol></nav>';
    return $breadcrumb;
}
?>
