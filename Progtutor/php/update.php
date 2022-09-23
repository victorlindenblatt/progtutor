<?php
    $pdo = new PDO('mysql:host=localhost;dbname=meusite;charset=utf8', 'root', '');


    $id = $_GET["id"];
    $nome = $_GET["nome"];


    $stmt = $pdo->prepare('UPDATE faleconosco SET nome = ? WHERE id = ?');
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $id);
    $stmt->execute();



    echo "Usuário Atualizado..."

?>