<?php 
    include("./parametros.php");

    $link = mysqli_connect(HOST,USER,PASS);
    mysqli_select_db($link,DB);
?>