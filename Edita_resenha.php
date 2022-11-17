<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Resenhas</title>
    
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
        include("qual_resenha.php"); 
        if(!empty($qual_resenha)) {
                foreach ($qual_resenha as $resenha) {
        ?>


        <div class="container-fluid">
                <br>
                <h1 class="h1 text-light texto_resenha justify-content-center align-itens-center" style="background-color: #3D5AF1">Escreva aqui a sua resenha dos nossos livros comprados por você:</h1>
                <br>
                <form action="editar_resenha.php?codigo=<?php echo $_GET["codigo"];?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-15">
                                    <label>Nome do Livro:</label>
                                    <input class="form-control" type="text" name="tituloLivro" value="<?php echo $resenha['tituloLivro']; ?>">
                            </div>
                            <div class="col-md-4 col-xs-15">
                                    <label>Autor:</label>
                                    <input class="form-control" type="text" name="autor" value="<?php echo $resenha['autor']; ?>">
                            </div>
                            <div class="col-md-4 col-xs-15">
                                        <label>Nome:</label>
                                        <input class="form-control" type="text" name="nome" value="<?php echo $resenha['nome']; ?>">
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 col-xs-12">
                                <label for="textoresenha" class="form-label">Resenha</label>
                                <textarea class="form-control" id="textoresenha" rows="10" name="resenha"><?php echo $resenha['resenha']; ?></textarea>
                        </div>
                        <div class="row justify-content-center align-itens-center">
                                <div class="col-md-auto">
                                        <button class="btn btn-dark botao_resenha"  type="submit" style="width: 150px">Alterar</button>
                                </div>
                        </div>

                        <?php 
                }}
                ?>
                </form>
        </div>
    
</body>
</html>