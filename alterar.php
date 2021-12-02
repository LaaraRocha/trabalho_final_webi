<?php

include 'banco.php';

if (isset($_POST['salvar'])) {
    alterarPessoa($_POST['NovoNomePessoa'],$_POST['AntigoNomePessoa']);
    echo '<p>Alteração realizada com sucesso</p>';
    echo '<a href="sistema.php">Voltar</a>';
}
?>


<form method="post">

    <input type="text" name="novoNomePessoa" placeholder="nome novo" />
    <input type="text" name="AntigoNomePessoa" placeholder="nome antigo" />
    <br/> <br/>
    <input type="submit" name="salvar" />

</form>