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
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
    <style>  </style>

</head>
<body style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">
    
    <!-- SECTION 01: Header 
    ===================================================== -->
    <?php include ('../../trunk/.globals/header.php'); ?>

    <!-- SECTION 02: Botões de Ação
    ===================================================== 
    <sectcion>
        <div class="container-fluid" style="width: 95%; margin-top:30px;">

            <div class="row" style="margin-left:40px;">
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/home.php" > <button type="button" class="btn btn-outline-success" style="background-color:black; opacity:0.6; width:100px; height: 50px; color:white; border-radius:1px;"> Home </button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/perfil.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; opacity:0.6; width:100px; height: 50px; color:white; border-radius:1px; margin-left:-25px;"> Perfil </button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/temporada.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Temporadas</button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="lancamentos.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Lançamento</button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/ranking.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Ranking</button> </a>
                </div>
            </div>

        </div>
    </sectcion> -->

    <!-- SECTION ALL BODY
    ===================================================== -->
    <section class="container-fluid" style="background-color:#eeebf9; width: 95%; margin-top: 5px; height:700px; border-radius:5px;">
        
        <!-- #### Row 01: Alert #### -->
        <div class="" style="margin-top:20px; background-color:white; border-radius:3px; height: 67px; width:98%; margin-left:10px;">
            
            <div class="row " style="width: 80%; margin-left: 1%; padding-top:20px;">
                <div class="col-md-auto">
                    <img src="../imagens/alert.png" style="margin-top:px;"/>
                </div>
                <div class="col" style="margin-top:-8px; font-size:13px;">
                    <p>Todos os <b>Animes</b> que você <b>Parou</b> de assistir.</p>
                    <p style="color:gray;">Visualize sua lista de animes cadastrados na página <a href="home.php" style="color:#716aca;"> <i class="fas fa-arrow-left"></i> Inicial</a> .</p>
                </div>
            </div>
            
        </div>
        
        <!-- #### Row 02: Formulário #### -->
        <div class="" style="background-color:white; width: 98%; margin-top: 20px; margin-left:10px; border-radius:3px;">
            
            <!-- TITLE: cadastro -->
            <div class="row no-gutters">
                <div class="col">
                    <h4 style="margin-left: 50px; padding-top:20px; font-family: 'Poppins', sans-serif;">Animes Parados</h4>
                </div>
                <div class="col-md-auto">
                    <i class="fas fa-angle-double-right" style="font-size:30px; margin-top:26px;"></i>
                </div>
                <div class="col-md-auto">
                    <h4 style="margin-left:5px; padding-top:21px; font-family: 'Poppins', sans-serif;">Cadastro Ranking</h4>
                </div>
                <div class="col">
                    <a href="ranking.php"> <button type="button" class="btn btn-primary btn-sm" style="margin-top:27px; margin-left:18px; background-color:#716aca; border:none;">Clique Aqui</button> </a>
                </div>
            </div>
            <hr style="border-top: 1px solid #999999; width:98%; opacity:0.4;">
            
            <!-- BOX: form -->
            <div class="" style="margin-left:3%; width: 1000px; margin-top:30px; border: ;">
                <form action="../../trunk/control/insertParados.php" method="post" autocomplete="on" style="font-family: 'Poppins', sans-serif;">
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Nome Anime:</p>
                        </div>
                        <div class="col">
                            <select class="form-control" name="id_anime" id="exampleFormControlSelect1" style="width:50%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999; margin-left:18px;">
                              <option value="0">..::Selecione Anime::..</option>
                              <?php include_once('../../trunk/control/selectTeste.php'); ?>  
                                
                            </select>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-auto">
                            <p>Episódio:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="episodio" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:28%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:50px;">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Dia da Semana:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="data" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:30%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999;">
                        </div>
                      </div>
                  </div> 
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p><b>Link</b> (Assistir):</p>
                        </div>
                        <div class="col">
                            <input type="text" name="link" class="form-control" id="exampleFormControlInput1" placeholder="link anime" style="width:65%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:19px;">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <p>OBS:</p>
                    <textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="3" style="width:83%; background-color:transparent; color:red; border-radius:3px; border: 1px solid gray;"></textarea>
                  </div>
                    <button class="btn btn-success" style="background-color:#716aca; border:none;">Limpar</button>
                    <button type="submit" class="btn btn-success" style="border:none;">Cadastrar</button>
                </form>
                
            </div>
            .<?php echo $_SESSION['id'] ?>
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