<?php include ('../../trunk/.globals/header.php'); ?>

<body style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">

    <section class="container-fluid" style="background-color:#eeebf9; width: 95%; margin-top: 5px; height:700px; border-radius:5px;">
        
        <!-- #### Row 01: Alert Explicação #### -->
        <div class="" style="margin-top:20px; background-color:white; border-radius:3px; height: 67px; width:98%; margin-left:10px;">
            
            <div class="row " style="width: 80%; margin-left: 1%; padding-top:20px;">
                <div class="col-md-auto">
                    <img src="../imagens/alert.png" style="margin-top:px;"/>
                </div>
                <div class="col" style="margin-top:-8px; font-size:13px;">
                    <p>Cadastre os <b>Animes</b> que você está <b>assistindo</b> no momento. </p>
                    <p style="color:gray;">Visualize sua lista de animes cadastrados na página <a href="home.php" style="color:#716aca;"> <i class="fas fa-arrow-left"></i> Inicial</a> .</p>
                </div>
            </div>
            
        </div>
        
        <!-- #### Row 02: FORM #### -->
        <div class="" style="background-color:white; width: 98%; margin-top: 20px; margin-left:10px; border-radius:3px;">
            
            <!-- TITLE: cadastro -->
            <div class="row no-gutters">
                <div class="col">
                    <h4 style="margin-left: 50px; padding-top:20px; font-family: 'Poppins', sans-serif;">Cadastrar Animes: Assistindo /User: <?php echo $_SESSION['id'] ?></h4>
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
                
                <form action="../../trunk/control/insertassistindo.php" method="post" autocomplete="on" style="font-family: 'Poppins', sans-serif;">
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Nome Anime:</p>
                        </div>
                        <div class="col">
                            <select class="form-control" name="id_anime" id="exampleFormControlSelect1" style="width:50%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999;">
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
                            <input type="text" name="episodio" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:22%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:30px;">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Dia da Semana:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="dia_semana" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:24%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:-18px;">
                        </div>
                      </div>
                  </div>
                  <!--<div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p>Data:</p>
                        </div>
                        <div class="col">
                            <input type="text" name="dtdia" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:23%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:55px;">
                        </div>
                      </div>
                  </div>-->
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p><b>Link</b> (Assistir):</p>
                        </div>
                        <div class="col">
                            <input type="text" name="link" class="form-control" id="exampleFormControlInput1" placeholder="link anime" style="width:65%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:px;">
                        </div>
                      </div>
                  </div>
                    
                 <button class="btn btn-success" style="background-color:#716aca; border:none;">Limpar</button>
                 <button type="submit" class="btn btn-success" id="" style="border:none;">Adicionar</button>
                </form>
                
            </div>
            
            <br/><br/>
            
        </div>
        
    </section>
    
    <?php include ('../.globals/action-add.php'); ?>

   
   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>