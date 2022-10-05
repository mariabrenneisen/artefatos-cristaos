<?php
    include("conexao.php");

    $email = $_POST[""];
    $senha = $_POST["senha"];

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