<?php
    $pdo = new PDO('mysql:host=localhost;dbname=meusite;charset=utf8', 'root', '');


$id = $_GET["id"];

$stmt = $pdo->prepare('DELETE FROM cadastre-se WHERE id = ?');
$stmt->bindParam(1, $id);
$stmt->execute();

echo "Usuário removido..."
?>