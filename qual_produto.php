<?php
    include("conexao.php");
 
    $codigo = $_SESSION["codProduto"];

    $comando = $pdo -> prepare("SELECT nomeProduto, precoProduto, editora, faixa_etaria, codigo_livro, imagem_produto, descricao_produto, sinopse FROM produto WHERE codProduto = :codProduto");
    $comando->bindValue(":codProduto", $codigo);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_produto = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>