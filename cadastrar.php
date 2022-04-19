<?php
include_once("templates/header.php");

?>

<main id="main_cadastrar">

    <div id="form_cadastrar">
        <h1>Cadastrar</h1>
        <a class="btn_voltar_cadastrar" href="index.php"><i class="bi bi-backspace-fill"> </i>Voltar</a>
        <form id="row g-3" action="">

        </form>
    </div>

    <form class="row g-3">
        <div class="inp_nome col-md-5">
            <label for="inputNome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="inputNome" placeholder="Digite o primeiro nome">
        </div>
        <div class="col-md-5">
            <label for="inputSobrenome" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite o(s) sobrenome(s)">
        </div>
        <div class="col-md-5">
            <label for="inputCel" class="form-label">Celular/Telefone:</label>
            <input type="text" class="form-control" id="inputCel" placeholder="Digite o primeiro nome">
        </div>
        <div class="col-md-5">
            <label for="inputObs" class="form-label">Observação:</label>
            <input type="text" class="form-control" id="inputObs" placeholder="Digite o(s) sobrenome(s)">
        </div>
        <input class="btn_cadastrar" type="submit" value="Cadastrar">
    </form>

    <form class="caixa_pesquisar col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Pesquisar" aria-label="Search">
        <a href="#"><i class="icone_menu bi bi-search"></i></a>
    </form>
    <table class="tbl_consultar table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Celular</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result) : ?>
                <tr>
                    <td scope="row"><?= $result["id_pessoa"] ?></td>
                    <td scope="row"><?= $result["nome"] ?></td>
                    <td scope="row"><?= $result["sobrenome"] ?></td>
                    <td scope="row"><?= $result["num_cel"] ?></td>
                    <td class="actions">
                        <a href="show.php?id=<?= $result['id_pessoa'] ?>"><i class="bi bi-eye-fill"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>

<?php
include_once("templates/footer.php");
?>