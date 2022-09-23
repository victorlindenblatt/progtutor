<?php
    $pdo = new PDO('mysql:host=localhost;dbname=meusite;charset=utf8', 'root', '');

    $stmt = $pdo->prepare("SELECT * FROM faleconosco");
    $stmt->execute();

    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {

        echo $linha['id'];
        echo " - ";    
        echo $linha['nome'];
        echo " - ";
        echo $linha['email'];
        echo " - ";
        echo $linha['celular'];
        echo " - ";
        echo $linha['senha'];
        echo "<br>";
    }
?>