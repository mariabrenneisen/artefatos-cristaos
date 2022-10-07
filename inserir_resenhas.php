<?php
    include("conexao.php");

    $tituloLivro = $_POST["tituloLivro"];
    $autor = $_POST["autor"];
    $resenha = $_POST["resenha"];
    $fk = $_POST["fk_usuario_resenha"];

    $comando = $pdo->prepare("INSERT INTO resenha (tituloLivro, autor, resenha,fk_usuario_resenha) VALUES(:tituloLivro,:autor,:resenha,:fk_usuario_resenha)");

    $comando->bindValue(":tituloLivro",$tituloLivro);                                     
    $comando->bindValue(":autor",$autor); 
    $comando->bindValue(":resenha",$resenha);
    $comando->bindValue(":fk_usuario_resenha",$_SESSION['codUsuario']);
    
    $comando->execute();     
    
    
    header("Location: Resenhas_prontas.html");
?>