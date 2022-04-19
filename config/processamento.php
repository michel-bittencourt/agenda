<?php
    include_once("connection.php");

    $consulta = "SELECT * FROM pessoas";
    $results = $conn->query($consulta);

?>