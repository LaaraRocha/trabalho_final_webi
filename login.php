<?php

include 'banco.php';

if (isset($_POST['entrar'])) {
    if (consultaUsuario($_POST['login'], $_POST['senha'])) {
        echo '<a href="sistema.php">Entrar</a>';
        exit();
    } else {
        echo 'Seu usuário ou senha estão incorretos!';
    }
}
?>

<form method="post">
    <input type="text" name="login"
           placeholder="Login">
    <br>
    <input type="password" name="senha"
           placeholder="Senha">
    <br>
    <input type="submit" name="entrar">
</form>