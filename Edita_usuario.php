<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cadastro</title>

        <?php
        session_start();
        ?>
    <nav class="navbar" style="background-color: #3D5AF1">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-4 col-xs-12">
                                    <a class="navbar-brand text-light">
                                            <img src="img/LogoBranca.png" alt="Logo" width="50" height="46" class="d-inline-block align-text-center">
                                            Artefatos Cristãos
                                    </a>
                    </div>
                  
                </div>
        </nav>
<br>
        <?php
        include("qual_cliente.php"); 
        if(!empty($qual_cliente)) {
                foreach ($qual_cliente as $usuario) {
        ?>
    <div class="container-fluid">
        <div class="row ">
                <h1 class="h1 text-dark">Edite as informações:</h1>
        </div>
            
        
            <form action="editar_usuario.php?codigo=<?php echo $_SESSION['codUsuario'];?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row justify-content-center align-itens-center">
                        <div class="col-md-5 col-xs-12">
                                <label class="fonte">Nome:</label>
                                <input class="form-control" type="text" placeholder="Insira seu nome" name="nome" value="<?php echo $usuario['nome']?>">
                        </div>
                        <div class="col-md-5 col-xs-12">
                                <label>Sobrenome:</label>
                                <input class="form-control" type="text" placeholder="Insira seu sobrenome" name="sobrenome" value="<?php echo $usuario['sobrenome']?>">
                        </div>
                    </div>
                    <div class="row justify-content-center align-itens-center">
                        <div class="col-md-5 col-xs-12">
                                <label>Data de nascimento:</label>
                                <input class="form-control" type="date" name="data_nascimento" value="<?php echo $usuario['data_nascimento']?>">
                        </div>
                        <div class="col-md-5 col-xs-12">
                                <label>E-mail:</label>
                                <input class="form-control" type="email" placeholder="Insira seu e-mail" name="email"  value="<?php echo $usuario['email']?>">   
                        </div>
                    </div>
                    <div class="row justify-content-center align-itens-center">
                            <div class="col-md-5 col-xs-12">
                                    <label>CPF:</label>
                                    <input class="form-control" type="text" placeholder="Insira o seu nome de usuário" name="cpf" value="<?php echo $usuario['cpf']?>">   
                            </div>
                        <div class="col-md-5 col-xs-12">
                                <label>Usuário:</label>
                                <input class="form-control" type="text" placeholder="Insira o seu nome de usuário" name="login_usuario" value="<?php echo $usuario['login_usuario']?>">   
                        </div>
                    </div>
                    <div class="row justify-content-center align-itens-center">
                        <div class="col-md-4 col-xs-12">
                                <label>Escolha uma senha:</label>
                                <input class="form-control" type="password" placeholder="Digite sua Senha" name="senha">
                        </div>
                    </div>
                </div>
<br>
                <div class="row justify-content-center align-itens-center">

                        <div class="col-md-auto">
                            <input class="form-check-input" type="checkbox" value="sign">
                            <label class="form-check-label">Você concorda com os termos?</label>
                        </div>        
                </div> 
                <br>
                <div class="row justify-content-center align-itens-center">
                    <div class="col-md-auto">
                            <button class="btn btn-dark botao"  type="submit" style="width: 150px">Alterar</button>
                    </div>
                </div>
            </form>

            <?php 
                }}
                ?>
    </div>    
</head>
<body>
    
</body>
</html>