<?php
    include_once("connection.php");

    $consulta = "SELECT * FROM pessoas";

    $id = $_GET['id'];
    $nome = "SELECT nome FROM pessoas WHERE id_pessoa=$id";
    
    $results = $conn->query($consulta);
    $result_nome = $conn->query($nome);

?>