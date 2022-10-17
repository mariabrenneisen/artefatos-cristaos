<?php
    include("conexao.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT codProduto, nomeProduto, precoProduto, faixa_etaria, codigo_livro, autor, ano_lancamento,	quantidade_estoque, imagem_produto FROM produto");
    //executa a consulta no banco de dados.
    $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $lista_usuarios = $comando->fetchAll();
    }else{
        echo("Não há produtos cadastrados.");
    }
    unset($comando);
    unset($pdo);
?>