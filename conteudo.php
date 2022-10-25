<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>

    <header class="header mx-auto text-light" style="background-color: #0E153A">
        <ul class="header nav justify-content-end">
            <li class="nav-item active">
                <a class="nav-link ajuda" href="Ajuda.html">Precisa de Ajuda</a>
            </li>
        </ul>
    </header>

    <ul class="nav" style="background-color: #3D5AF1">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">
                <img src="img/LogoBranca.png" alt="Logo" width="50" height="46" class="d-inline-block align-text-center">  
                Artefatos Cristãos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light">
                <input class="form-control pesquisa" type="text" placeholder="O que você está procurando?" aria-label="O que você está procurando">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="Resenhas.html">
                <img src="img/livro.png" width="46" height="46">
                Cabeceira
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="entrar.html">
                  <img src="img/perfil.png" width="46" height="46">
                  Entrar
         </a>
        </li>
        <li class="nav-item">
                <a class="nav-link text-light" href="carrinho.html">
                        <img src="img/carrinho.png" width="46" height="46">     
                </a>
        </li>

    </ul>

    <div class="container-fluid">
            <div class="row categorias_home">
                    <div class="col-md-1 col-xs-6">
                            <a class="nav-link active text-dark align-text-center link fs-6" href="categorias.php">Categorias</a>
                    </div>
                    <div class="col-md-1 col-xs-6">
                            <a class="div-link align-text-center link fs-6" href="categorias.php">Livros</a>
                    </div>
                    <div class="col-md-1 col-xs-6">
                            <a class="div-link align-text-center link fs-6" href="categorias.php">Outlet</a>
                    </div>
                </div>

                <hr class="linha">
                
</div>

<?php
        $codigo=$_GET["codProduto"];
        include("busca_livro.php");
        //verifica se a variável tem os valores da tabela.
        if (!empty($lista_livros)) {
            //seleciona linha por linha.
            foreach ($lista_livros as $linha) {
                $imagem=$linha["imagem_produto"];
                $nomeProduto=$linha["nomeProduto"]; 
                $sinopse=$linha["sinopse"]; 
                $precoProduto=$linha["precoProduto"]; 
                $descricao_produto=$linha["descricao_produto"]; 
            }
        }
?>

<div class="container-fluid branco2">
    

<section class="col-main conteudo">
  <div class="row">
      <div class="imagens_conteudo">
          <figure class="figure cronicas_de_narnia">
                  <img src="<?php echo($imagem) ?>" class="figure-img img-fluid rounded">
          </figure>  
          <div class="row justify-content-center align-itens-center">
            <div class="col-md-4 col-xs-15 caixa_informacao_imagem ">
                    <h4><?php echo($nomeProduto);?> </h4>
                    <label><?php echo($sinopse);?> </label>
                    <br><br>
                    <h3>R$ <?php echo($precoProduto);?></h3>
                      <br>
                    <div class="row">
                      <div class="col-md-auto">
                              <button class="btn btn-dark comprar"  type="submit" style="width: 150px">Comprar</button>
                      </div>
                    </div>
            </div>
        </div> 
      </div>
</div>  
        <div class="row detalhe_produto">
                <h3>DETALHE DO PRODUTO</h3>
                <br>
                        <label> <?php echo($descricao_produto);?> </label>
                         

        </div>

</div>
    
</body>
</html>