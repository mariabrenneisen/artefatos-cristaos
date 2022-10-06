<?php
    include("conexao.php");

    $tituloLivro = $_POST["tituloLivro"];
    $autor = $_POST["autor"];
    $resenha = $_POST["resenha"];

    $comando = $pdo->prepare("INSERT INTO resenha (tituloLivro, autor, resenha) VALUES(:tituloLivro,:autor,:resenha)");
    
    $comando->bindValue(":tituloLivro",$tituloLivro);                                     
    $comando->bindValue(":autor",$autor); 
    $comando->bindValue(":resenha",$resenha);
    
    $comando->execute();     
    
    
    header("Location: Resenhas_prontas.html");
?>