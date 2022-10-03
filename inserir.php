<?php
    include("conexao.php");

    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);
    $login_usuario = $_POST["login_usuario"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];

    $comando = $pdo->prepare("INSERT INTO usuario (email, senha, login_usuario, nome, sobrenome, cpf, data_nascimento) VALUES(:email,:senha,:login_usuario,:nome,:sobrenome,:cpf,:data_nascimento)");
    
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha); 
    $comando->bindValue(":login_usuario",$login_usuario);                                     
    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":sobrenome",$sobrenome);                                     
    $comando->bindValue(":cpf",$cpf);
    $comando->bindValue(":data_nascimento",$data_nascimento);  
    
    $comando->execute();     
    
    

    header("Location:entrar.html");
?>