<?php include ('../../trunk/.globals/header.php'); ?>

    <style> .container-loja {
      display: flex;
      width: 100%;
      padding: 4% 2%;
      box-sizing: border-box;
      height: 50vh;
    }

    .box-loja {
      flex: 1;
      overflow: hidden;
      transition: .5s;
      margin: 0 2%;
      box-shadow: 0 20px 30px rgba(0,0,0,.1);
      line-height: 0;
    }

    .box-loja > img {
      width: 200%;
      height: calc(100% - 10vh);
      object-fit: cover; 
      transition: .5s;
    }

    .box-loja > span {
      font-size: 3.8vh;
      display: block;
      text-align: center;
      height: 10vh;
      line-height: 2.6;
    }

    .box-loja:hover { flex: 1 1 50%; }
    .box-loja:hover > img {
      width: 100%;
      height: 100%;
    }

    .teste111{
        color:red;
    } </style>

<body style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">
    
    <section class="container-fluid" style="background-color:#eeebf9; width: 95%; margin-top: 5px; height:2500px; border-radius:5px;">
        
        <!-- #### Row(Campo Branco) 01: Alert #### -->
        <div class="" style="margin-top:20px; background-color:white; border-radius:3px; height: 67px; width:98%; margin-left:10px;">
            
            <div class="row " style="width: 80%; margin-left: 1%; padding-top:20px;">
                <div class="col-md-auto">
                    <img src="../imagens/alert.png" style="margin-top:px;"/>
                </div>
                <div class="col" style="margin-top:-8px; font-size:13px;">
                    <p>O objetivo da <b>loja</b> é criar um <b>ambiente</b> do seu jeito! (:</p>
                    <p style="color:gray;">Com isso, vocês ajudam e apoiam nosso trabalho! Obrigado s2. <a href="home.php" style="color:#716aca;"> <i class="fas fa-arrow-left"></i> Inicial</a> .</p>
                </div>
            </div>
            
        </div>
        
        <!-- #### Row(Campo Branco) 02: Loja #### -->
        <div class="" style="background-color:white; width: 98%; margin-top: 20px; margin-left:10px; border-radius:3px;">
            
            <!-- TITLE: Loja -->
            <div class="container-fluid row no-gutters" style="padding-top:10px; text-align:center; font-family: 'Poppins', sans-serif;">
                <div class="col">
                
                </div>
                <div class="col">
                
                </div>
                <div class="col">
                    <h2>LOJA</h2>
                </div>
                <div class="col">
                
                </div>
                <div class="col">
                
                </div>
            </div>
            
                <hr style="border-top: 1px solid #999999; width:98%; opacity:0.4;">
            
            <!-- CAROUSEL: Exemplo de Vendas  -->
            <div class="" style="margin-left:3%; width: 1000px; margin-top:30px;">
                
                <div class="container-loja" style="margin-left:390px !important;">
                  <div class="box-loja">
                    <img src="https://source.unsplash.com/1000x800">
                    <span>Perfil</span>
                  </div>
                  <div class="box-loja">
                    <img src="https://source.unsplash.com/1000x802">
                    <span>Avatar</span>
                  </div>
                  <div class="box-loja">
                    <img src="https://source.unsplash.com/1000x804">
                    <span>Tabelas</span>
                  </div>
                  <div class="box-loja">
                    <img src="https://source.unsplash.com/1000x806">
                    <span>aa</span>
                  </div>
                </div>
                
            </div>
            
                <hr style="border-top: 1px solid #999999; width:98%; opacity:0.4;">
            
            <!-- CARD PRODUTOS: Background Tabelas -->
            <div class="container-fluid" style="width:95%;">
               
                <h2 style="font-family: 'Poppins', sans-serif; text-align:center;">Background das Tabelas</h2> <br/><br/>
               
                <div class="row">
                    <div class="col-4" style="background-image: linear-gradient(to right, #c31432,  #240b36);">
                    </div>
                    <div class="col-4" style="background-image: linear-gradient(to right, #93291E,  #ED213A); margin-left:20px;">
                    </div>
                    <div class="col">
                        <h2>Witching Hour & Blood Sin</h2>
                        <h2>R$ 10,00</h2>
                        <hr style="border-top: 1px solid #999999; width:100%; opacity:0.4;">
                        <p>Promoção de dois planos de fundo para sua página inicial, para os amantes de vermelho.</p>
                        <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
                        <button type="button" class="btn btn-success">Comprar</button>
                    </div>
                </div>
                
                <div class="row" style="margin-top:80px;">
                    <div class="col-4" style="background-image: linear-gradient(to right, #ef32d9,  #89fffd);">
                    </div>
                    <div class="col-4" style="background-image: linear-gradient(to right, #f4c4f3,  #fc67fa); margin-left:20px;">
                    </div>
                    <div class="col">
                        <h2>LoliPop & Black Rose</h2>
                        <h2>R$ 10,00</h2>
                        <hr style="border-top: 1px solid #999999; width:100%; opacity:0.4;">
                        <p>Promoção de dois planos de fundo para sua página inicial, para os amantes de vermelho.</p>
                        <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
                        <button type="button" class="btn btn-success">Comprar</button>
                    </div>
                </div>
                
                <div class="row" style="margin-top:80px;">
                    <div class="col-4" style="background-image: linear-gradient(to right, #141E30,  #243B55);">
                    </div>
                    <div class="col-4" style="background-image: linear-gradient(to right, #232526,  #414345); margin-left:20px;">
                    </div>
                    <div class="col">
                        <h2>Royal & Midnight City</h2>
                        <h2>R$ 10,00</h2>
                        <hr style="border-top: 1px solid #999999; width:100%; opacity:0.4;">
                        <p>Promoção de dois planos de fundo para sua página inicial, para os amantes de vermelho.</p>
                        <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
                        <button type="button" class="btn btn-success">Comprar</button>
                    </div>
                </div>
                
            </div>
            
            
            
            <br/><br/>
            
        </div><!-- end -->
        
    </section>

    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>