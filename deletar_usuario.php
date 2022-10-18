<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando = $pdo->prepare('DELETE FROM usuario WHERE codUsuario = :codigo;');
    $comando->bindValue(":codigo",$codigo); 
    $comando->execute();

    header("Location: lista_clientes.php");
?>

