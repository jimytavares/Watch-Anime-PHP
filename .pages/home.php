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
    <!-- Responsividade -->
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

</head>
<body class="resp-bodyAll" style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">
    
    <!-- SECTION 01: header 
    ===================================================== -->
    <?php include ('../.globals/header.php'); ?>

    <!-- SECTION 02: menu
    ===================================================== -->
    <sectcion>
        <div class="container-fluid" style="width: 95%; margin-top:30px;">

            <div class="row" style="margin-left:40px;">
                <div class="col-md-auto">
                    <a href="home.php"> <button type="button" class="btn btn-outline-success resp-menu-butHome" style="background-color:#F9F8FD; width:100px; height: 50px; color:white; border-radius:1px;"> <i class="fas fa-home" style="color:black; font-size:25px;"></i> </button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="perfil.php">  <button type="button" class="btn btn-outline-success resp-menu-butPerfil" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Perfil</button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="temporada.php"> <button type="button" class="btn btn-outline-success resp-menu-butTemp" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Temporadas</button> </a>
                </div>
                    <!-- Resp: Button Mobile -->
                    <div class="col-md-auto">
                        <a href="temporada.php"> <button type="button" class="btn btn-outline-success resp-menu-buTemp2" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px; display:none;">Temp</button> </a>
                    </div>
                
                <div class="col-md-auto">
                    <a href="lancamentos.php"> <button type="button" class="btn btn-outline-success resp-menu-butLanc" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-55px;">Lançamento</button> </a>
                </div>
                
                    <!-- Resp: Button Mobile -->
                    <div class="col-md-auto">
                        <a href="lancamentos.php"> <button type="button" class="btn btn-outline-success resp-menu-butLanc2" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-55px; display:none;">Novos</button> </a>
                    </div>
                
                <div class="col-md-auto">
                    <a href="ranking.php"> <button type="button" class="btn btn-outline-success resp-menu-butRank" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-54px;">Ranking</button> </a>
                </div>
            </div>

        </div>
    </sectcion>

    <!-- SECTION: corpo
    ===================================================== -->
    <section class="container-fluid resp-body" style="background-color:#eeebf9; width: 95%; border-radius:5px;">
            
            <!--##### ROW 01 ####-->
            <div class="row" style="padding-top: 20px; width:99%; margin-left:8px;">
                
                <!-- COL 01: xxxx -->
                <div class="col" style="background-color:;">
                        <div class="" style="background-color:white; width:300px;text-align:center; font-family: 'Poppins', sans-serif; height:210px; margin-left:70%; margin-top:-15px; box-shadow: 1px 1px 10px black;">
                            <h2> <i class="fas fa-tv" style="font-size:26px; color:#4e38c1; margin-top:30px;"></i> xXxXx</h2>
                            <p style="color:gray;">Cadastre os animes que você está <br/> assistindo no momento.</p>
                            <a href="form-assistindo.php"> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#teste1" style=" width:230px; background-color:#ff3300; border:none; height:40px; margin-top:25px;">xXxXx</button> </a>
                        </div>
                </div>
                
                <!-- COL 02: Assistindo -->
                <div class="col" style="background-color:;">
                        <div class="" style="background-color:white; width:300px;text-align:center; font-family: 'Poppins', sans-serif; height:210px; margin-left:130px; margin-top:-15px; box-shadow: 1px 1px 10px black;">
                            <h2> <i class="fas fa-tv" style="font-size:26px; color:#4e38c1; margin-top:30px;"></i> Animes</h2>
                            <p style="color:gray;">Cadastre os animes que você está <br/> assistindo no momento.</p>
                            <a href="form-assistindo.php"> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#teste1" style=" width:230px; background-color:#4e38c1; border:none; height:40px; margin-top:25px;">Cadastrar</button> </a>
                        </div>
                </div>
                
                <!-- COL 03: xxxx -->
                <div class="col" style="background-color:;">
                        <div class="" style="background-color:white; width:300px;text-align:center; font-family: 'Poppins', sans-serif; height:210px; margin-left:-24%; margin-top:-15px; box-shadow: 1px 1px 10px black;">
                            <h2> <i class="fas fa-tv" style="font-size:26px; color:#4e38c1; margin-top:30px;"></i> xXxXx</h2>
                            <p style="color:gray;">Cadastre os animes que você está <br/> assistindo no momento.</p>
                            <a href="form-assistindo.php"> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#teste1" style=" width:230px; background-color:#47d1d1; border:none; height:40px; margin-top:25px;">xXxXx</button> </a>
                        </div>
                </div>
                
                <!-- COL 02: Ranking 
                <div class="col-8">

                    <div class="container" style="width:1000px; margin-top: 50px; color:white; background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #2F449C); height:50px; border-radius:2px; box-shadow: 1px 3px 10px #000000; text-align:center;">
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
                    
                </div> -->

            </div>
        
            <!--##### ROW 02 ####-->
            <div class="row" style="padding-top: 40px; width:99%; margin-left:8px;">
        
                <div class="container" style="width:1000px; color:white; background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #2F449C); height:50px; border-radius:2px; box-shadow: 1px 3px 10px #000000; text-align:center;">
                        <div class="row" style="padding-top:15px;">
                            <div class="col">
                                <i class="far fa-calendar-alt" id="icon-table-assist"></i>
                                <i class="fas fa-info-circle" id="icon-table-assist" style="margin-left:30px;"></i> 
                            </div>
                            <div class="col alignText-r">
                                <b>Animes Assistindo</b>
                            </div>
                            <div class="col">
                                <i class='far fa-edit' style='color:#ff66d9; font-size: 20px;'></i>
                                <i class='fas fa-trash-alt' style='font-size:20px; color:#EE5253;margin-left:30px;'></i>
                            </div>
                        </div>
                    </div>
                    
                <table class="table table-bordered" style="margin-top: 10px; margin-left: 5%; width:90%;">
                        <thead>
                            <tr style="background-image: linear-gradient(to right, #3FC9FE ,#3FC9FE, #3FC9FE); color:white;">
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Episódio</th>
                                <th style="width:200px;">Dia Lançamento</th>
                                <th style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody style="background-color:white; font-family: 'Poppins', sans-serif; color:#545868;">
                            <?php include_once('../../trunk/control/selectAssistindo2.php'); ?>
                        </tbody>
                    </table>
                
            </div>
        
            <!--##### ROW 03 ####-->
            <div class="row" style="padding-top: 20px; width:99%; margin-left:8px;">
            
            </div>
        
        <!-- Group MODAL -->
        <div class="modal fade" id="teste1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
                    <?php echo $_SESSION['nickname'] ?>
                    </div>

                    </div>
                </div>-->