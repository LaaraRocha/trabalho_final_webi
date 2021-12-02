<?php

function consultaUsuario($usuario, $senha) {
    try {
        $conn = new PDO(
            'mysql:host=localhost;dbname=trabalho_webi',
            'root', '');
        $stmt = $conn->prepare(
            "SELECT * FROM usuarios WHERE usuarios.login = '".$usuario."' AND usuarios.password = '".md5($senha)."'");
        $stmt->execute();
        return !empty($stmt->fetchAll());
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

function cadastrarPessoa($nome) {
    try {
        $conn = new PDO(
            'mysql:host=localhost;dbname=trabalho_webi',
            'root', '');
        $stmt = $conn->prepare(
            "INSERT INTO `pessoas`(`nome`) VALUES ('".$nome."'");
        $stmt->execute();
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

function alterarPessoa($nomeAntigo, $nomeNovo) {
    try {
        $conn = new PDO(
            'mysql:host=localhost;dbname=trabalho_webi',
            'root', '');
        $stmt = $conn->prepare(
            "UPDATE `pessoas` SET `nome`='".$nomeNovo."' WHERE `nome`='".$nomeAntigo."'");
        $stmt->execute();
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

function excluirPessoa($nome) {
    try {
        $conn = new PDO(
            'mysql:host=localhost;dbname=trabalho_webi',
            'root', '');
        $stmt = $conn->prepare(
            "DELETE FROM `pessoas` WHERE '".$nome."'");
        $stmt->execute();
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}