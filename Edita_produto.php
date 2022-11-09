<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cadastro de Livros</title>

<body>
        <header class="header mx-auto text-light" style="background-color: #0E153A">
                <ul class="header nav justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link ajuda" href="Ajuda.html">Precisa de Ajuda</a>
                    </li>
                </ul>
            </header>
            <?php
        session_start();
        ?>
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
        
    
        
            <div class="row">
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
        
            </div>
            
            <hr class="linha">
    
        <?php
        include("qual_cliente.php"); 
        if(!empty($qual_produto)) {
                foreach ($qual_produto as $produto) {
        ?>
            <div class="container-fluid">
                    <br>
                    <h1 class="h1 text-light texto_resenha text-align-center" style="background-color: #3D5AF1">Escreva aqui a edição dos livros que você quer na sua loja:</h1>
                    
                    <form action="editar_produto.php?codigo=<?php echo $_SESSION['codProduto'];?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group formulario_cadastro_itens">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                        <label>Nome do Produto:</label>
                                        <input class="form-control" type="text" name="nomeProduto" value="<?php echo $produto['nomeProduto']?>">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                        <label>Código:</label>
                                        <input class="form-control" type="text" name="codigo_livro" value="<?php echo $produto['codigo_livro']?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                        <label>Valor:</label>
                                        <input class="form-control" type="text" name="precoProduto" value="<?php echo $produto['precoProduto']?>">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                        <label>Autor:</label>
                                        <input class="form-control" type="text" name="autor" value="<?php echo $produto['autor']?>">
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                            <label>Editora:</label>
                                            <input class="form-control" type="text" name="editora" value="<?php echo $produto['editora']?>">
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                            <label>Ano de Lançamento:</label>
                                            <input class="form-control" type="text" name="ano_lancamento" value="<?php echo $produto['ano_lancamento']?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                            <label>Faixa Etária:</label>
                                            <input class="form-control" type="text" name="faixa_etaria" value="<?php echo $produto['faixa_etaria']?>">
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                            <label>Quantidade em Estoque:</label>
                                            <input class="form-control" type="text" name="quantidade_estoque" value="<?php echo $produto['quantidade_estoque']?>">
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                                <label>Sinopse:</label>
                                                <textarea class="form-control" id="textoresenha" rows="10" name="sinopse" value="<?php echo $produto['sinopse']?>"></textarea>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                                <label>Detalhe do Produto:</label>
                                                <textarea class="form-control" id="textoresenha" rows="10" name="descricao_produto" value="<?php echo $produto['descricao_produto']?>"></textarea>
                                        </div>
                                </div>
                                <br>
                                <div class="row"> 
                                    <div class="col-md-6 col-xs-12">  
                                        <input type="file" name="imagem_produto" multiple accept="image/*" value="<?php echo $produto['imagem_produto']?>">
                                    </div>
                                </div>
                            <br>
                            <div class="row justify-content-center align-itens-center">
                                    <div class="col-md-auto">
                                            <button class="btn btn-dark botao_resenha"  type="submit" style="width: 150px">Alterar</button>
                                    </div>
                            </div>
                    </form>
                    <div class="row justify-content-center align-itens-center">
                        <div class="col-md-auto">
                                <a class="ir_cadastro" href="lista_produtos.php">Listar Produtos</a>
                        </div>
                    </div>
            </div>
</body>
</html>