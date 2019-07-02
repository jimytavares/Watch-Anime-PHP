<!DOCTYPE HTML>  
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <style> .cssbb{color: red;} </style>

</head>
<body>
    
    <!-- SECTION 01: Header 
    ================================================== -->
    <section class="" style="background-image: url('imagens/img245.jpg'); background-size:cover;">
        
        <?php include ('.globals/header.php'); ?>
        
        <div class="container">    
            
            <!-- Input: Cadastro Anime Assistindo -->
            <form action="insertassistindo.php" method="post">
                    <div class="row" id="row-input-parados">
                        <div class="col-2">
                            <label for="inputEmail4">Nome:</label>
                            <input type="text" class="form-control input-parados" name="nome" placeholder="Anime Name" required>
                        </div>
                        <div class="col-2">
                            <label for="inputEmail4">Episódio:</label>
                            <input type="text" class="form-control input-parados" name="episodio" placeholder="Episode Watched" required>
                        </div>
                        <div class="col-2">
                            <label for="inputEmail4">Data Assistida ¹:</label>
                            <input type="text" class="form-control input-parados" name="dataassistido" placeholder="Watched Date">
                        </div>
                            <div class="col-2">
                                <label for="inputEmail4">Dia ¹:</label>
                                <input type="text" class="form-control input-parados" name="dataassistido" placeholder="Day Watched">
                            </div>
                        <div class="col-2">
                            <label for="inputEmail4">Data Próximo Ep ²:</label>
                            <input type="text" class="form-control input-parados" name="dataproxep" placeholder="Date New Ep">
                        </div>
                            <div class="col-2">
                                <label for="inputEmail4">Dia ²:</label>
                                <input type="text" class="form-control input-parados" name="dataassistido" placeholder="Dia Prox Ep">
                            </div>
                        <div class="col-2">
                            <label for="inputEmail4">Qualidade:</label>
                            <input type="text" class="form-control input-parados" name="qualidade" placeholder="Quality">
                        </div>
                        <div class="col-2">
                            <label for="inputEmail4">Comentario:</label>
                            <input type="text" class="form-control input-parados" name="comentario" id="inputEmail4" placeholder="Coment">
                        </div>
                        <div class="col-2">
                            <label for="inputEmail4">Nota:</label>
                            <input type="text" class="form-control input-parados" name="nota" id="inputEmail4" placeholder="Star">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark button-salvar-parados"> <i class="fas fa-save" id="icon-save-parados"></i> Save</button>
                </form>
            
            <!-- Title Table: Icons and Title Table -->
            <div class="container" style="margin-top: 30px; color:white; background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #2F449C); border-color: red; height:50px; width:90%; border-radius:5px; box-shadow: 1px 3px 10px #000000; text-align:center;">
                    <div class="row" style="padding-top:15px;">
                        <div class="col">
                            <i class="far fa-calendar-alt" id="icon-table-assist" data-toggle="modal" data-target="#modaldataassistido"></i>
                            <i class="fas fa-info-circle" id="icon-table-assist" data-toggle="modal" data-target="#modalinfo" style="margin-left:30px;"></i> 
                        </div>
                        <div class="col">
                            Animes Assistindo
                        </div>
                        <div class="col">
                            c
                        </div>
                    </div>
                </div>
            
            <!-- Table: Animes Assistindo -->
            <table class="table table-sm" style="margin-top: -1px;">
                    <thead>
                        <tr id="tr-parados">
                            <th id="th-parados">ID</th>
                            <th id="th-parados">Nome</th>
                            <th id="th-parados">Episódio</th>
                            <th id="th-parados">Data Assistido</th>
                            <th id="th-parados"> Data Prox Ep</th>
                            <th id="th-parados">Qualidade</th>
                            <th id="th-parados">Comentário</th>
                            <th id="th-parados">Nota</th>
                            <th id="th-parados">Editar</th>
                            <th id="th-parados">Excluir</th>
                        </tr>
                    </thead>
                    <tbody id="body-table-parados">
                        <?php include ('control/selectAssistindo.php'); ?>
                    </tbody>
                </table>

                    <!-- Modal: Data Assistido e Data Próximo Episódio -->
                    <div class="modal fade bd-example-modal-lg" id="modaldataassistido" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"> <i class="far fa-calendar-alt"></i> Data e Dia dos Episódios Assistidos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">


                               <table class="table table-sm" style="margin-top:20px;">
                                    <thead>
                                        <tr id="tr-parados">
                                        <th id="th-parados">ID</th>
                                        <th id="th-parados">Nome Anime</th>
                                        <th id="th-parados">Dia Assistido</th>
                                        <th id="th-parados">Data Assistido</th>
                                        <th id="th-parados">Dia Semana Prox Ep</th>
                                        <th id="th-parados">Data Prox Ep</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-table-parados">
                                        <?php include ('control/selectAssistindoDias.php'); ?>
                                    </tbody>
                                </table>


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal: Informações -->
                    <div class="modal fade bd-example-modal-lg" id="modalinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"> <i class="fas fa-info-circle" id="icon-table-assist"></i>  Informações</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">


                               INo


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
            
        </div>
        
        <!-- Next Button -->
        <div class="">
            <button id="button-next" style="margin-top:150px;"> <i class="fa fa-angle-double-down" id="arrow-next"></i> </button>
        </div>
        
    </section>
    
        <!-- LINHA: Divisão de Sectons -->
        <div class="" id="linha-divisao-section">
            .
        </div>
    
    <!-- SECTION 02: Cards de Temporada
    ================================================== -->
    <section class="" style="background-image: url('imagens/background-gundam.png'); background-size:cover;">
        
        <div class="" style="">
            <h2 style="text-align:center;">Temporada</h2>
        </div>
        
        <!-- Cards: Winter, Spring, Summer, Fall -->
        <div class="row">
            
            <div class="col">
                <a target="_blank" href="https://www.behance.net/doonnnx">
                  <div class="thecard">

                    <div class="card-img">
                      <img src="imagens/seaseon/winter-anime.png">
                    </div>

                    <div class="card-caption">
                      <i class="far fa-snowflake" style="font-size:20px; color:#5500ff;"></i>
                      <span class="date">Janeiro, Julho 16, 2019</span>
                      <h1>Janeiro / Winter / Inverno</h1>
                      <p>Um guia com os novos episódio da temporada de Janeiro / Winter.</p>
                    </div>

                    <div class="card-outmore">
                      <h5>Vê Animes</h5>
                      <i id="outmore-icon" class="fa fa-angle-right"></i>
                    </div>

                  </div>
                </a>
            </div>
            
            <div class="col">
                <a target="_blank" href="https://www.behance.net/doonnnx">
                  <div class="thecard">

                    <div class="card-img">
                      <img src="imagens/seaseon/spring-anime.jpg">
                    </div>

                    <div class="card-caption">
                      <i class="fab fa-pagelines" style="font-size:23px; color:pink;"></i>
                      <span class="date">Thursday, July 16, 2015</span>
                      <h1>Abril / Spring / Primavera</h1>
                      <p>Um guia com os novos episódio da temporada de Abril / Primavera.</p>
                    </div>

                    <div class="card-outmore">
                      <h5>Vê Animes</h5>
                      <i id="outmore-icon" class="fa fa-angle-right"></i>
                    </div>

                  </div>
                </a>
            </div>
            
            <div class="col">
                <a target="_blank" href="https://www.behance.net/doonnnx">
                  <div class="thecard">

                    <div class="card-img">
                      <img src="imagens/seaseon/summer-%20anime.jpg">
                    </div>

                    <div class="card-caption">
                      <i class="fas fa-umbrella-beach" style="font-size:25px; color:#0099ff;"></i>
                      <span class="date">Thursday, July 16, 2015</span>
                      <h1>Julho / Summer / Verão</h1>
                      <p>Um guia com os novos episódio da temporada de Julho / Verão.</p>
                    </div>

                    <div class="card-outmore">
                      <h5>Vê Animes</h5>
                      <i id="outmore-icon" class="fa fa-angle-right"></i>
                    </div>

                  </div>
                </a>
            </div>
            
            <div class="col">
                <a target="_blank" href="https://www.behance.net/doonnnx">
                  <div class="thecard">

                    <div class="card-img">
                      <img src="imagens/seaseon/fall-anime.jpg">
                    </div>

                    <div class="card-caption">
                      <i class="fas fa-apple-alt" style="font-size:25px; color:#e62e00;"></i>
                      <span class="date">Thursday, July 16, 2015</span>
                      <h1>Outubro / Fall / Outono</h1>
                      <p>Um guia com os novos episódio da temporada de Outubro / Fall.</p>
                    </div>

                    <div class="card-outmore">
                      <h5>Vê Animes</h5>
                      <i id="outmore-icon" class="fa fa-angle-right"></i>
                    </div>

                  </div>
                </a>
            </div>
            
        </div>
        
        <!-- Container: Animes de Temporadas passadas -->
        <div class="container">
            <div class="" style="background-color:#efefef; width:1140px; margin-left:-15px; border-radius:2px; height:40px;">
                <h3 style="text-align:center;">Lista de Animes das Temporada passada</h3>
            </div>
            <div class="row" style="color:black; background-color:white; margin-top:-px;border-radius:2px;">
                <div class="col">
                    <p> <i class="fab fa-ethereum"></i>Janeiro / Winter / Inverno 2018 </p>
                    <p> <i class="fab fa-ethereum"></i>Janeiro / Winter / Inverno 2017 </p>
                    <p> <i class="fab fa-ethereum"></i>Janeiro / Winter / Inverno 2016 </p>
                    <p> <i class="fab fa-ethereum"></i>Janeiro / Winter / Inverno 2018 </p>
                </div>
                <div class="col">
                    <p> <i class="fab fa-ethereum"></i>Abril / Spring / Primavera 2018 </p>
                    <p> <i class="fab fa-ethereum"></i>Abril / Spring / Primavera 2017 </p>
                    <p> <i class="fab fa-ethereum"></i>Abril / Spring / Primavera 2016 </p>
                    <p> <i class="fab fa-ethereum"></i>Abril / Spring / Primavera 2015 </p>
                </div>
                <div class="col">
                    <p> <i class="fab fa-ethereum"></i>Julho / Summer / Verão 2018 </p>
                    <p> <i class="fab fa-ethereum"></i>Julho / Summer / Verão 2017 </p>
                    <p> <i class="fab fa-ethereum"></i>Julho / Summer / Verão 2016 </p>
                    <p> <i class="fab fa-ethereum"></i>Julho / Summer / Verão 2015 </p>
                </div>
                <div class="col">
                    <p> <i class="fab fa-ethereum"></i>Outubro / Fall / Outono 2018 </p>
                    <p> <i class="fab fa-ethereum"></i>Outubro / Fall / Outono 2017 </p>
                    <p> <i class="fab fa-ethereum"></i>Outubro / Fall / Outono 2016 </p>
                    <p> <i class="fab fa-ethereum"></i>Outubro / Fall / Outono 2015 </p>
                </div>
            </div>
        </div>
        
        <!-- Next Button -->
        <div class="">
            <button id="button-next" style="margin-top:150px;"> <i class="fa fa-angle-double-down" id="arrow-next"></i> </button>
        </div>
        
    </section>
    
        <!-- LINHA: Divisão de Sectons -->
        <div class="" id="linha-divisao-section">
            .
        </div>
    
    <!-- SECTION 03: Cards 
    ================================================== -->
    <section class="" style="background-image: url('imagens/.jpg'); background-size:cover;">
        <div class="container" style="padding-top:30px;">
            
            <img src="imagens/titulo-black.png" id="site-title" style="margin-left:42%;"/>

                    <hr style="width:50%; background-color:black;"/>
            
            <p style="text-align:center;">Aqui você pode cadastrar Animes das próximas temporadas, como um controle de favoritos de espera dos animes que serão lançados futuramentes.</p>
                
                <p style="text-align:center; color:white;"> <i class="fas fa-radiation-alt"></i> Cadastre animes e suas respectivas datas das próximas temporadas para ter um controle do que os aguarda nas próximas temporadas.</p>
                    
                <div class="" style="color:white; height: 150px; border-radius:20px; opacity:0.9; background-image: linear-gradient(to right, #a900b4 , #522ec0);">
                    <!-- Input: Cadastro Anime Assistindo -->
                    <form action="insertproxtemporada.php" method="post" style="padding-top:22px; margin-left:15px;">
                        <div class="row" id="row-input-parados2">
                            <div class="col-2">
                                <label for="inputEmail4">Nome:</label>
                                <input type="text" class="form-control" name="nome" placeholder="Anime Name" required>
                            </div>
                            <div class="col-2">
                                <label for="inputEmail4">Data Estreia:</label>
                                <input type="text" class="form-control" name="estreia" placeholder="Estreia" required>
                            </div>
                            <div class="col-2">
                                <label for="inputEmail4">Temporada:</label>
                                <input type="text" class="form-control" name="temporada" placeholder="Temporada">
                            </div>
                            <div class="col-2">
                                <label for="inputEmail4">Sinopse:</label>
                                <input type="text" class="form-control" name="sinopse" placeholder="Sobre">
                            </div>
                            <div class="col-2">
                                <label for="inputEmail4">Link Trailer:</label>
                                <input type="text" class="form-control" name="trailer" placeholder="Link do Trailer">
                            </div>
                            <div class="col-1">
                                <label for="inputEmail4">Nota:</label>
                                <input type="text" class="form-control" name="nota" placeholder="Nota">
                            </div>
                            <div class="col-1">
                                <label for="inputEmail4">Save</label>
                                <button type="submit" class="btn btn-dark btn-animeproxtemp"> <i class="fas fa-save" id="icon-save-parados"></i></button>
                            </div>
                                <input name="imagem" type="file" style="margin-left:68%; margin-top:10px;"/>
                        </div>
                    </form>
                </div>
            
            <div class="row" style="margin-top:40px; margin-left:-110px;">
                <?php include ('control/selectproxtemporada.php'); ?>
            </div>

            <!-- button next -->
            <div class="">
                <button id="button-next"> <i class="fa fa-angle-double-down" id="arrow-next"></i> </button>
            </div>
            
       </div> 
    </section>
    
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>