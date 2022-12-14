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
    <?php
        include("listar_usuarios_conectados.php");
        $informacoes_usuario['nome'];
    ?>
    <h3>Listar Usuários:</h3>
    <br>
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo do Cadastro</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar_usuarios.php");

            //verifica se a variável tem os valores da tabela.
            if (!empty($lista_usuarios)) {
                //seleciona linha por linha.
                foreach ($lista_usuarios as $linha) { ?>
                    <tr>
                        <td> <?php echo $linha['codUsuario']; ?></td>
                        <td> <?php echo $linha['nome']; ?></td>
                        <td> <?php echo $linha['email']; ?></td>
                        <td> <?php echo $linha['tipo_cadastro']; ?></td> 
                        <td> <img src="img/x.png" onclick="Deletar(<?php echo $linha['codUsuario']; ?>);"></td>
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
                window.open("deletar_usuario.php?codigo=" + codigo,"_self");
            }
            
        }

    </script>
        
</html>