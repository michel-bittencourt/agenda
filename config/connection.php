<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "agenda";

    $conn = new mysqli($host, $user, $pass, $bd);

    if($conn->connect_errno){
        echo ("ERRO DE CONEXÃO!");
    }
?>