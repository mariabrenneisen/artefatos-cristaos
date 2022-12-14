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
    <div class="container-fluid">
        <div class="row ">
                <h1 class="h1 text-dark">Cadastro:</h1>
                <p class="font-weight-bold">Preenchar as informações:</p>
        </div>
            
        
            <form action="inserir.php" method="POST">
                <div class="form-group">
                    <div class="row justify-content-center align-itens-center">
                        <div class="col-md-5 col-xs-12">
                                <label class="fonte">Nome:</label>
                                <input class="form-control" type="text" placeholder="Insira seu nome" name="nome">
                        </div>
                        <div class="col-md-5 col-xs-12">
                                <label>Sobrenome:</label>
                                <input class="form-control" type="text" placeholder="Insira seu sobrenome" name="sobrenome">
                        </div>
                    </div>
                    <div class="row justify-content-center align-itens-center">
                        <div class="col-md-5 col-xs-12">
                                <label>Data de nascimento:</label>
                                <input class="form-control" type="date" name="data_nascimento">
                        </div>
                        <div class="col-md-5 col-xs-12">
                                <label>E-mail:</label>
                                <input class="form-control" type="email" placeholder="Insira seu e-mail" name="email">   
                        </div>
                    </div>
                    <div class="row justify-content-center align-itens-center">
                            <div class="col-md-5 col-xs-12">
                                    <label>CPF:</label>
                                    <input class="form-control" type="text" placeholder="Insira o seu nome de usuário" name="cpf">   
                            </div>
                        <div class="col-md-5 col-xs-12">
                                <label>Usuário:</label>
                                <input class="form-control" type="text" placeholder="Insira o seu nome de usuário" name="login_usuario">   
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
                            <button class="btn btn-dark botao"  type="submit" style="width: 150px">Salvar</button>
                    </div>
                </div>
            </form>
    </div>    
</head>
<body>
    
</body>
</html>