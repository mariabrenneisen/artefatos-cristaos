<?php
    include("conexao.php");
 
    $codigo = $_SESSION["codUsuario"];

    $comando = $pdo -> prepare("SELECT nome, email, login_usuario, sobrenome, cpf, data_nascimento FROM usuario WHERE codUsuario = :codUsuario");
    $comando->bindValue(":codUsuario", $codigo);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_cliente = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>