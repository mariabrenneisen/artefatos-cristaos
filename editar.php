<?php
    include("conexao.php");

    $codigo = $_POST['codigo'];

    //comando sql.
    $comando->prepare('UPDATE email, tipo_cadastro FROM usuario WHERE codUsuario = :codigo;');
    //executa a consulta no banco de dados.
    $comando->execute();
?>