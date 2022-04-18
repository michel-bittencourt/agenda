<?php
include_once("config/processamento.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--BOOTSTRAP JS-->
    <script src="js/bootstrap.js" defer></script>
    <!--STYLES-->
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/pesquisar.css">
    <link rel="stylesheet" href="css/show.css">
    <title>Agenda</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark shadow">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="icone_nav bi bi-list"></i>
                </button>
                <a class="link_title" href="index.php">
                    <h1>Agenda</h1>
                </a>

            </div>
        </nav>

        <div class="modal true" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-light id=" exampleModalLabel><i class="icon_title_menu bi bi-list"></i>Menu</h5>
                        <button class="btn_x" type="button" data-bs-dismiss="modal">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group list-group-flush">
                            <a href="index.php">
                                <li><i class="icone_menu bi bi-house-fill"></i>Início</li>
                            </a>
                            <hr>
                            <a href="consultar.php">
                                <li><i class="icone_menu bi bi-search"></i>Consultar</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li><i class="icone_menu bi bi-person-plus-fill"></i>Cadastrar</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li><i class="icone_menu bi bi-person-lines-fill"></i>Alterar</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li><i class="icone_menu bi bi-person-x-fill"></i>Excluir</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li><i class="icone_menu bi bi-gear-fill"></i>Configurações</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li><i class="icone_menu bi bi-box-arrow-left"></i>Sair</li>
                            </a>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </header>