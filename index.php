<!DOCTYPE HTML>  
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>
    
    <!-- MENU GERAL -->
    <div class="row" id="background-menu">
            
            <div class="col-4" id="col-menu01">
                <?php 
                      $mostrar_dia = date ("d", time());
                      $mostrar_mes = date ("m", time());
                      $mostrar_ano = date ("y", time());
                ?>
                <p style="color:white; font-size:25px;"> <?php echo $mostrar_dia . "/" . $mostrar_mes . "/" . $mostrar_ano; ?>  </p>
            </div>
        
            <div class="col" style="text-align:center;">
                <img src="imagens/titulo.png" />
            </div>
        
            <div class="col-5" id="col-menu02">

                <!-- <div class="row">
                    <div class="col-3" id="col-menu02-hover">
                        <i class="fa fa-home" id="menu-size-icon"></i> HOME
                    </div>
                    <div class="col-3" id="col-menu02-hover">
                        <i class="fab fa-earlybirds" id="menu-size-icon"></i> ASSISTINDO
                    </div>
                    <div class="col-3" id="col-menu02-hover">
                        <i class="fas fa-stopwatch" id="menu-size-icon"></i> PARADOS
                    </div>
                    <div class="col-3" id="col-menu02-hover">
                        <i class="fas fa-list-ol" id="menu-size-icon"></i> RANKING
                    </div>
                </div> -->

            </div>
        
        </div>
    
    <!-- SECTION 01: Input e Table -->
    <section class="" id="" style="background-image: url('imagens/img03.jpg'); background-size:cover;">
                
            <div class="container">
                
                <!-- row input e table -->
                <div class="row" id="row-geral">
                    
                    <!-- Input Col01 -->
                    <div class="col-4 form-group" id="col-input">
                        
                        <div class="row" id="row-titulo-form">
                            <div class="col" id="icon-titulo01">
                                <i class="fab fa-jedi-order"></i>
                            </div>
                            <div class="col" id="titulo-form">
                                <p>Cadastro de Animes <i class="fab fa-earlybirds"></i> </p>
                            </div>
                        </div>
                            
                        <form action="insertassistindo.php" method="post">
                            
                            <input type="text" class="form-control" name="nome" value="" id="input-cadastro" placeholder="Nome do Anime">
                            <input type="text" class="form-control" name="episodio" value="" id="input-cadastro" placeholder="Episódio Assistido" autocomplete="off">
                            <input type="text" class="form-control" name="dataassistido" value="" id="input-cadastro" placeholder="Data assistido" autocomplete="off">
                            <input type="text" class="form-control" name="proximoepisodio" value="" id="input-cadastro" placeholder="Próximo Episódio" autocomplete="off">
                            <input type="text" class="form-control" name="dataproxep" value="" id="input-cadastro" placeholder="Data próximo episódio" autocomplete="off">
                            <input type="text" class="form-control" name="qualidade" value="" id="input-cadastro" placeholder="Qualidade">
                            <input type="text" class="form-control" name="comentario" value="" id="input-cadastro" placeholder="Comentários">
                            
                              <!--<div class="input-group mb-2" id="input-cadastro">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">@</div>
                                <input type="text" class="form-control" name="nome" value="" placeholder="Nome do Anime">
                                </div>
                              </div> -->
                            
                                <br/>
                            <button type="submit" class="btn btn-dark" id="button-salvar-form"> Salvar </button>
                        </form>

                    </div>

                    <!-- Table Col02 -->
                    <div class="col-8" id="col-table">
                        
                        <table class="table">
                            <thead>
                              <tr style="font-size:15px; background-color:; color:;">
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Episodio</th>
                                <th>Dia</th>
                                <th>Qualidade</th>
                                <th>Edit</th>
                                <th>Delet</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php include ('control/selectAssistindo.php'); ?>
                            </tbody>
                          </table>

                    </div>

                </div>
                
                <!-- campo excluir -->
                <form action="control/excluindoAssistindo.php" method="get">
                    <div class="form-group">
                      <label for="excluir" style="color:white;">ID para Excluir da Lista:</label>
                      <input type="text" name="idex" class="form-control" placeholder="Digite o ID do anime a ser excluido manualmente">
                    </div>                        
                    <button type="submit" class="btn btn-danger">Exlcuir</button>
                </form>
                
                <!-- button next -->
                <div class="">
                    <button id="button-next"> <i class="fa fa-angle-double-down" id="arrow-next"></i> </button>
                </div>
                
                <!-- Modal Editar -->
                <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
    
    <!-- SECTION 02: Cards -->
    <section class="" style="background-image: url('imagens/img05.jpg'); background-size:cover;">
        
        a
        
       <!-- button next -->
        <div class="">
            <button id="button-next"> <i class="fa fa-angle-double-down" id="arrow-next"></i> </button>
        </div>
        
    </section>
    
        <!-- LINHA: Divisão de Sectons -->
        <div class="" id="linha-divisao-section">
    .
    </div>
    
    <!-- SECTION 03: Table Ranking -->
    <section class="" style="background-image: url('imagens/img245.jpg'); background-size:cover;">
        
        <img src="imagens/titulo.png" id="site-title" style="margin-left:45%;"/>
        
                <hr style="width:50%; color:white;"/>
        
        <div class="container">    
            
            <form action="insertparados.php" method="post">
                <div class="row" id="row-input-parados">
                    <div class="col-2">
                        <label for="inputEmail4">Name:</label>
                        <input type="text" class="form-control input-parados" name="nome" placeholder="Anime Name" required>
                    </div>
                    <div class="col-2">
                        <label for="inputEmail4">Episode:</label>
                        <input type="text" class="form-control input-parados" name="episodio" placeholder="Episode Stopped" required>
                    </div>
                    <div class="col-2">
                        <label for="inputEmail4">Date:</label>
                        <input type="text" class="form-control input-parados" name="data" placeholder="Last Date">
                    </div>
                    <div class="col-2">
                        <label for="inputEmail4">Season:</label>
                        <input type="text" class="form-control input-parados" name="season" placeholder="Current Season">
                    </div>
                    <div class="col-2">
                        <label for="inputEmail4">Comment:</label>
                        <input type="text" class="form-control input-parados" name="comentario" placeholder="Speak About Anime">
                    </div>
                    <div class="col-2">
                        <label for="inputEmail4">Note:</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control input-parados" name="nota" id="inputEmail4" placeholder="Star">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-dark" id="button-salvar-parados"> <i class="fas fa-save" id="icon-save-parados"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <table class="table table-sm">
                <thead>
                  <tr id="tr-parados">
                    <th id="th-parados">ID</th>
                    <th id="th-parados">Nome</th>
                    <th id="th-parados">Episódio</th>
                    <th id="th-parados">Data</th>
                    <th id="th-parados">Temporada</th>
                    <th id="th-parados">Nota</th>
                    <th id="th-parados">Comentário</th>
                    <th id="th-parados">Excluir</th>
                  </tr>
                </thead>
                <tbody id="body-table-parados">
                  <?php include ('control/selectParados.php'); ?>
                </tbody>
              </table>
            
        </div>
        
        <!-- Next Button -->
        <div class="">
            <button id="button-next" style="margin-top:150px;"> <i class="fa fa-angle-double-down" id="arrow-next"></i> </button>
        </div>
        
    </section>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>