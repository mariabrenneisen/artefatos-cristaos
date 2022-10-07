<?php
include("conexao.php");

$nomeProduto = $_POST["nomeProduto"];
$precoProduto = $_POST["precoProduto"];
$editora = $_POST["editora"];
$faixa_etaria = $_POST["faixa_etaria"];
$codigo_livro = $_POST["codigo_livro"];
$autor = $_POST["autor"];
$ano_lancamento = $_POST["ano_lancamento"];
$quantidade_estoque = $_POST["quantidade_estoque"];

$comando = $pdo->prepare("INSERT INTO produto (nomeProduto, precoProduto, editora, faixa_etaria, codigo_livro, autor, ano_lancamento,quantidade_estoque) VALUES(:nomeProduto,:precoProduto,:editora,:faixa_etaria,:codigo_livro,:autor,:ano_lancamento,:quantidade_estoque)");

$comando->bindValue(":nomeProduto",$nomeProduto);                                     
$comando->bindValue(":precoProduto",$precoProduto); 
$comando->bindValue(":editora",$editora);                                     
$comando->bindValue(":faixa_etaria",$faixa_etaria);
$comando->bindValue(":codigo_livro",$codigo_livro);                                     
$comando->bindValue(":autor",$autor);
$comando->bindValue(":ano_lancamento",$ano_lancamento);  
$comando->bindValue(":quantidade_estoque",$quantidade_estoque);  

$comando->execute();     


header("Location:Admin.html");
?>