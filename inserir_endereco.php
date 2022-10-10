<?php
    include("conexao.php");

    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $pais = $_POST["pais"];
    
    session_start();

    $comando = $pdo->prepare("INSERT INTO endereco (cep, rua, numero, complemento, bairro, cidade, estado, pais, fk_usuario_endereco) VALUES(:cep, :rua, :numero, :complemento, :bairro, :cidade, :estado, :pais, :fk_usuario_endereco)");

    $comando->bindValue(":cep",$cep);                                     
    $comando->bindValue(":rua",$rua); 
    $comando->bindValue(":numero",$numero);
    $comando->bindValue(":complemento",$complemento);                                     
    $comando->bindValue(":bairro",$bairro); 
    $comando->bindValue(":cidade",$cidade);
    $comando->bindValue(":estado",$estado); 
    $comando->bindValue(":pais",$pais);
    $comando->bindValue(":fk_usuario_endereco",$_SESSION['codUsuario']);
    
    $comando->execute();     
    
    
    header("Location: home.php");
?>