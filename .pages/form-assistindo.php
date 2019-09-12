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
    </sectcion>

    <!-- SECTION ALL BODY
    ===================================================== -->
    <section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 0px; height:1000px; border-radius:5px;">
        
        <div class="" style="margin-top:20px; background-color:white;border-radius:3px; height: 80px; width:98%; margin-left:10px;">
            
            <div class="row" style="width: 80%; margin-left: 5%; padding-top:20px;">
                <div class="col-md-auto">
                    <img src="../imagens/icon-msg.png" style="width:45px;"/>
                </div>
                <div class="col">
                    asdasdasd
                </div>
            </div>
            
        </div>
        
        <div class="row" style="background-color:white; width: 98%; margin-top: 20px; margin-left:10px; border-radius:3px;">
            
            
                <h3>Cadastro de Animes</h3>
                <hr style="height:10px;color:red;">
            
            <!-- BOX: form -->
            <div class="" style="background-color:; margin-left:17%; width: 1000px; margin-top:30px; border: ;">
                
                <form method="post" action="">
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <label for="exampleFormControlInput1" style="color:red;">*</label>
                            <label for="exampleFormControlInput1">Nome Anime:</label>
                        </div>
                        <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1" style="width:80%; background-color:transparent; color:red; border-radius:3px; border: 1px solid gray;">
                              <option value="0">..::Selecione Anime::..</option>
                              <?php include_once('../../trunk/control/selectTeste.php'); ?>  
                                
                            </select>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <label for="exampleFormControlInput1">Abreviação:</label>
                        </div>
                          <div class="col">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="escolha uma abreviação pro seu anime" style="width:79%; background-color:transparent; color:red; border-radius:3px; border: 1px solid gray; margin-left: 18px;">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <label for="exampleFormControlInput1" style="color:red;">*</label>
                            <label for="exampleFormControlInput1">Data Estreia:</label>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:80%; background-color:transparent; color:red; border-radius:3px; border: 1px solid gray; margin-left:2px;">
                        </div>
                      </div>
                  </div>  
                  <div class="form-group">
                      <label for="exampleFormControlInput1" style="color:red;">*</label>
                    <label for="exampleFormControlSelect2">Episódio</label>
                    <label for="exampleFormControlSelect2" style="color:#bfbfbf;">(selecione)</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2" style="width:83%; background-color:transparent; color:red; border-radius:3px; border: 1px solid gray;">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">OBS:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:83%; background-color:transparent; color:red; border-radius:3px; border: 1px solid gray;"></textarea>
                  </div>
                    <button class="btn btn-success">Cadastrar</button>
                </form>
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