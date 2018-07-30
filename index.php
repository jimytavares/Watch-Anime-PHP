<!DOCTYPE HTML>  
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
    
    <!-- MENU GERAL -->
    <div class="row" id="background-menu">
            <div class="col-6" id="col-menu01">
                Iron Blood Sweat Gundam
            </div>
            <div class="col-5" id="col-menu02">

                <div class="row">
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
                </div>

            </div>
        </div>
    
    <!-- SECTION 01: Input e Table -->
    <section class="" id="" style="background-image: url('imagens/img03.jpg'); background-size:cover;">
        
                <img src="imagens/titulo.png" id="site-title"/>
                <hr class="hr-linha"/>
                
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
                              <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Episodio</th>
                                <th>Data</th>
                                <th>Prox</th>
                                <th>Dia</th>
                                <th>Ep Novo</th>
                                <th>Qualidade</th>
                                <th>Excluir</th>
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
                
            </div>
                
    </section>
    
                        <!-- LINHA: Divisão de Sectons -->
                        <div class="" id="linha-divisao-section">
                        .
                        </div>
    
    <!-- SECTION 02: Cards -->
    <section class="" style="background-image: url('imagens/img05.jpg'); background-size:cover;">
        
        <img src="imagens/titulo.png" id="site-title"/>
        <hr class="hr-linha"/>
        
        <!-- Card's Linha: 01 -->
        <div class="row">
            
            <div class="col">
                
                <div class="row" id="card-create">
                    <img src="imagens/01anime.png" id="img-card"/>
                    
                    <div class="col">
                        <p id="titulo-card">Isekai Maou to Shoukan</p>
                        <p id="icon-card-id"> <i class="fa fa-themeisle"></i> 20</p>
                        <p id="coment-card"> <i class="fas fa-comments" style="color:black;"></i> Comentário: Mago fuderoso, com duas escaravas.</p> 
                    </div>
                </div>
                
            </div>
            
            <div class="col">
                
                <div class="row" id="card-create">
                    <img src="imagens/02anime.png" id="img-card"/>
                    
                    <div class="col">
                        <p id="titulo-card">Satsuriku no Tenshi</p>
                        <p id="icon-card-id"> <i class="fa fa-themeisle"></i> 21</p>
                        <p id="coment-card"> <i class="fas fa-comments" style="color:black;"></i> Comentário: Garota inocente com mumia, anime de suspense.</p> 
                    </div>
                </div>
                
            </div>

            <div class="col">
                
                <div class="row" id="card-create">
                    <img src="https://www.intoxianime.com/wp-content/uploads/2018/04/91399l2-200x300.jpg" id="img-card"/>
                    
                    <div class="col" id="p-col-cinza">
                        <p id="titulo-card">Phantom in the Twilight</p>
                        <p id="icon-card-id"> <i class="fa fa-themeisle"></i> 18</p>
                        <p id="coment-card"> <i class="fas fa-comments" style="color:black;"></i> Comentário:</p> 
                    </div>
                </div>
                
            </div>
            
        </div>
        
        <!-- Card's Linha: 02 -->
        <div class="row">
            
            <div class="col">
                
                <div class="row" id="card-create">
                    <img src="https://www.intoxianime.com/wp-content/uploads/2018/04/90995l-205x300.jpg" id="img-card"/>
                    
                    <div class="col" id="p-col-cinza">
                        <p id="titulo-card">Kyoto Teramachi Sanjou no Holmes</p>
                        <p id="icon-card-id"> <i class="fa fa-themeisle"></i> 17</p>
                        <p id="coment-card"> <i class="fas fa-comments" style="color:black;"></i> Comentário: Garota se relaciona com um vendedor de artigos antigos.</p> 
                    </div>
                </div>
                
            </div>
            
            <div class="col">
                
                <div class="row" id="card-create">
                    <img src="https://www.intoxianime.com/wp-content/uploads/2018/04/91304l-216x300.jpg" id="img-card"/>
                    
                    <div class="col" id="p-col-cinza">
                        <p id="titulo-card">Angolmois: Genkou Kassenki</p>
                        <p id="icon-card-id"> <i class="fa fa-themeisle"></i> 19</p>
                        <p id="coment-card"> <i class="fas fa-comments" style="color:black;"></i> Comentário: Samurai overpower, anime serio.</p> 
                    </div>
                </div>
                
            </div>

            <div class="col">
                
                <div class="row" id="card-create">
                    <img src="https://www.intoxianime.com/wp-content/uploads/2018/04/91326l-212x300.jpg" id="img-card"/>
                    
                    <div class="col" id="p-col-cinza">
                        <p id="titulo-card">Sirius the Jaeger (Tenrou)</p>
                        <p style="color:purple;">ID: 25</p>
                        <p>Comentário: Anime de vampiro</p> 
                    </div>
                </div>
                
            </div>
            
        </div>
        
        <!-- Next Button -->
        <div class="">
            <button id="button-next" style="margin-top:150px;"> <i class="fa fa-angle-double-down" id="arrow-next"></i> </button>
        </div>
        
    </section>
    
    <!-- SECTION 03: Table Ranking -->
    <section class="" style="background-image: url('imagens/img245.jpg'); background-size:cover;">
        
        <img src="imagens/titulo.png" id="site-title" style="margin-left:45%;"/>
        
                <hr style="width:50%; color:white;"/>
        
        <div class="container">    
            
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
</body>
</html>