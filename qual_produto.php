<?php
    include("conexao.php");

    $codigo = $_GET["codProduto"];
    $comando = $pdo -> prepare("SELECT nomeProduto, precoProduto, editora, faixa_etaria, codigo_livro, imagem_produto, descricao_produto, sinopse FROM produto WHERE codProduto = :codigo");
    $comando->bindValue(":codigo", $codigo);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_produto = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>