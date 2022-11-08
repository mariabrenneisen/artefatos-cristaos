<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Document</title>
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
          <br>
<div class="container-fluid">
 <h1>Carrinho:</h1>
 <br>
        <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_carrinho.php");

            //verifica se a variável tem os valores da tabela.
            if (!empty($lista_carrinho)) {
                //seleciona linha por linha.
                foreach ($lista_carrinho as $linha) { ?>
                    <tr>
                        <td> <?php echo $linha['codCarrinho']; ?></td>
                        <td> <?php echo $linha['nomeProduto'] ?></td>
                        <td> <?php echo $linha['quantidade']; ?></td>
                        <td> <?php echo $linha['preco']; ?></td>
                        <td> <img src="img/x.png" onclick="Deletar(<?php echo $linha['codCarrinho']; ?>);"></td>
                    </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>  

    </div>
</body>

<script>
        function Deletar(codigo)
        {
            var resposta = prompt("Deseja realmente excluir?", "N");
            if( resposta == "S" || resposta == "s")
            {
                window.open("deletar_carrinho.php?codigo=" + codigo,"_self");
            }
            
        }

    </script>
</html>