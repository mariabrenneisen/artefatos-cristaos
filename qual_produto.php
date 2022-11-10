<?php
    include("conexao.php");
 
    $codigo = $_GET["codigo"];
    $comando = $pdo -> prepare("SELECT nomeProduto, precoProduto, editora, faixa_etaria, codigo_livro, autor, ano_lancamento, quantidade_estoque, imagem_produto, descricao_produto, sinopse FROM produto WHERE codProduto = :codigo");
    $comando->bindValue(":codigo", $codigo);
    $comando -> execute();

    if($comando->rowCount() >= 1)
    {
        $qual_produto = $comando->fetchAll();
    }
    unset($comando);
    unset($pdo);
?>