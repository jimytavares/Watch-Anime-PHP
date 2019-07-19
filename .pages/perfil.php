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
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <style>  </style>

</head>
<body style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">
    
    <!-- SECTION 01: Header 
    ===================================================== -->
    <?php include ('../../trunk/.globals/header.php'); ?>

    <!-- SECTION 02: Botões de Ação
    ===================================================== -->
    <sectcion>
        <div class="container-fluid" style="width: 95%; margin-top:30px;">

            <div class="row" style="margin-left:40px;">
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/home.php" > <button type="button" class="btn btn-outline-success" style="background-color:black; opacity:0.6; width:100px; height: 50px; color:white; border-radius:1px;"> Home </button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/perfil.php"> <button type="button" class="btn btn-outline-success" style="background-color:#eeebf9; width:100px; height: 50px; color:black; border-radius:1px; margin-left:-25px;"> <img src="../../trunk/imagens/icon-perfil3.png" style="width:90px; margin-left:-6px;"/> </button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/temporada.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Temporadas</button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/ranking.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Ranking</button> </a>
                </div>
            </div>

        </div>
    </sectcion>

    <!-- SECTION ALL BODY
    ===================================================== -->
    <section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 0px; height:1000px; border-radius:5px;">
        
        <!--#### ROW GERAL 01: Perfil ####-->
        <div class="" style="background-color:white; width: 99%; margin-left:5px; margin-top:70px; border-radius:5px; height:270px;">
            
            <!-- LINHA 01: Usuario, level, etc -->
            <div class="row" style="width:97%; margin-left:20px; padding-top:20px;">
                <div class="col-md-auto">
                    <img src="../../trunk/imagens/user.jpg" style="width:100px;"/>
                    
                </div>
                <div class="col-md-auto">
                    <h3><i class="fas fa-street-view" style="color:#00b359; margin-right: 10px;"></i><?=$_SESSION['login']?></h3>
                    <p> <i class="fab fa-accusoft"></i> <b>Animes</b> Assistindo: 18</p>
                </div>
                <div class="col-md-auto">
                    <p style="margin-top:56px;"> <i class="fas fa-boxes"></i> <b>Animes</b> Parados: 22</p>
                </div>
                <div class="col-md-auto" style="text-align:right;">
                    <h3 style="color:;">Level: 100</h3>
                    <p style=""> <i class="fas fa-list-ol" style="font-size:18px;"></i> <b>Animes</b> Assistidos: 120</p>
                </div>
                <div class="col">
                    
                    <div class="row" style="background-color:white; width: 98%; margin-left: 60px; margin-top: 30px;">
                        <div class="col">
                            <img src="../../trunk/imagens/icon-star.png" /> 
                            <b>Conquistas:</b> 281,30
                        </div>
                        <div class="col">
                            <img src="../../trunk/imagens/icon-doc.png" />
                            <b>Anotações:</b> 15
                        </div>
                        <div class="col">
                            <img src="../../trunk/imagens/icon-msg.png" />
                            <b>Mensagens:</b> 3201
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- LINHA 02: Barra XP, etc -->
            <div class="row" style="width: 97%; margin-top:10px; margin-left: 20px;">
                <div class="col">
                    
                    <div class="progress" style="border-radius:0px; height:15px; width:730px;">
                      <div class="progress-bar" role="progressbar" style="width: 55%; background-color:#c61aff;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
                    </div>
                    
                </div>
                <div class="col">
                    
                </div>
            </div>
            
            <!-- LINHA 03: Botões de ação site -->
            <div class="" style="margin-top:10px; margin-left: 20px;">
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-coins" style="color:#5345ba; font-size: 20px;"></i> R$ 1000,00</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="far fa-newspaper" style="color:#00ace6; font-size: 20px;"></i> Noticias</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-sync-alt" style="color:#5cbcb1; font-size: 20px;"></i> Animes Parados</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-chart-bar" style="color:#ff8000; font-size: 20px;"></i> Meu Ranking Animes</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-chart-area" style="color:#e3356f; font-size: 20px;"></i> Perfil Ranking</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-users" style="color:#003366; font-size: 20px;"></i> Amigos</button> &nbsp &nbsp
            </div>
            
            <!-- LINHA 04: Botões de ação usuário -->
            <div class="" style="margin-top:10px; margin-left: 20px;">
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-user-circle" style="color:#e000c7; font-size: 20px;"></i> Trocar Nick</button> &nbsp &nbsp
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-key" style="color:#db8780; font-size: 20px;"></i> Trocar Senha</button> &nbsp &nbsp
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-at" style="color:#00ace6; font-size: 20px;"></i> Trocar E-Mail</button> &nbsp &nbsp
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-cog" style="color:#3e1a61; font-size: 20px;"></i> Configurações</button> &nbsp &nbsp
            </div>
            
        </div>
        
        <!--#### ROW GERAL 02: Animes ####-->
        <div class="row" style="width:99%; margin-left:4px; margin-top:15px; height: 230px;">
            <div class="col" style="background-color:white; border-radius:3px;">
                a
            </div>
            <div class="col" style="background-color:white; margin-left:10px; border-radius:3px;">
                b
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