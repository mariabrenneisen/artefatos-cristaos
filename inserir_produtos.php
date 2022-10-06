<?php
include("conexao.php");

$nomeProduto = $_POST["nomeProduto"];
$precoProduto = $_POST["precoProduto"];
$editora = $_POST["editora"];
$faixa_editora = $_POST["faixa_editora"];
$codigo_livro = $_POST["codigo_livro"];
$autor = $_POST["autor"];
$ano_lancamento = $_POST["ano_lancamento"];
$quantidade_estoque = $_POST["quantidade_estoque"];

$ano_lancamento = $_POST["ano_lancamento"];
$comando = $pdo->prepare("INSERT INTO produto (nomeProduto, precoProduto, editora, faixa_editora, codigo_livro, autor, ano_lancamento,quantidade_estoque) VALUES(:nomeProduto,:precoProduto,:editora,:faixa_editora,:codigo_livro,:autor,:ano_lancamento,:quantidade_estoque)");

$comando->bindValue(":nomeProduto",$nomeProduto);                                     
$comando->bindValue(":precoProduto",$precoProduto); 
$comando->bindValue(":editora",$editora);                                     
$comando->bindValue(":faixa_editora",$faixa_editora);
$comando->bindValue(":codigo_livro",$codigo_livro);                                     
$comando->bindValue(":autor",$autor);
$comando->bindValue(":ano_lancamento",$ano_lancamento);  
$comando->bindValue(":quantidade_estoque",$quantidade_estoque);  

$comando->execute();     


header("Location:Admin.html");
?>