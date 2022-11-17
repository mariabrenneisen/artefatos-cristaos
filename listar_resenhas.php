<?php
    include("conexao.php");
    $comando = $pdo->prepare("SELECT codResenha, tituloLivro, autor, resenha, nome FROM resenha");
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_resenha = $comando->fetchAll();
    }else{
        echo("Não há resenhas cadastardas.");
    }
    unset($comando);
    unset($pdo);
?>