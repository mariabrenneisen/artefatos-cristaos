<?php
    include("conexao.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT codUsuario, nome, email,tipo_cadastro FROM usuario WHERE codUsuario =:codUsuario;");
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":codUsuario", $_SESSION['codUsuario']);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em um vetor (Use para um registro).
        $informacoes_usuario = $comando->fetch();
    }else{
        echo("Não há usuários cadastrados.");
    }

    unset($comando);
    unset($pdo);
?>