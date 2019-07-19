<!DOCTYPE HTML>  
<html>
<head>
    
    <?php  
        session_start();
        require_once('../.globals/verificar_logado.php');
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Meu CSS -->
    <link href="../css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <style>  </style>

</head>
<body style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">
    
    <!-- SECTION 01: Header 
    ===================================================== -->
    <?php include ('../.globals/header.php'); ?>

    <!-- SECTION 02: Botões de Ação
    ===================================================== -->
    <sectcion>
        <div class="container-fluid" style="width: 95%; margin-top:30px;">

            <div class="row" style="margin-left:40px;">
                <div class="col-md-auto">
                    <a href="home.php"> <button type="button" class="btn btn-outline-success" style="background-color:#F9F8FD; width:100px; height: 50px; color:white; border-radius:1px;"> <i class="fas fa-home" style="color:black; font-size:25px;"></i> </button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="perfil.php">  <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Perfil</button> </a>
                </div>
                <div class="col-md-auto">
                    <a href=".pages/temporada.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Temporadas</button> </a>
                </div>
                <div class="col-md-auto">
                    <a href=".pages/ranking.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Ranking</button> </a>
                </div>
            </div>

        </div>
    </sectcion>

    <!-- SECTION ALL BODY
    ===================================================== -->
    <section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 0px; height:1000px; border-radius:5px;">
            
            <!--##### ROW 01 ####-->
            <div class="row" style="padding-top: 20px; width:99%; margin-left:8px;">

                <div class="col-4">
                    
                    <!-- 01 CARD: Assistindo -->
                    <div class="row" style="background-color:white; width:99%; margin-left:5px; margin-top:45px; height:150px; border-radius:5px;">
                        <div class="col-md-auto">
                            <img src="../imagens/logo-table.png" style="width:120px; padding-top:15px;"/>
                        </div>
                        <div class="col">
                            <h3>Assistindo</h3>
                            <p>Aqui você pode cadastrar todos os animes que está assistindo no momento.</p>
                            <button type="button" class="btn btn-success btn-sm" style="width:200px; margin-left: 60px;">Cadastrar</button>
                        </div>
                    </div>
                    
                    <!-- 02 CARD: Ranking -->
                    <div class="row" style="background-color:white; width:99%; margin-left:5px; margin-top:10px; height:150px; border-radius:5px;">
                        <div class="col-md-auto">
                            <img src="../imagens/logo-table.png" style="width:120px; padding-top:15px;"/>
                        </div>
                        <div class="col">
                            <h3>Ranking</h3>
                            <p>Aqui você pode cadastrar todos os animes que está assistindo no momento.</p>
                            <button type="button" class="btn btn-primary btn-sm" style="background-color: #6D6CC7; width:200px; margin-left: 60px;">Cadastrar</button>
                        </div>
                    </div>
                
                </div>
                
                <div class="col-8">

                    <div class="container" style="margin-top: 50px; color:white; background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #2F449C); border-color: red; height:50px; border-radius:2px; box-shadow: 1px 3px 10px #000000; text-align:center;">
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
                    
                    <table class="table table-sm" style="margin-top: 10px;">
                        <thead>
                            <tr id="tr-parados">
                                <th id="th-parados">Nome</th>
                                <th id="th-parados">Episódio</th>
                                <th id="th-parados">Dia Lançamento</th>
                            </tr>
                        </thead>
                        <tbody id="body-table-parados">
                            <?php include_once('../../trunk/control/selectAssistindo.php'); ?>
                        </tbody>
                    </table>
                    
                </div>

            </div>
                
                <!-- hr division -->    
                <hr style="background-color:black; box-shadow: 1px 3px 10px black;"/>
        
            <!--##### ROW 02 ####-->
            <div class="row" style="padding-top: 20px; width:99%; margin-left:8px;">
                
                <!-- COL 01: Graficos ADD Animes -->
                <div class="col">
                    
                    <!-- Anime 01 Grafico -->
                    <div class="row" style="background-color:white; border-radius: 5px; width:95%; margin-left: 10px;">
                        <div class="col">
                            IMG
                        </div>
                        <div class="col">
                            <h3>Dr.Stone</h3>
                            <p>Dr.Stone</p>
                        </div>
                        <div class="col">
                            <img src="../imagens/graficos/g1.png" />
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm" style="margin-top: 20px;"> <i class="fas fa-plus"></i> Adicionar</button>
                        </div>
                    </div>
                    
                    <!-- Anime 02 Grafico -->
                    <div class="row" style="background-color:white; border-radius: 5px; width:95%; margin-left: 10px; margin-top:5px;">
                        <div class="col">
                            IMG
                        </div>
                        <div class="col">
                            <h3>Noragami</h3>
                            <p>Noragami</p>
                        </div>
                        <div class="col">
                            <img src="../imagens/graficos/g2.png" />
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm" style="margin-top: 20px;"> <i class="fas fa-plus"></i> Adicionar</button>
                        </div>
                    </div>
                    
                    <!-- Anime 03 Grafico -->
                    <div class="row" style="background-color:white; border-radius: 5px; width:95%; margin-left: 10px; margin-top:5px;">
                        <div class="col">
                            IMG
                        </div>
                        <div class="col">
                            <h3>Katekyo hitman reborn</h3>
                            <p>Katekyo hitman reborn</p>
                        </div>
                        <div class="col">
                            <img src="../imagens/graficos/g3.png" />
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm" style="margin-top: 20px;"> <i class="fas fa-plus"></i> Adicionar</button>
                        </div>
                    </div>
                    
                    <!-- Anime 04 Grafico -->
                    <div class="row" style="background-color:white; border-radius: 5px; width:95%; margin-left: 10px; margin-top:5px;">
                        <div class="col">
                            IMG
                        </div>
                        <div class="col">
                            <h3>Black Clover</h3>
                            <p>Black Clover</p>
                        </div>
                        <div class="col">
                            <img src="../imagens/graficos/g4.png" />
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm" style="margin-top: 20px;"> <i class="fas fa-plus"></i> Adicionar</button>
                        </div>
                    </div>
                    
                </div>
                
                <!-- COL 02: Notícias -->
                <div class="col">
                    
                    <div class="" style="background-color:white; width:95%; margin-left:5px; height: 165px; border-radius:4px;">
                        
                        <div class="row" style="height:50px; width: 98%; margin-left:10px; padding-top:20px; text-align:center;">
                            <div class="col">
                                <img src="../../trunk/imagens/01msg.png" style="width: 30px;"/>
                                <h3>dasdasdas</h3>
                                <p>dsadsa</p>
                            </div>
                            <div class="col">
                                <img src="../../trunk/imagens/02msg.png" style="width: 30px;"/>
                                <h3>dasdasdas</h3>
                                <p>dsadsa</p>
                            </div>
                            <div class="col">
                                <img src="../../trunk/imagens/03msg.png" style="width: 30px;"/>
                                <h3>dasdasdas</h3>
                                <p>dsadsa</p>
                            </div>
                            <div class="col">
                                <img src="../../trunk/imagens/04msg.png" style="width: 30px;"/>
                                <h3>dasdasdas</h3>
                                <p>dsadsa</p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Noticia: 01 -->
                    <div class="row" style="background-color:white; width:95%; margin-left: 5px; margin-top:px;">
                        <div class="col-md-auto">
                            <img src="../imagens/graficos/bar1.png" />
                        </div>
                        <div class="col-md-auto">
                            <i class="fas fa-envelope"  style="margin-top:10px; font-size: 18px; color:purple;"></i>
                        </div>
                        <div class="col" style="padding-top:10px;">
                            <p>Alguma noticia de algum anime, para mostrar alguma coisa que deve ter coisa pra mostrar.</p>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-check" style="padding-top:10px;">
                              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Noticia: 02 -->
                    <div class="row" style="background-color:white; width:95%; margin-left: 5px;">
                        <div class="col-md-auto">
                            <img src="../imagens/graficos/bar2.png" />
                        </div>
                        <div class="col-md-auto">
                            <i class="fas fa-envelope" style="margin-top:10px; font-size: 18px; color:red;"></i>
                        </div>
                        <div class="col" style="padding-top:10px;">
                            <p>Alguma noticia de algum anime, para mostrar alguma coisa que deve ter coisa pra mostrar.</p>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-check" style="padding-top:10px;">
                              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Noticia: 03 -->
                    <div class="row" style="background-color:white; width:95%; margin-left: 5px;">
                        <div class="col-md-auto">
                            <img src="../imagens/graficos/bar3.png" />
                        </div>
                        <div class="col-md-auto">
                            <i class="fas fa-envelope" style="margin-top:10px; font-size: 18px; color:green;"></i>
                        </div>
                        <div class="col" style="padding-top:10px;">
                            <p>Alguma noticia de algum anime, para mostrar alguma coisa que deve ter coisa pra mostrar.</p>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-check" style="padding-top:10px;">
                              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Noticia: 04 -->
                    <div class="row" style="background-color:white; width:95%; margin-left: 5px;">
                        <div class="col-md-auto">
                            <img src="../imagens/graficos/bar4.png" />
                        </div>
                        <div class="col-md-auto">
                            <i class="fas fa-envelope" style="margin-top:10px; font-size: 18px; color:;"></i>
                        </div>
                        <div class="col" style="padding-top:10px;">
                            <p>Alguma noticia de algum anime, para mostrar alguma coisa que deve ter coisa pra mostrar.</p>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-check" style="padding-top:10px;">
                              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Noticia: 05 -->
                    <div class="row" style="background-color:white; width:95%; margin-left: 5px;">
                        <div class="col-md-auto">
                            <img src="../imagens/graficos/bar1.png" />
                        </div>
                        <div class="col-md-auto">
                            <i class="fas fa-envelope" style="margin-top:10px; font-size: 18px; color:purple;"></i>
                        </div>
                        <div class="col" style="padding-top:10px;">
                            <p>Alguma noticia de algum anime, para mostrar alguma coisa que deve ter coisa pra mostrar.</p>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-check" style="padding-top:10px;">
                              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        
    </section>
    
    
    
    
    
    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>
                <!-- CARD: Geral
                    <div class="card-geral" style="width:95%; margin-top:30px; height: 250px; background-image: url('../imagens/bg-index2.png'); background-size:cover; border-radius:5px;">

                    <!-- LINHA: Dentro do Card
                    <div class="row" style="width: 100%; margin-left: -90px; padding-top: 10px; height:95%;">

                    <div class="col-md-auto" style="background-color:;">
                    <img src="../imagens/user.jpg" style="border-radius:100px; width: 150px; padding-top: 40px;"/>
                    </div>

                    <div class="col" style="background-color:blue;">
                    <?php echo $_SESSION['login'] ?>
                    </div>

                    </div>
                </div>-->