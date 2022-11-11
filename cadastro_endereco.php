<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="busca.js">
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
    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>

    <body>
    <!-- Inicio do formulario -->
    <h1>Insira o seu Endereço:</h1>
    <br>
    <form method="POST" action=".">
                <div class="row justify-content-center align-itens-center">
                            <div class="col-md-5 col-xs-12">
                            <label>Cep:
                            <input class="form-control" name="cep" type="text" id="cep" size="60" value=""
                                onblur="pesquisacep(this.value);" /></label><br />  
                            </div>
                </div>
               <div class="row justify-content-center align-itens-center">
                            <div class="col-md-5 col-xs-12">
                                <label>Cidade:
                                <input class="form-control" name="cidade" type="text" id="cidade" size="80"/></label><br />   
                            </div>
                        <div class="col-md-5 col-xs-12">
                                <label>Estado:
                                <input class="form-control" name="uf" type="text" id="uf" size="80"/></label><br />  
                        </div>
                </div>
                <div class="row justify-content-center align-itens-center">
                            <div class="col-md-5 col-xs-12">
                                <label>Rua:
                                <input class="form-control" name="rua" type="text" id="rua" size="80"/></label><br />   
                            </div>
                        <div class="col-md-5 col-xs-12">
                                <label>Bairro:
                                <input class="form-control" name="bairro" type="text" id="bairro" size="80"/></label><br />  
                        </div>
                </div>
                <div class="row justify-content-center align-itens-center">
                            <div class="col-md-5 col-xs-12">
                            <label>Número:
        <input class="form-control" name="rua" type="text" id="rua" size="80"/></label><br />  
                            </div>
                        <div class="col-md-5 col-xs-12">
                                <label>Complemento:
                                <input class="form-control" name="bairro" type="text" id="bairro" size="80"/></label><br />  
                        </div>
                </div>
                <br>
                <div class="row justify-content-center align-itens-center">
                    <div class="col-md-auto">
                            <button class="btn btn-dark botao"  type="submit" style="width: 150px">Salvar</button>
                    </div>
                </div>  
      </form>
    </body>
    
      
</div>
    </body>

    </html>