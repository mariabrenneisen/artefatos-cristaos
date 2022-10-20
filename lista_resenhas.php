<?php
session_start();
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.html");
    exit;
}
?>

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
    <h3 class="titulo_resenha">Lista de Resenhas:</h3>
    <br> 
    <?php
            include("listar_resenhas.php");

            //verifica se a variável tem os valores da tabela.
            if (!empty($lista_usuarios)) {
                //seleciona linha por linha.
                foreach ($lista_usuarios as $linha) { ?>
                <div class="row lista_resenhas justify-content-center align-itens-center">
                    <div class="col-md-4 col-xs-15 caixa_lista_resenhas">
                            <label class="nome_pessoa_resenha"><?php echo $linha['nome']; ?></label>
                            <br>
                            <h6><?php echo $linha['tituloLivro']; ?></h6>
                            <label><?php echo $linha['autor']; ?></label>
                            <br><br>
                            <label><?php echo $linha['resenha']; ?></label>
                    </div>
                </div>
            <?php }
            }
            ?>

    

    </div> 




   

</body>
</html>