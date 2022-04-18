<?php
include_once("templates/header.php");
$id = $_GET['id'];
$nome = "SELECT * FROM pessoas WHERE id_pessoa=$id";
$result_nome = $conn->query($nome);
$linha = $result_nome->fetch_assoc();
?>
<main id="main_show">
    <h2>Visão Completa</h2>
    <a class="btn_voltar" href="consultar.php"><i class="bi bi-backspace-fill"> </i>Voltar</a>
    <div class="tabela" id="view">
        <h3 id="main_title"><?= $linha['nome'] ?> <?= $linha['sobrenome'] ?></h3>
        <hr>
        <p class="bold">Contato: <?= $linha['num_cel']  ?></p>
        <hr>
        <p class="bold">Observações:
        <p><?= $linha['obs']  ?></p>
        </p>
    </div>
</main>
<?php
include_once("templates/footer.php");
?>