<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando = $pdo->prepare('DELETE FROM produto WHERE codProduto = :codigo;');
    $comando->bindValue(":codigo",$codigo); 
    $comando->execute();

    header("Location: lista_produtos.php");
?>

