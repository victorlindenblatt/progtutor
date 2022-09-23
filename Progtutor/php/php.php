<?php
   
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $celular = $_GET["celular"];
    $senha = $_GET["senha"];

    echo $nome;
    echo $email;
    echo $celular;
    echo $senha;
    
    $pdo = new PDO('mysql:host=localhost;dbname=meusite;charset=utf8', 'root', '');

    $stmt = $pdo->prepare("INSERT INTO cadastre-se (nome, email, celular, senha)
    VALUES (?, ?, ?, ?);");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $celular);
    $stmt->bindParam(4, $senha);
    $stmt->execute();

echo "Cadastro realizado com sucesso!"
?>

