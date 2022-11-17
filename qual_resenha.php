<?php
    include("conexao.php");
 
    $codigo = $_GET["codigo"];

    $comando = $pdo -> prepare("SELECT tituloLivro, autor, resenha, nome FROM resenha WHERE codResenha = :codResenha");
    $comando->bindValue(":codResenha", $codigo);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_resenha = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>