<?php

function conectaBanco() {
    try {
        $conn = new PDO(
            'mysql:host=localhost;dbname=trabalho_webi',
            'root', '');
        $stmt = $conn->prepare(
            'SELECT cidades.*, 
                    estados.sigla as estado_sigla, 
                    estados.nome as estado_nome 
                    FROM cidades,estados 
                    WHERE cidades.estado = estados.id');
        $stmt->execute();
        $resultado = $stmt->fetchAll();
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}