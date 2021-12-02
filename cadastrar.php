<?php

include 'banco.php';

if (isset($_POST['salvar'])) {
    cadastrarPessoa($_POST['nomePessoa']);
    echo '<p>cadastro realizado com sucesso</p>';
    echo '<a href="sistema.php">Voltar</a>';
}
?>


<form method="post">

    <input type="text" name="nomePessoa" placeholder="nome da pessoa" />
    <br/> <br/>
    <input type="submit" name="salvar" />

</form>