<?php 
    include_once __DIR__ . "/../parametros.php";

    $link = mysqli_connect(HOST,USER,PASS);
    mysqli_select_db($link,DB);
?>