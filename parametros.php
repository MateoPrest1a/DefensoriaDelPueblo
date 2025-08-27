<?php 
    define('BASE_URL','/DefensoriaDelPueblo/');

    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("DB","defensoria");

    define("TITULO","Defensoria del Pueblo");
    define("QUEHACEMOS","../Institucional/QueHacemos/queHacemos.php");
    define("CONTACTENOS","../Contactenos/FormContacto/contactenos.php");
    define("NOTICIAS","../Prensa/Noticias/noticias.php");

    session_start();
    function archivo_actual(){
        return basename($_SERVER['PHP_SELF']);
    }
?> 