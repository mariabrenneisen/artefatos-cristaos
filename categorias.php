<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 
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
      <div class="container-fluid">
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
        </div>

    <div class="container-fluid branco">
    
        <section class="block block-layered-nav filtro">
        <h6 style="margin-left: 10px">Filtros Selecionados</h6>
        <br>
        <div class="caixas_filtro">Autor</div>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Max Lucado</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Karl Barth</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">C.S. Lewis</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">John Piper</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Luciano Subirá</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Algusto Cury</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">John Bevere</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">John MacArthur</label>
        <br> <br>
        
        <div class="caixas_filtro">Preço</div>

        <div class="row justify-content-center align-itens-center valor">
                <div class="col-md-6 col-xs-14">
                        <input class="form-control" type="password" placeholder="R$ min">
                </div>
                <div class="col-md-6 col-xs-14">
                        <input class="form-control" type="password" placeholder="R$ máx"> 
                </div>
        </div>

        <br>

        <div class="caixas_filtro">Ano de Edição</div>
        <br>  

        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">1960 - 1970</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">1971 - 1980</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">1981 - 1990</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">1991 - 2000</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">2001 - 2010</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">2011 - 2020</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Até 2022</label>
        <br> <br>

        <div class="caixas_filtro">Faixa Etária</div>
        <br>  

        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">5 Anos</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">7 Anos</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">10 Anos</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">12 Anos</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">14 Anos</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">16 Anos</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">18+</label>
        <br> <br>

        <div class="caixas_filtro">Editora</div>
        <br>  

        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Coisas de Crente</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Distribuidora Exodo</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Distribuidora Superpedido</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Casa dos Livros</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Edições Sal & Luz</label>
        <br>
        <input class="form-check-input checkbox" type="checkbox" value="sign">
        <label class="form-check-label">Cia Jeová Nissi</label>
        <br> <br>
    </section>

    <section class="col-main">
        <div class="row linha_row">
            <div class="imagens_conteudo">
                <figure class="figure figuras caixa_imagens">
                <a href="conteudo.php?codProduto=<?php echo(37);?>">
                <img src="img/biblia1.png" class="figure-img img-fluid rounded" width="210" height="360">
                </a>
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder ">
                                        Bíblia Sagrada Anote a Palavra |
                                        <br> 
                                        ACF | Letra Normal | Capa Dura...
                                </span>
                                <br>
                                <span class="span2">→ João Ferreira de Almeida</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 65,90</span>    
                        </figcaption>
                </figure>  

                <figure class="figure figuras caixa_imagens">
                <a href="conteudo.php?codProduto=<?php echo(39);?>">
                        <img src="img/biblia2.png" class="figure-img img-fluid rounded" width="200" height="350">
                </a>
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">
                                        Bíblia Sagrada Anote a Palavra |
                                        <br> 
                                        ACF | Letra Normal | Capa Dura...
                                </span>
                                <br>
                                <span class="span2">→ João Ferreira de Almeida</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 52,90</span>    
                        </figcaption>
                </figure>  
                <figure class="figure figuras caixa_imagens">
                        <img src="img/biblia3.png" class="figure-img img-fluid rounded" width="200" height="350" style="margin-top: 20px">
                        <br><br>
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">
                                        Combo Bíblia King James
                                        <br> 
                                        1611 Anote | Bíblia ACF Média...
                                </span>
                                <br>
                                <span class="span2">→ King James</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">Indisponível</span>    
                        </figcaption>
                </figure>
                <figure class="figure figuras caixa_imagens">
                        <a href="conteudo.php?codProduto=<?php echo(41);?>">
                        <img src="img/biblia4.png" class="figure-img img-fluid rounded" width="200" height="350">
                </a>
                        
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">
                                        Bíblia Sagrada Anote a Palavra |
                                        <br> 
                                        ACF | Letra Normal | Capa Dura...
                                </span>
                                <br>
                                <span class="span2">→ João Ferreira de Almeida</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 52,90</span>    
                        </figcaption>
                </figure>   
            </div>

            <div class="imagens_conteudo ">   
                <figure class="figure figuras caixa_imagens">
                
                        <img src="img/biblia5.png" class="figure-img img-fluid rounded" width="200" height="350">
                        
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">
                                        Bíblia Sagrada Anote a Palavra |
                                        <br> 
                                        ACF | Letra Normal | Capa Dura...
                                </span>
                                <br>
                                <span class="span2">→ João Ferreira de Almeida</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">Indisponível</span>    
                        </figcaption>
                </figure>  
                <figure class="figure figuras caixa_imagens">
                        <a href="conteudo.php?codProduto=<?php echo(43);?>">
                        <img src="img/biblia6.png" class="figure-img img-fluid rounded" width="200" height="350">
                </a>
                       
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">
                                        Livro Teologia da Salvação
                                </span>
                                <br>
                                <span class="span2">→ Charles H. Spurgeon</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 22,50</span>    
                        </figcaption>
                </figure> 
                <figure class="figure figuras caixa_imagens">
                <a href="conteudo.php?codProduto=<?php echo(44);?>">
                <img src="img/biblia7.png" class="figure-img img-fluid rounded" width="230" height="400">
                </a>
                        
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">
                                        Bíblia Sagrada | NVI | Capa Dura

                                </span>
                                <br>
                                <span class="span2">→ Nova Versão Internacional</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 22,50</span>    
                        </figcaption>
                </figure>  
                <figure class="figure figuras caixa_imagens">
                <a href="conteudo.php?codProduto=<?php echo(45);?>">
                <img src="img/biblia8.png" class="figure-img img-fluid rounded" width="200" height="350">
                </a>
                        
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">O Peregrino | Edição Comentada 
                                        e Ilustrada</span>
                                <br>
                                <span class="span2">→ John Bunyan</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 13,90</span>    
                        </figcaption>
                </figure> 
                </div> 
            
            <div class="imagens_conteudo">
                <figure class="figure figuras caixa_imagens">
                <a href="conteudo.php?codProduto=<?php echo(46);?>">
                <img src="img/biblia9.png" class="figure-img img-fluid rounded" width="200" height="350">
                </a>
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">Kit Bíblia NVI Slim + Devocional Eu e Deus
                                        <br> 
                                        | Leão Dourado | Amor a Palavra</span>
                                <br>
                                <span class="span2">→ Gabriela Rocha</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 22,50</span>    
                        </figcaption>
                </figure> 
                <figure class="figure figuras caixa_imagens">
                <a href="conteudo.php?codProduto=<?php echo(47);?>">
                <img src="img/biblia10.png" class="figure-img img-fluid rounded" width="200" height="350">
                </a>
                        
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">Kit Bíblia de Estudo KJA Letra Hipergigante Azul + 
                                        <br>
                                        Devocional Spurgeon Café...</span>
                                <br>
                                <span class="span2">→ King James</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 169,90</span>    
                        </figcaption>
                </figure>  
                <figure class="figure figuras caixa_imagens">
                <a href="conteudo.php?codProduto=<?php echo(48);?>">
                <img src="img/biblia11.png" class="figure-img img-fluid rounded" width="200" height="350">
                </a>
                        
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">Gálatas Para a Vida: Lições Práticas Sobre o Evangelho</span>
                                <br>
                                <span class="span2">→ John Wesley e Matthew Henry</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 12,90</span>    
                        </figcaption>
                </figure>  
                <figure class="figure figuras caixa_imagens">
                <a href="conteudo.php?codProduto=<?php echo(49);?>">
                <img src="img/biblia12.png" class="figure-img img-fluid rounded" width="200" height="350">
                </a>       
                        <figcaption class="figure-caption legenda">
                                <span class="span fw-bolder">Fé em Prática - Jejum para os Dias Atuais</span>
                                <br>
                                <span class="span2">→ C.H. Spurgeon | John Wesley e outros</span>
                                <br>
                                <span class="fw-bolder fs-5 valor_biblia">R$ 22,50</span>    
                        </figcaption>
                </figure>   
        </div>

        <div class="imagens_conteudo">
                
                        <figure class="figure figuras caixa_imagens">
                        <a href="conteudo.php?codProduto=<?php echo(50);?>">
                        <img src="img/biblia13.png" class="figure-img img-fluid rounded" width="200" height="350">
                        </a>
                                
                                <figcaption class="figure-caption legenda">
                                        <span class="span fw-bolder">O batismo com o espírito santo livro</span>
                                        <br>
                                        <span class="span2">→ R.A. Torrey</span>
                                        <br>
                                        <span class="fw-bolder fs-5 valor_biblia">R$ 22,50</span>    
                                </figcaption>
                        </figure> 
                        <figure class="figure figuras caixa_imagens">
                        <a href="conteudo.php?codProduto=<?php echo(51);?>">
                        <img src="img/biblia14.png" class="figure-img img-fluid rounded" width="200" height="350">
                        </a>
                                
                                <figcaption class="figure-caption legenda">
                                        <span class="span fw-bolder">Devocional | 3 Minutos de Sabedoria Para Mulheres</span>
                                        <br>
                                        <span class="span2">→ Versão Azul Safira</span>
                                        <br>
                                        <span class="fw-bolder fs-5 valor_biblia">R$ 09,80</span>    
                                </figcaption>
                        </figure>  
                        <figure class="figure figuras caixa_imagens">
                        <a href="conteudo.php?codProduto=<?php echo(52);?>">
                        <img src="img/biblia15.png" class="figure-img img-fluid rounded" width="200" height="350">
                        </a>
                                
                                <figcaption class="figure-caption legenda">
                                        <span class="span fw-bolder">Bíblia Sagrada Anote a Palavra</span>
                                        <br>
                                        <span class="span2">→ Versão ACF</span>
                                        <br>
                                        <span class="fw-bolder fs-5 valor_biblia">R$ 43,70</span>    
                                </figcaption>
                        </figure>  
                        <figure class="figure figuras caixa_imagens">
                        <a href="conteudo.php?codProduto=<?php echo(53);?>">
                        <img src="img/biblia16.png" class="figure-img img-fluid rounded" width="200" height="350">
                        </a>
                                <figcaption class="figure-caption legenda">
                                        <span class="span fw-bolder">Devocional | 3 Minutos de Sabedoria Para Mulheres</span>
                                        <br>
                                        <span class="span2">→ Versão Leão Color</span>
                                        <br>
                                        <span class="fw-bolder fs-5 valor_biblia">R$ 11,99</span>    
                                </figcaption>
                        </figure>   
                </div>

                <div class="imagens_conteudo">
                
                                <figure class="figure figuras caixa_imagens">
                                <a href="conteudo.php?codProduto=<?php echo(54);?>">
                                <img src="img/biblia17.png" class="figure-img img-fluid rounded" width="200" height="350">
                                </a>
                                        
                                        <figcaption class="figure-caption legenda">
                                                <span class="span fw-bolder">Bíblia Sagrada Anote a Palavra </span>
                                                <br>
                                                <span class="span2">→ Versão ACF</span>
                                                <br>
                                                <span class="fw-bolder fs-5 valor_biblia">R$ 46,98</span>    
                                        </figcaption>
                                </figure> 
                                <figure class="figure figuras caixa_imagens">
                                <a href="conteudo.php?codProduto=<?php echo(55);?>">
                                <img src="img/biblia18.png" class="figure-img img-fluid rounded" width="200" height="350">
                                </a>
                                        
                                        <figcaption class="figure-caption legenda">
                                                <span class="span fw-bolder">O Poder da Oração e a Oração de Poder</span>
                                                <br>
                                                <span class="span2">→ R.A. Torrey</span>
                                                <br>
                                                <span class="fw-bolder fs-5 valor_biblia">R$ 12,90</span>    
                                        </figcaption>
                                </figure>  
                                <figure class="figure figuras caixa_imagens">
                                        <img src="img/biblia19.png" class="figure-img img-fluid rounded" width="200" height="350">
                                        <figcaption class="figure-caption legenda">
                                                <span class="span fw-bolder">Kit O Poder da Personalidade de Jesus + Em Seus Passos O Que Faria Jesus?</span>
                                                <br>
                                                <span class="span2">→ Entendendo Os Passos de Jesus</span>
                                                <br>
                                                <span class="fw-bolder fs-5 valor_biblia">Indisponível</span>    
                                        </figcaption>
                                </figure>  
                                <figure class="figure figuras caixa_imagens">
                                <a href="conteudo.php?codProduto=<?php echo(40);?>">
                                <img src="img/biblia20.png" class="figure-img img-fluid rounded" width="200" height="350"> 
                                        </a>
                                        
                                        <figcaption class="figure-caption legenda">
                                                <span class="span fw-bolder">Até Que Nada Mais Importe</span>
                                                <br>
                                                <span class="span2">→ Luciano Subirá</span>
                                                <br>
                                                <span class="fw-bolder fs-5 valor_biblia">R$ 39,90</span>    
                                        </figcaption>
                                </figure>   
                        </div>
                        <div class="imagens_conteudo">
                
                                        <figure class="figure figuras caixa_imagens">
                                        <a href="conteudo.php?codProduto=<?php echo(30);?>">
                                                <img src="img/biblia21.png" class="figure-img img-fluid rounded" width="200" height="350"> 
                                        </a>
                                               
                                                <figcaption class="figure-caption legenda">
                                                        <span class="span fw-bolder">Jesus todo dia</span>
                                                        <br>
                                                        <span class="span2">→ Gabriela Rocha</span>
                                                        <br>
                                                        <span class="fw-bolder fs-5 valor_biblia">R$ 22,50</span>    
                                                </figcaption>
                                        </figure> 
                                        <figure class="figure figuras caixa_imagens">
                                                <a href="conteudo.php?codProduto=<?php echo(27);?>">
                                                        <img src="img/biblia22.png" class="figure-img img-fluid rounded" width="200" height="350"> 
                                                </a>
                                                <figcaption class="figure-caption legenda">
                                                        <span class="span fw-bolder">As Crônicas de Nárnia</span>
                                                        <br>
                                                        <span class="span2">→ C. S. Lewis</span>
                                                        <br>
                                                        <span class="fw-bolder fs-5 valor_biblia">R$ 49,99</span>    
                                                </figcaption>
                                        </figure>  
                                        <figure class="figure figuras caixa_imagens">
                                        <a href="conteudo.php?codProduto=<?php echo(15);?>">
                                                <img src="img/biblia23.png" class="figure-img img-fluid rounded" width="200" height="350">
                                        </a>
                                                
                                                <figcaption class="figure-caption legenda">
                                                        <span class="span fw-bolder">Ego Transformado</span>
                                                        <br>
                                                        <span class="span2">→ Timothy Keller</span>
                                                        <br>
                                                        <span class="fw-bolder fs-5 valor_biblia">R$ 39,90</span>    
                                                </figcaption>
                                        </figure>   
                                        <figure class="figure figuras caixa_imagens">
                                        <a class="livro_o_Deus_que_destroi_sonhos" href="conteudo.php?codProduto=<?php echo(26);?>">
                                        <img src="img/biblia24.png" class="figure-img img-fluid rounded" width="200" height="350">
                                        </a>
                                                
                                                <figcaption class="figure-caption legenda">
                                                        <span class="span fw-bolder">O Deus Que Destrói Sonhos</span>
                                                        <br>
                                                        <span class="span2">→ Rodrigo Bibo</span>
                                                        <br>
                                                        <span class="fw-bolder fs-5 valor_biblia">R$ 69,90</span>    
                                                </figcaption>
                                        </figure>   
                                </div>
                                <div class="imagens_conteudo">
                
                                <figure class="figure figuras caixa_imagens">
                                        <img src="img/biblia17.jpg" class="figure-img img-fluid rounded" width="200" height="350">
                                        <figcaption class="figure-caption legenda">
                                                <span class="span fw-bolder">Bíblia da Escola Bíblica</span>
                                                <br>
                                                <span class="span2">→ Versão NAA</span>
                                                <br>
                                                <span class="fw-bolder fs-5 valor_biblia">Indisponível</span>    
                                        </figcaption>
                                </figure> 
                                <figure class="figure figuras caixa_imagens">
                                <a class="figuras" href="conteudo.php?codProduto=<?php echo(24);?>">
                                <img src="img/biblia18.jpg" class="figure-img img-fluid rounded" width="180" height="330">
                                </a>
                                        <figcaption class="figure-caption legenda">
                                                <span class="span fw-bolder">As 5 Linguagens do Amor</span>
                                                <br>
                                                <span class="span2">→ Gary Chapman</span>
                                                <br>
                                                <span class="fw-bolder fs-5 valor_biblia">R$ 37,40</span>    
                                        </figcaption>
                                </figure>  
                                <figure class="figure figuras caixa_imagens">
                                <a class="figuras" href="conteudo.php?codProduto=<?php echo(31);?>">
                                <img src="img/biblia19.jpg" class="figure-img img-fluid rounded" width="180" height="330">
                                </a>
                                        <figcaption class="figure-caption legenda">
                                                <span class="span fw-bolder">Quando Pecadores Dizem "Sim" </span>
                                                <br>
                                                <span class="span2">→ Dave Harvey</span>
                                                <br>
                                                <span class="fw-bolder fs-5 valor_biblia">R$ 34,90</span>    
                                        </figcaption>
                                </figure>  
                                <figure class="figure figuras caixa_imagens">
                                <a class="figuras" href="conteudo.php?codProduto=<?php echo(32);?>">
                                <img src="img/biblia20.jpg" class="figure-img img-fluid rounded" width="200" height="350">
                                </a>
                                        
                                        <figcaption class="figure-caption legenda">
                                                <span class="span fw-bolder">Antes de Dizer Sim</span>
                                                <br>
                                                <span class="span2">→ Jaime Kemp</span>
                                                <br>
                                                <span class="fw-bolder fs-5 valor_biblia">R$ 32,99</span>    
                                        </figcaption>
                                </figure>   
                        </div>
    </section>

               
    </div>

</body>
</html>