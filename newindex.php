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
    
    <!-- 01 SECTION: Cadastro Animes -->
    <section class="" style="background-image: url('imagens/img245.jpg'); background-size:cover;">
        
        <img src="imagens/titulo.png" id="site-title" style="margin-left:45%;"/>
        
                <hr style="width:50%; background-color:white;"/>
        
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
            
            <!-- Cards: Seaseon -->
                <div class="row" style="margin-top:30px;">
                    <div class="col">
                        <ul class="list-group">
                          <li class="list-group-item list-group-item-info" id="season-janeiro"> <i class="far fa-snowflake" style="font-size:15px;"></i> Janeiro / Winter / Inverno</li>
                          <li class="list-group-item list-group-item-warning" id="season-janeiro"> <i class="fab fa-pagelines" style="font-size:15px;"></i> Abril / Spring / Primavera</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-danger" id="season-janeiro"> <i class="fas fa-umbrella-beach" style="font-size:15px;"></i> Julho / Summer / Verão</li>
                            <li class="list-group-item list-group-item-success" id="season-janeiro"> <i class="fas fa-apple-alt" style="font-size:15px;"></i> Outubro / Fall / Outono</li>
                        </ul>
                    </div>
                </div>
            
            <!-- Table: Episódios -->
                <table class="table table-sm" style="margin-top:20px;">
                    <thead>
                        <tr id="tr-parados">
                        <th id="th-parados">ID</th>
                        <th id="th-parados">Nome</th>
                        <th id="th-parados">Episódio</th>
                        <th id="th-parados"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldataassistido" style="color:black; border-radius: 10px; border-color:black; font-weight: bold; background-color:#00bfff;">Data Assistido</button> </th>
                        <th id="th-parados"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldataproxep" style="color:black; border-radius: 10px; border-color:black; font-weight: bold; background-color:#1ac6ff;">Data Prox Ep</button> </th>
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
    
    <!-- SECTION 02: Cards -->
    <section class="" style="background-image: url('imagens/img05.jpg'); background-size:cover;">
        <div class="container">
            
            <img src="imagens/titulo.png" id="site-title" style="margin-left:45%;"/>

                    <hr style="width:50%; background-color:white;"/>

                    <!-- Input: Cadastro Anime Assistindo -->
                    <form action="insertproxtemporada.php" method="post">
                        <div class="row" id="row-input-parados2">
                            <div class="col-2">
                                <input type="text" class="form-control" name="nome" placeholder="Anime Name" required>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" name="estreia" placeholder="Estreia" required>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" name="temporada" placeholder="Temporada">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" name="sinopse" placeholder="Sobre">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" name="trailer" placeholder="Link do Trailer">
                            </div>
                            <div class="col-1">
                                <input type="text" class="form-control" name="nota" placeholder="Nota">
                            </div>
                            <div class="col-1">
                                <button type="submit" class="btn btn-dark btn-animeproxtemp" style=""> <i class="fas fa-save" id="icon-save-parados"></i></button>
                            </div>
                                <input name="imagem" type="file" style="margin-left:68%; margin-top:10px;"/>
                        </div>
                    </form>
            
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