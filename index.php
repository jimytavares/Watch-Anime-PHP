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
        
        <div class="container" style="padding-top:30px;">    
            
            <!-- Buttons: Actions -->
            <div class="row">
                <div class="col create-button-action">
                    <button type="button" class="btn btn-primary button-action"> <h3> <i class="fas fa-user-circle" style="color:#6ae34f; font-size:40px;"></i> <br/> Seu Perfil</h3> </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary button-action" style="width: 250px; height:190px;"> <h3> <i class="fas fa-table" style="color:#FEDF08; font-size:40px;"></i> <br/> Table Ocult</h3> </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary button-action" style="width: 250px; height:190px;"> <h3> <i class="fas fa-rocket" style="color:#FA7914; font-size:40px;"></i> <br/> Lançamentos </h3> </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary button-action" style="width: 250px; height:190px;"> <h3> <i class="fas fa-tv" style="color:#33d3ff; font-size:40px;"></i> <br/> Assistir </h3></button>
                </div>
            </div>
            
            <!-- Noticias do Site -->
            <div class="row" style="color:white; margin-top:30px;">
                <div class="col" style="padding-top:40px;">
                    <h3> <i class="fas fa-newspaper"></i> Noticias</h3>
                    <p>Acesse a página de noticias e veja comentários dos usuarios referente a cada anime e </p>
                    <h3> <i class="fas fa-exclamation"></i> Objetivo</h3>
                    <p>O site é baseado em cadastrar animes que você está assistindo no momento, tendo assim controle do ultimo espisodio que assistiu, datas do próximo eposódio, temporada atual e você poderá da nota ao anime que está assistindo, assim outras pessoas poderá vê o que você achou do anime e seus pontos irão classificalos na tabela de ranking pessoal e global do site.</p>
                </div>
                <div class="col" style="background-color:; text-align:center;">
                    <img src="../trunk/imagens/gif-index-anime2.gif" style="border-radius:200px; width:350px; height:320px;"/>
                </div>
                <div class="col" style="padding-top:60px;">
                    <h3> <i class="fas fa-user-circle"></i> Seu Perfil</h3>
                    <p>Você pode ter acesso ao seu perfil, </p>
                    <h3> <i class="fas fa-cannabis"></i> Temporadas</h3>
                    <p>Acesse a página de temporadas e veja todos os animes das temporadas atuais e das próxima, podendo adicionalas a sua lista de espera para próxima temporada ou para animes que você está assistindo no momento.</p>
                </div>
            </div>
        
            <!-- Input: Cadastro Anime Assistindo -->
                <div class="" style="color:white; height: 150px; border-radius:20px; opacity:0.9; background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #2F449C, #2F449C); margin-top:50px;">
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
                        </div>
                    </form>
                </div>    
            
            <!-- Title Table: Icons and Title Table -->
            <div class="container" style="margin-top: 50px; color:white; background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #2F449C); border-color: red; height:50px; width:90%; border-radius:5px; box-shadow: 1px 3px 10px #000000; text-align:center;">
                    <div class="row" style="padding-top:15px;">
                        <div class="col">
                            <i class="far fa-calendar-alt" id="icon-table-assist" data-toggle="modal" data-target="#modaldataassistido"></i>
                            <i class="fas fa-info-circle" id="icon-table-assist" data-toggle="modal" data-target="#modalinfo" style="margin-left:30px;"></i> 
                        </div>
                        <div class="col">
                            <b>Animes Assistindo</b>
                        </div>
                        <div class="col">
                            <i class='far fa-edit' data-toggle="modal" data-target="#modaleditdel" style='color:#ff66d9; font-size: 20px;'></i>
                            <i class='fas fa-trash-alt' data-toggle="modal" data-target="#modaleditdel" style='font-size:20px; color:#EE5253;margin-left:30px;'></i>
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
                            <th id="th-parados">Dia</th>
                            <th id="th-parados">Data Assistido</th>
                            <th id="th-parados"> Data Prox Ep</th>
                            <th id="th-parados">Qualidade</th>
                            <th id="th-parados">Comentário</th>
                            <th id="th-parados">Nota</th>
                        </tr>
                    </thead>
                    <tbody id="body-table-parados">
                        <?php include_once('control/selectAssistindo.php'); ?>
                    </tbody>
            </table>
            
            <!-- Input: Cadastro Anime Assistindo -->
            <form action="insertassistindo.php" method="post">
                        <div class="row" id="row-input-parados">
                            <div class="col-2">
                                <label for="inputEmail1">Nome:</label>
                                <input type="text" class="form-control input-parados" name="nome" id="inputEmail1" placeholder="Anime Name" required>
                            </div>
                            <div class="col-2">
                                <label for="inputEmail2">Episódio:</label>
                                <input type="text" class="form-control input-parados" name="episodio" id="inputEmail2" placeholder="Episode Watched" required>
                            </div>
                            <div class="col-2">
                                <label for="inputEmail3">Data Assistida ¹:</label>
                                <input type="text" class="form-control input-parados" name="dataassistido"  id="inputEmail3" placeholder="Watched Date">
                            </div>
                                <div class="col-2">
                                    <label for="inputEmail4">Dia ¹:</label>
                                    <input type="text" class="form-control input-parados" name="diasemana"  id="inputEmail4" placeholder="Day Watched">
                                </div>
                            <div class="col-2">
                                <label for="inputEmail5">Data Próximo Ep ²:</label>
                                <input type="text" class="form-control input-parados" name="dataproxep"  id="inputEmail5"  placeholder="Date New Ep">
                            </div>
                                <div class="col-2">
                                    <label for="inputEmail6">Dia ²:</label>
                                    <input type="text" class="form-control input-parados" name="diasemanaproxep" id="inputEmail6" placeholder="Dia Prox Ep">
                                </div>
                            <div class="col-2">
                                <label for="inputEmail7">Qualidade:</label>
                                <input type="text" class="form-control input-parados" name="qualidade" id="inputEmail7" placeholder="Quality">
                            </div>
                            <div class="col-2">
                                <label for="inputEmail8">Comentario:</label>
                                <input type="text" class="form-control input-parados" name="comentario" id="inputEmail8" placeholder="Coment">
                            </div>
                            <div class="col-2">
                                <label for="inputEmail9">Nota:</label>
                                <input type="text" class="form-control input-parados" name="nota" id="inputEmail9" placeholder="Star">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-dark button-salvar-parados"> <i class="fas fa-save" id="icon-save-parados"></i> Save</button>
                    </form>
            
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
            
                    <!-- Modal: Editar e Excluir -->
                    <div class="modal fade bd-example-modal-lg" id="modaleditdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <th id="th-parados">Anime</th>
                                        <th id="th-parados">Editar</th>
                                        <th id="th-parados">Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-table-parados">
                                        <?php include ('control/selectEditDel.php'); ?>
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
        
        
    </section>
    
        <!-- LINHA: Divisão de Sectons -->
        <div class="" id="linha-divisao-section">
            .
        </div>
    
    <?php include ('.globals/footer.php'); ?>

    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>