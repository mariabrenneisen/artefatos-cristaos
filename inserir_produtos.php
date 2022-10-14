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

$comando = $pdo->prepare("INSERT INTO produto (nomeProduto, precoProduto, editora, faixa_etaria, codigo_livro, autor, ano_lancamento,quantidade_estoque) VALUES(:nomeProduto,:precoProduto,:editora,:faixa_etaria,:codigo_livro,:autor,:ano_lancamento,:quantidade_estoque)");

$comando->bindValue(":nomeProduto",$nomeProduto);                                     
$comando->bindValue(":precoProduto",$precoProduto); 
$comando->bindValue(":editora",$editora);                                     
$comando->bindValue(":faixa_etaria",$faixa_etaria);
$comando->bindValue(":codigo_livro",$codigo_livro);                                     
$comando->bindValue(":autor",$autor);
$comando->bindValue(":ano_lancamento",$ano_lancamento);  
$comando->bindValue(":quantidade_estoque",$quantidade_estoque);  

$comando->execute();     


header("Location:Admin.html");
?>

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
    $imagem = $_FILES['imagem_produto']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);

    //converte a senha para hash MD5, para que não seja armazenada em texto limpo no banco de dados.
    $senha = MD5($_POST["senha"]);

    //comando SQL.
    $comando = $pdo->prepare("INSERT INTO produto (nomeProduto, precoProduto, editora, faixa_etaria, codigo_livro, autor, ano_lancamento,quantidade_estoque,imagem_produto) VALUES(:nomeProduto,:precoProduto,:editora,:faixa_etaria,:codigo_livro,:autor,:ano_lancamento,:quantidade_estoque,:imagem_produto)");
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":nome",$nome);    
    $comando->bindValue(":email",$email);                                  
    $comando->bindValue(":senha",$senha);                                  
    $comando->bindValue(":conteudo", $base64);

    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:cadastro_livros.html");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>