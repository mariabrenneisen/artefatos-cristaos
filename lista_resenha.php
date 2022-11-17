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
    <title>Lista de Resenha</title>

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
        
    <h3>Listar Resenhas:</h3>
    <br>
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_resenhas.php");
     
            if (!empty($lista_resenha)) {
                foreach ($lista_resenha as $resenha) { ?>
                    <tr>
                        <td> <?php echo $resenha['codResenha']; ?></td>
                        <td> <?php echo $resenha['autor']; ?></td>
                        <td> <?php echo $resenha['tituloLivro']; ?></td>
                        <td> <?php echo $resenha['nome']; ?></td>
                        <td> <?php echo $resenha['resenha']; ?></td>
                        <td> <a href="Edita_resenha.php?codigo=<?php echo $resenha['codResenha']; ?>" ><img src="img/edita.png"></td> </a>
                        <td> <img src="img/x.png" onclick="Deletar(<?php echo $resenha['codResenha']; ?>);"></td>
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
                window.open("deletar_produtos.php?codigo=" + codigo,"_self");
            }
            
        }
    </script>
</html>