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
    ===================================================== 
    <sectcion>
        <div class="container-fluid" style="width: 95%; margin-top:30px;">

            <div class="row" style="margin-left:40px;">
                <div class="col-md-auto">
                    <a href="home.php"> <button type="button" class="btn btn-outline-success resp-menu-butHome" style="background-color:#F9F8FD; width:100px; height: 50px; color:white; border-radius:1px;"> <i class="fas fa-home" style="color:black; font-size:25px;"></i> </button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="perfil.php">  <button type="button" class="btn btn-outline-success resp-menu-butPerfil" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;"></button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="temporada.php"> <button type="button" class="btn btn-outline-success resp-menu-butTemp" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;"></button> </a>
                </div>
                
                    <!-- Resp: Button Mobile 
                    <div class="col-md-auto">
                        <a href="temporada.php"> <button type="button" class="btn btn-outline-success resp-menu-buTemp2" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px; display:none;">Temp</button> </a>
                    </div>
                
                <div class="col-md-auto">
                    <a href="lancamentos.php"> <button type="button" class="btn btn-outline-success resp-menu-butLanc" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-55px;"></button> </a>
                </div>
                
                    <!-- Resp: Button Mobile 
                    <div class="col-md-auto">
                        <a href="lancamentos.php"> <button type="button" class="btn btn-outline-success resp-menu-butLanc2" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-55px; display:none;">Novos</button> </a>
                    </div>
                
                <div class="col-md-auto">
                    <a href="ranking.php"> <button type="button" class="btn btn-outline-success resp-menu-butRank" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-54px;">Ranking</button> </a>
                </div>
            </div>

        </div>
    </sectcion> -->

    <!-- SECTION: corpo
    ===================================================== -->
    <section class="container-fluid resp-body" style="background-color:#eeebf9; width: 95%; border-radius:5px; margin-top:25px;">
            
            <!--##### ROW 01: Assistindo ####-->
            <div class="row" style="padding-top: 20px; width:99%; margin-left:8px;">
                
                <!-- TABLE: Assistindo -->
                <div class="container" style="width:1000px; color:white; background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); height:50px; border-radius:2px; box-shadow: 1px 3px 10px #000000; text-align:center;">
                    <div class="row" style="padding-top:15px;">
                        <div class="col" style="background-color:;">
                            <i class="far fa-calendar-alt" id="icon-table-assist" style=""></i>
                            <i class="fas fa-info-circle" id="icon-table-assist" style="margin-left:30px; "></i> 
                        </div>
                        <div class="col alignText-r">
                            <p style="font-family: 'Poppins', sans-serif; font-size:16px;">A n i m e s Assistindo</p>
                        </div>
                        <div class="col" style="background-color:;">
                            <a href="form-assistindo.php" style="color:white;"> 
                                <i class="fab fa-wpforms" style="font-size:23px; "></i>
                            </a>

                            <i class='far fa-edit' style=' font-size: 20px; margin-left:20px;'></i>
                        </div>
                    </div>
                </div>
                    
                <table class="table table-borderless" style="margin-top: 10px; margin-left: 5%; width:90%;">
                    <thead>
                        <tr style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white;">
                            <th style="width:15%;">ID</th>
                            <th style="width:20%;">Nome</th>
                            <th style="width:10%;">Episódio Assistido</th>
                            <th style="color:;">Dia Lançamento</th>
                            <th style="color:;">Data</th>
                            <th style="color:;">+1 Ep</th>
                            <th style="color:;">-1 Ep</th>
                            <th style="color:;">Editar</th>
                            <th style="color:;">Apagar</th>
                        </tr>
                    </thead>
                    <tbody style="background-color:white; font-family: 'Poppins', sans-serif; color:#545868;">
                        <?php include_once('../../trunk/control/selectAssistindo2.php'); ?>
                    </tbody>
                </table>

            </div>
        
        <script>
            function myFunction() {
              document.getElementById("colorE").style.color = "yellow";
            }
        </script>
        
            <!--##### ROW 02: Parados ####-->
            <div class="row" style="padding-top: 40px; width:99%; margin-left:8px;">
                
                <!-- TABLE: Parados -->
                <div class="container" style="width:1000px; color:white; background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #2F449C); height:50px; border-radius:2px; box-shadow: 1px 3px 10px #000000; text-align:center; margin-top:30px;">
                        <div class="row" style="padding-top:15px;">
                            <div class="col" style="background-color:;">
                                <i class="far fa-calendar-alt" id="icon-table-assist"></i>
                                <i class="fas fa-info-circle" id="icon-table-assist" style="margin-left:30px;"></i> 
                            </div>
                            <div class="col alignText-r">
                                <p style="font-family: 'Poppins', sans-serif; font-size:16px;">Animes Parados</p>
                            </div>
                            <div class="col" style="background-color:;">
                                <a href="form-parados.php" style="color:white;"> 
                                    <i class="fab fa-wpforms" style="font-size:23px; color:#ff99ff;"></i>
                                </a>
                                
                                <i class='far fa-edit' style='color:#ff66d9; font-size: 20px; margin-left:20px;'></i>
                            </div>
                        </div>
                    </div>
                    
               <table class="table table-borderless" style="margin-top: 10px; margin-left: 5%; width:90%;">
                    <thead>
                        <tr style="background-image: linear-gradient(to right, #3A7EC7 ,#3A7EC7, #2F449C); color:white;">
                            <th style="width:15%;">ID</th>
                            <th style="width:20%;">Nome</th>
                            <th style="width:10%;">Episódio Parado</th>
                            <th style="width:;">Data</th>
                            <th style="width:;">+1 Ep</th>
                            <th style="width:;">-1 Ep</th>
                            <th style="width:;">Apagar</th>
                        </tr>
                    </thead>
                    <tbody style="background-color:white; font-family: 'Poppins', sans-serif; color:#545868;">
                        <?php include_once('../../trunk/control/selectParados.php'); ?>
                    </tbody>
                </table>
                
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
        
        <!-- JavaScript(testing) -->
        <div class="row">
            <div class="col">
                    <?php $intvariable = 'this.content'?>
            </div>
            <div class="col">
                <input class="form-control" type="text" placeholder="Readonly input here..." readonly>
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