<?php

include("conexao.php");

$email = $_POST["email"];
$senha = MD5($_POST["senha"]);
$login_usuario = $_POST["login_usuario"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$data_nascimento = $_POST["data_nascimento"]; 

if($nome && $email){

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql->bindValue(':email',$email);
    $sql->execute();

    if($sql->rowCount() ===0){

        $sql = $pdo->prepare("INSERT INTO usuario (email, senha, login_usuario, nome, sobrenome, cpf, data_nascimento) VALUES(:email,:senha,:login_usuario,:nome,:sobrenome,:cpf,:data_nascimento)");
        $sql->bindValue(":email",$email);                                     
        $sql->bindValue(":senha",$senha); 
        $sql->bindValue(":login_usuario",$login_usuario);                                     
        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":sobrenome",$sobrenome);                                     
        $sql->bindValue(":cpf",$cpf);
        $sql->bindValue(":data_nascimento",$data_nascimento);
        $sql->execute(); 

        header("Location: home.php");
        exit;
    } else {
        echo ('<script> alert("E-mail já cadastrado.");
        window.open("Cadastro.html","_self");
        </script>');
}   
}else
{
    echo ('<script> alert("Insira as informações.");
    window.open("Cadastro.html","_self");
    </script>');
    exit;
}

?>