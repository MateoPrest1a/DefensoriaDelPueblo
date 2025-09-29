<?php 
    define('BASE_URL','http://localhost/DefensoriaDelPueblo/');
    

    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("DB","defensoria");

    define("TITULO","Defensoria del Pueblo");
    define("QUEHACEMOS","../Institucional/QueHacemos/queHacemos.php");
    define("CONTACTENOS","../Contactenos/FormContacto/contactenos.php");
    define("NOTICIAS","../Prensa/Noticias/noticias.php");



    define("URL_ORDENANZAS", BASE_URL . "Secciones/Normativa/Ordenanzas/");
    define("URL_RESOLUCION", BASE_URL . "Secciones/Normativa/Resolucion/");

    define("URL_REGLAMENTO", BASE_URL . "Secciones/Normativa/Reglamento/");
    define("URL_QUEHACEMOS", BASE_URL . "Secciones/Institucional/QueHacemos/");
    define("URL_AUTORIDADES", BASE_URL . "Secciones/Institucional/Autoridades/");
    define("URL_NOTICIAS", BASE_URL . "Secciones/Prensa/Noticias/");
    define("URL_MEMORIAS", BASE_URL . "Secciones/Prensa/Memorias/");
    define("URL_FAQ", BASE_URL . "Secciones/Contactenos/FAQ/");
    define("URL_CONTACTENOS", BASE_URL . "Secciones/Contactenos/FormContacto/");
    define("URL_RESENAS", BASE_URL . "Secciones/Contactenos/Resenas/");
    define("URL_LINKS", BASE_URL . "Secciones/Links/");
    define("URL_PRINCIPAL", BASE_URL . "Secciones/Inicio/principal.php");
    define("URL_LOGIN", BASE_URL . "Secciones/Login/login.php");
    define("URL_LOGOUT", BASE_URL . "Secciones/Login/logout.php");   

    define('HEADER', $_SERVER['DOCUMENT_ROOT'] . '/DefensoriaDelPueblo/plantilla/head.php');
    define("CONEXION", $_SERVER['DOCUMENT_ROOT'] . '/DefensoriaDelPueblo/Conexion/conexion.php');
    define("FOOTER", $_SERVER['DOCUMENT_ROOT'] . '/DefensoriaDelPueblo/plantilla/footer.php');    
    
    session_start();
    function archivo_actual(){
        return basename($_SERVER['PHP_SELF']);
    }
?>