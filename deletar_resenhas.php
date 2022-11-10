<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando = $pdo->prepare('DELETE FROM resenha WHERE codResenha = :codigo;');
    $comando->bindValue(":codigo",$codigo); 
    $comando->execute();

    header("Location: lista_resenha.php");
?>

