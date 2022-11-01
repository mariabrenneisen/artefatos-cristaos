<?php
    include("conexao.php");

    $tituloLivro = $_POST["tituloLivro"];
    $autor = $_POST["autor"];
    $resenha = $_POST["resenha"];
    $nome = $_POST["nome"];
    session_start();

    $comando = $pdo->prepare("INSERT INTO resenha (tituloLivro, autor, resenha,nome, fk_usuario_resenha) VALUES(:tituloLivro,:autor,:resenha,:nome, :fk_usuario_resenha)");

    $comando->bindValue(":tituloLivro",$tituloLivro);                                     
    $comando->bindValue(":autor",$autor); 
    $comando->bindValue(":resenha",$resenha);
    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":fk_usuario_resenha",$_SESSION['codUsuario']);
    
    $comando->execute();     
    
    
    header("Location: lista_resenhas.php");
?>