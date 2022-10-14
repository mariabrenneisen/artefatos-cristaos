<?php
    include("conexao.php");

    $codigo = $_POST['codigo'];

    //comando sql.
    $comando->prepare('DELETE FROM usuario WHERE codUsuario = :codigo;');
    //executa a consulta no banco de dados.
    $comando->execute();
?>