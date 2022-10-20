<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Lista de Clientes</title>

        <nav>
            <ul class="nav fs-6" style="background-color: #3D5AF1">
                <li class="nav-item fonte_artefatos">
                  <a class="nav-link active text-light" aria-current="page" href="#">
                        <img src="img/LogoBranca.png" alt="Logo" width="50" height="46" class="d-inline-block align-text-center">  
                        Artefatos Cristãos
                  </a>
                </li>
              </ul>
        </nav>
<br>
    <div class="container-fluid">
        
    <h3>Listar Usuários:</h3>
    <br>
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Editora</th>
                <th>Faixa Etária</th>
                <th>Autor</th>
                <th>Ano de Lançamento</th>
                <th>Quantidade em Estoque</th>
                <th>Imagem do Produto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_produtos.php");

            //verifica se a variável tem os valores da tabela.
            if (!empty($lista_produtos)) {
                //seleciona linha por linha.
                foreach ($lista_produtos as $linha) { ?>
                    <tr>
                        <td> <?php echo $linha['codProduto']; ?></td>
                        <td> <?php echo $linha['nomeProduto']; ?></td>
                        <td> <?php echo $linha['precoProduto']; ?></td>
                        <td> <?php echo $linha['editora']; ?></td>
                        <td> <?php echo $linha['faixa_etaria']; ?></td>
                        <td> <?php echo $linha['autor']; ?></td>
                        <td> <?php echo $linha['ano_lancamento']; ?></td>
                        <td> <?php echo $linha['quantidade_estoque']; ?></td>
                        <td> <?php echo '<img height="40px" width="40px" src="'.$linha['imagem_produto']. '">'; ?> </td>
                        <td> <img src="img/x.png" onclick="Deletar(<?php echo $linha['codProduto']; ?>);"></td>
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
            var resposta = prompt("Deseja realmente excluir?", "Não");
            if( resposta == "S" || resposta == "s" || resposta == "SIM" || resposta == "sim" || resposta == "Sim")
            {
                window.open("deletar_resenha.php?codigo=" + codigo,"_self");
            }
            
        }
    </script>
</html>