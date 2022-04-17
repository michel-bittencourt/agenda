<?php
include_once("templates/header.php");
print_r($result_nome);
?>
<main id="main_show">
    <h2>Visão Completa</h2>
    <a class="btn_voltar" href="consultar.php"><i class="bi bi-backspace-fill"> </i>Voltar</a>
    <div class="tabela" id="view">
        <h3 id="main_title"><?= $result_nome ?></h3>
        <hr>
        <p class="bold">Contato: <?= $result_nome ?></p>
        <hr>
        <p class="bold">Observações:
        <p><?= $result_nome ?></p>
        </p>
    </div>
</main>
<?php
include_once("templates/footer.php");
?>