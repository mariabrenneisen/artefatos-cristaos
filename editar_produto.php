<?php
    include("conexao.php");


    $codigo = $_GET["codigo"];
        
    $nomeProduto = $_POST["nomeProduto"];
    $precoProduto = $_POST["precoProduto"];
    $editora = $_POST["editora"];
    $faixa_etaria = $_POST["faixa_etaria"];
    $codigo_livro = $_POST["codigo_livro"];
    $autor = $_POST["autor"];
    $ano_lancamento = $_POST["ano_lancamento"];
    $quantidade_estoque = $_POST["quantidade_estoque"];
    $sinopse = $_POST["sinopse"];
    $descricao_produto = $_POST["descricao_produto"];
    $imagem = $_FILES['imagem_produto']; 
    $extensao = $imagem['type'];
    
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);
    

    $comando = $pdo->prepare("UPDATE produto SET nomeProduto = :nomeProduto, precoProduto = :precoProduto, editora = :editora, faixa_etaria = :faixa_etaria, codigo_livro = :codigo_livro, autor = :autor, ano_lancamento = :ano_lancamento, quantidade_estoque = :quantidade_estoque, sinopse = :sinopse, descricao_produto = :descricao_produto, imagem_produto = :imagem_produto WHERE codProduto = :codigo");
    
    $comando->bindValue(":nomeProduto",$nomeProduto);                                     
    $comando->bindValue(":precoProduto",$precoProduto); 
    $comando->bindValue(":editora",$editora);                                     
    $comando->bindValue(":faixa_etaria",$faixa_etaria);
    $comando->bindValue(":codigo_livro",$codigo_livro);                                     
    $comando->bindValue(":autor",$autor);
    $comando->bindValue(":ano_lancamento",$ano_lancamento);  
    $comando->bindValue(":quantidade_estoque",$quantidade_estoque); 
    $comando->bindValue(":sinopse",$sinopse); 
    $comando->bindValue(":descricao_produto",$descricao_produto);                                 
    $comando->bindValue(":imagem_produto", $base64);

    $comando->bindValue(":codigo", $codigo);

    $comando->execute();
    
    unset($comando);
    unset($pdo);

    header("Location: lista_produtos.php");

    
?>