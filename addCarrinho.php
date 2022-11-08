<?php
    include("conexao.php");

    $preco = $_GET["preco"];
    $codProduto = $_GET["codProduto"];
    $nomeProduto = $_GET["nomeProduto"];

    $comando = $pdo->prepare("INSERT INTO carrinho (preco,  quantidade, fk_produto, nomeProduto) VALUES(:p, :q, :fk, :n)");

    $comando->bindValue(":p",$preco); 
    $comando->bindValue(":q", 1);                                     
    $comando->bindValue(":fk",$codProduto);
    $comando->bindValue(":n",$nomeProduto);
    
    $comando->execute();     
    
    
    header("Location: Carrinho.php");
?>