<?php
    include("conexao.php");


    $codigo = $_GET["codigo"];

    $tituloLivro = $_POST["tituloLivro"]; 
    $autor = $_POST["autor"]; 
    $resenha = $_POST["resenha"]; 
    $nome = $_POST["nome"];

    $comando = $pdo->prepare("UPDATE resenha SET tituloLivro = :tituloLivro, autor = :autor, resenha = :resenha, nome = :nome WHERE codResenha = :codigo");


    $comando->bindValue(":codigo",$codigo);
    $comando->bindValue(":tituloLivro",$tituloLivro); 
    $comando->bindValue(":autor",$autor); 
    $comando->bindValue(":resenha",$resenha);                                   
    $comando->bindValue(":nome",$nome);

    $comando->execute();

   
    unset($comando);
    unset($pdo);

    header("location: lista_resenha.php");
?>

