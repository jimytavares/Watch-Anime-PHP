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

    <style>
        .bodyanimeted{
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);
            background-size: 400% 400%;
            position: relative;
            animation: change 10s ease-in-out infinite;
        }

        @keyframes change {
            0%{background-position: 0 50%}
            50%{background-position: 100% 50%}
            100%{background-position: 0 50%}
        }

    </style>

    <style>

    

        .dots span:nth-child(1)
        {
           transition-delay: 0.05s;
        }
        .dots span:nth-child(2)
        {
           transition-delay: 0.1s;
        }
        .dots span:nth-child(3)
        {
           transition-delay: 0.15s;
        }


        @media (max-width: 1000px) {
          .wrap {
           flex-direction: column;
            width:400px;
          }
        }

    </style>
    
</head>
<body class="bodyanimeted" style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">

    <!-- SECTION 01: header
    ===================================================== -->
    <?php include ('../.globals/header.php'); ?>

    <!-- SECTION 02: menu
    ===================================================== -->
    <div class="container-fluid" style="width: 95%; margin-top:30px;">
        <div class="row" style="margin-left:40px;">
            <div class="col-md-auto">
                <a href="home.php" > <button type="button" class="btn btn-outline-success" style="background-color:black; opacity:0.6; width:100px; height: 50px; color:white; border-radius:1px;"> Home </button> </a>
            </div>
            <div class="col-md-auto">
                <a href="perfil.php">  <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Perfil</button> </a>
            </div>
            <div class="col-md-auto">
                <a href="temporada.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Temporada</button> </a>
            </div>
            <div class="col-md-auto">
                <a href="lancamentos.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Lançamento</button> </a>
            </div>
            <div class="col-md-auto">
                <a href="ranking.php"> <button type="button" class="btn btn-outline-success" style="background-color:#F9F8FD; width:100px; height: 50px;  color:white; border-radius:1px; margin-left:-25px;"><i class="fas fa-align-left" style="color:black; font-size:25px; "></i> </button> </a>
            </div>
        </div>
    </div>
    
    <!-- SECTION 03: body box
    ===================================================== -->
    <section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 0px; border-radius:5px; height: 900px;">

        <!-- #### Row 01: Alert #### -->
        <div class="" style="margin-top:20px; background-color:white; border-radius:3px; height: 67px; width:98%; margin-left:10px;">
            
            <div class="row " style="width: 80%; margin-left: 1%; padding-top:20px;">
                <div class="col-md-auto">
                    <img src="../imagens/alert.png" style="margin-top:px;"/>
                </div>
                <div class="col" style="margin-top:-8px; font-size:13px;">
                    <p> <b>ADMIN</b> Cadastro de <b>Animes</b>. </p>
                    <p style="color:gray;">Visualize sua lista de animes cadastrados na página <a href="home.php" style="color:#716aca;"> <i class="fas fa-arrow-left"></i> Inicial</a> .</p>
                </div>
            </div>
            
        </div>
        
        <!-- #### Row 02: Formulário #### -->
        <div class="" style="background-color:white; width: 98%; margin-top: 20px; margin-left:10px; border-radius:3px;">
            
            <!-- TITLE: cadastro -->
            <div class="row no-gutters">
                <div class="col">
                    <h4 style="margin-left: 50px; padding-top:20px; font-family: 'Poppins', sans-serif;"> <b>ADMIN:</b> Cadastro de Animes</h4>
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
                <form action="../../trunk/control/cadastro-animes-admin/insertAnimesAdmin.php" method="post" autocomplete="on" style="font-family: 'Poppins', sans-serif;">
                    
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-auto">
                            <p>Nome do Anime:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:35%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:0px;">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Abreviação:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="abreviacao" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:23%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:5px;">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Epísodio:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="episodio" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:25%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:5px;">
                        </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Estreia:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="estreia" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:26%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:6px;">
                        </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Sinopse:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="sinopse" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:25%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:5px;">
                        </div>
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Gênero:</p>
                        </div>
                        <div class="col">
                            <select class="form-control" name="id_genero" id="exampleFormControlSelect1" style="width:50%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999;">
                              <option value="0">..::Selecione::..</option>
                              <?php include_once('../../trunk/control/cadastro-animes-admin/selectGenero.php'); ?>  
                                
                            </select>
                        </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Categoria:</p>
                        </div>
                        <div class="col">
                            <select class="form-control" name="id_categoria" id="exampleFormControlSelect1" style="width:50%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999;">
                              <option value="0">..::Selecione::..</option>
                              <?php include_once('../../trunk/control/cadastro-animes-admin/selectCategoria.php'); ?>  
                                
                            </select>
                        </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Temporada:</p>
                        </div>
                        <div class="col">
                            <select class="form-control" name="id_temporada" id="exampleFormControlSelect1" style="width:50%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999;">
                              <option value="0">..::Selecione::..</option>
                              <?php include_once('../../trunk/control/cadastro-animes-admin/selectTemporada.php'); ?>  
                                
                            </select>
                        </div>
                      </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>