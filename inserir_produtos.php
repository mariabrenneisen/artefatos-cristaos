<?php
    include("conexao.php");

        
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

    //comando SQL.
    $comando = $pdo->prepare("INSERT INTO produto (nomeProduto, precoProduto, editora, faixa_etaria, codigo_livro, autor, ano_lancamento,quantidade_estoque,sinopse,descricao_produto,imagem_produto) VALUES(:nomeProduto,:precoProduto,:editora,:faixa_etaria,:codigo_livro,:autor,:ano_lancamento,:quantidade_estoque,:sinopse,:descricao_produto,:imagem_produto)");
    //insere valores das variaveis no comando sql.
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

    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:cadastro_livros.html");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>