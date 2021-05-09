<?php 
    include ('../.globals/header.php'); 
?>
   
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

<body class="bodyanimeted">

    <section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 5px; border-radius:5px; height: 900px;">
        
        <!-- #### Row 01: Formulário #### -->
        <div class="" style="background-color:white; width: 98%; margin-top: 20px; margin-left:10px; border-radius:3px;">
            
            <!-- TITLE: cadastro -->
            <div class="row no-gutters">
                <div class="col">
                    <h5 style="margin-left: 50px; padding-top:20px; font-family: 'Poppins', sans-serif;"> <b>ADMIN:</b> Cadastrar novo Anime</h5>
                </div>
                <div class="col-md-auto">
                    <i class="fas fa-angle-double-right" style="font-size:25px; margin-top:22px;"></i>
                </div>
                <div class="col-md-auto">
                    <h5 style="margin-left:5px; padding-top:21px; font-family: 'Poppins', sans-serif;">Cadastrar Assistindo</h5>
                </div>
                <div class="col">
                    <a href="form-assistindo.php"> <button type="button" class="btn btn-primary btn-sm" style="margin-top:20px; margin-left:18px; background-color:#716aca; border:none;">Clique Aqui</button> </a>
                </div>
            </div>
            
            <hr style="border-top: 1px solid black; width:98%; opacity:0.4;">
            
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
                            <input type="text" name="abreviacao" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:28%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:28px;">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Epísodio:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="episodio" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:28%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:48px;">
                        </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Estreia:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="estreia" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:28%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:57px;">
                        </div>
                      </div>
                  </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Sinopse:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="sinopse" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:29%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:48px;">
                        </div>
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Gênero:</p>
                        </div>
                        <div class="col">
                            <select class="form-control" name="id_genero" id="exampleFormControlSelect1" style="margin-left:50px; width:49%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999;">
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
                            <select class="form-control" name="id_categoria" id="exampleFormControlSelect1" style="width:50%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999; margin-left:33px;">
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
                            <select class="form-control" name="id_temporada" id="exampleFormControlSelect1" style="margin-left:22px; width:51%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999;">
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
        
        <!-- #### Row 02: Alert #### -->
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
        
    </section>

   
   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>