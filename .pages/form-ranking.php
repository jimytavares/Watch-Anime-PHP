<?php include ('../../trunk/.globals/header.php'); ?>

<body style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">


    <section class="container-fluid" style="background-color:#eeebf9; width: 95%; margin-top: 5px; height:700px; border-radius:5px;">
        
        <!-- #### Row 01: Alert #### -->
        <div class="" style="margin-top:20px; background-color:white; border-radius:3px; height: 67px; width:98%; margin-left:10px;">
            
            <div class="row " style="width: 80%; margin-left: 1%; padding-top:20px;">
                <div class="col-md-auto">
                    <img src="../imagens/alert.png" style="margin-top:px;"/>
                </div>
                <div class="col" style="margin-top:-8px; font-size:13px;">
                    <p>Página com todos os <b>Animes</b> que você já <b>assistiu</b>. </p>
                    <p style="color:gray;">Ranking dos animes que você já assistiu <a href="home.php" style="color:#716aca;"> <i class="fas fa-arrow-left"></i> Inicial</a> .</p>
                </div>
            </div>
            
        </div>
        
        <!-- #### Row 02: Formulário #### -->
        <div class="" style="background-color:white; width: 98%; margin-top: 20px; margin-left:10px; border-radius:3px;">
            
            <!-- TITLE: cadastro -->
            <div class="row no-gutters">
                <div class="col">
                    <h4 style="padding-top:20px; font-family: 'Poppins', sans-serif; margin-left:45px;"> 
                        <i class="fas fa-angle-double-right" style="font-size:20px;"></i> <b>Ranking:</b> Registrar Animes
                    </h4>
                </div>
                <div class="col-md-auto">
                </div>
                <div class="col-md-auto">
                </div>
                <div class="col">
                </div>
            </div>
            <hr style="border-top: 1px solid #999999; width:98%; opacity:0.4;">
            
            <!-- BOX: form -->
            <div class="" style="margin-left:3%; width: 1000px; margin-top:30px; border: ;">
                <form action="../../trunk/control/insertRanking.php" method="post" autocomplete="on" style="font-family: 'Poppins', sans-serif;">
                  
                 <div class="form-group">
                      <div class="row">
                        <div class="col-md-auto">
                            <p><b>Nome Anime:</b></p>
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
                            <p><b>Nota:</b></p>
                        </div>
                        <div class="col">
                            <select class="form-control" name="id_nota" id="exampleFormControlSelect1" style="width:10%; background-color:transparent; color:#595959; border-radius:3px; border: 1px solid #999999; margin-left:55px;">
                                
                              <option value="0">.:Nota:.</option>
                              <?php include_once('../../trunk/control/selectNotaRanking.php'); ?>  
                                
                            </select>
                        </div>
                      </div>
                  </div>
                    
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-auto">
                            <p><b>Comentário:</b></p>
                        </div>
                        <div class="col">
                            <input type="text" name="comentario" class="form-control" id="exampleFormControlInput1" placeholder="data que saiu o anime" style="width:50%; background-color:transparent; color:red; border-radius:3px; border: 1px solid #999999; margin-left:5px;">
                        </div>
                      </div>
                  </div> 
                    
                    
                  <!--<div class="form-group">
                    <p>OBS:</p>
                    <textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="3" style="width:83%; background-color:transparent; color:red; border-radius:3px; border: 1px solid gray;"></textarea>
                  </div>-->
                   
                    <button class="btn btn-success" style="background-color:#716aca; border:none;">Limpar</button>
                    <button type="submit" class="btn btn-success" style="border:none;">Cadastrar</button>
                </form>
                
            </div>
            .<?php echo $_SESSION['id'] ?>
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