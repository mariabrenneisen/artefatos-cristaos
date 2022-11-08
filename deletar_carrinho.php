<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando = $pdo->prepare('DELETE FROM carrinho WHERE codCarrinho = :codigo;');
    $comando->bindValue(":codigo",$codigo); 
    $comando->execute();

    header("Location: Carrinho.php");
?>

