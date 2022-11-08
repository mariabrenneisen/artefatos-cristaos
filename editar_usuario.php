<?php
    include("conexao.php");

    session_start(); 

    $codigo = $_SESSION["codUsuario"];
    $email = $_POST["email"]; 
    $login_usuario = $_POST["login_usuario"]; 
    $nome = $_POST["nome"]; 
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"]; 
    $data_nascimento = $_POST["data_nascimento"];

    //comando sql.
    $comando = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, login_usuario = :login_usuario, sobrenome = :sobrenome, cpf = :cpf, data_nascimento = :data_nascimento  WHERE codUsuario = :codigo");
    //Insira o comando SQL aqui.

    //insere valores das variaveis no comando sql.
    $comando->bindValue(":codigo",$codigo);
    $comando->bindValue(":nome",$nome); 
    $comando->bindValue(":email",$email); 
    $comando->bindValue(":login_usuario",$login_usuario);                                   
    $comando->bindValue(":sobrenome",$sobrenome);                                     
    $comando->bindValue(":cpf",$cpf);
    $comando->bindValue(":data_nascimento",$data_nascimento);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location: home.php");
?>

