<?php
    include("conexao.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT codProduto, nomeProduto, precoProduto, faixa_etaria, codigo_livro, autor, ano_lancamento,	quantidade_estoque, imagem_produto FROM produto WHERE codProduto =:codProduto;");
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":codProduto", $_SESSION['codProduto']);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em um vetor (Use para um registro).
        $informacoes_usuario = $comando->fetch();
    }else{
        echo("Não há produtos cadastrados.");
    }

    unset($comando);
    unset($pdo);
?>