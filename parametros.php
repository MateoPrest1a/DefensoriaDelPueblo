<?php 
    define('BASE_URL','/DefensoriaDelPueblo/');

    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("DB","defensoria");

    define("TITULO","Defensoria del Pueblo");

    session_start();
    function archivo_actual(){
        return basename($_SERVER['PHP_SELF']);
    }
?> 