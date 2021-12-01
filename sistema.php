<form method="post">
    <table>
        <tr>
            <td><input type="submit" value="cadastrar" name="tela"></td>
            <td><input type="submit" value="alterar" name="tela"></td>
            <td><input type="submit" value="excluir" name="tela"></td>
        </tr>
    </table>

    <hr/>
</form>


<?php
if (isset($_POST['tela'])) {
    $_SESSION['tela'] = $_POST['tela'];
    if ($_SESSION['tela'] == 'cadastrar') {
        include 'cadastrar.php';
    }
    if ($_SESSION['tela'] == 'alterar') {
        include 'alterar.php';
    }
    if ($_SESSION['tela'] == 'excluir') {
        include 'excluir.php';
    }
}




?>