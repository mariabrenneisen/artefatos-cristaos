<?php
    include("conexao.php");

    $email = $_POST["nome"];
    $senha = $_POST["sobrenome"];
    $email = $_POST["cpf"];
    $senha = $_POST["data_nascimento"];
    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);
    $email = $_POST["login_usuario"];
    
    $comando = $pdo -> prepare("INSERT INTO pessoa (nome, sobrenome, cpf, data_nascimento,email, senha, login_usuario) VALUES(:nome,:sobrenome,:cpf,:data_nascimento,:email,:senha,:login_usuario)");
    
    $comando->bindValue(":nome",$nome);                                     
    $comando->bindValue(":sobrenome",$sobrenome); 
    $comando->bindValue(":cpf",$cpf);                                     
    $comando->bindValue(":data_nascimento",$data_nascimento); 
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha); 
    $comando->bindValue(":login_usuario",$login_usuario);    
    $comando->execute();                               

    header("Location:entrar.html");
?>