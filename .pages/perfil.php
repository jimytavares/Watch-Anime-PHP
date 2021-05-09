<?php include ('../../trunk/.globals/header.php'); ?>

<body style="background-image: linear-gradient(to right, #6424ea, #9200c5);">

    <section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 5px; height:1000px; border-radius:5px;">
        
        <!-- #### Row GERAL 02: Buttons Sociais #### -->
        <div class="" style="margin-top:10px; background-color:#eeebf9; border-radius:3px; height: 67px; width:98%; margin-left:10px; opacity:;">
            
            <div class="" style="background-color:; width:95%; margin-left:30px;">
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold; padding-top:8px;"> <i class="fab fa-twitch" style="font-size:40px; color:#6424ea;"></i> </button> &nbsp &nbsp
                <img src="../imagens/google-keep.png" style="width:45px; padding-top:6px;"/>
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold; margin-left:15px;"> <i class="fab fa-youtube" style="font-size:50px; color:red;"></i> </button> &nbsp &nbsp
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold; padding-top:10px;"> <i class="fas fa-tv" style="font-size:40px; color:#3e1a61;"></i> </button> &nbsp &nbsp
            </div>
            
        </div>
        
        <!-- #### ROW GERAL 03: Perfil #### -->
        <div class="" style="background-color:white; width: 99%; margin-left:5px; margin-top:10px; border-radius:5px; height:270px;">
            
            <!-- LINHA 01: Usuario, level, etc -->
            <div class="row" style="width:97%; margin-left:20px; padding-top:20px;">
                <div class="col">
                
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="../../trunk/imagens/user.jpg" style="width:100px;"/>
                        </div>
                        <div class="col-md-auto">
                            <!--<h3><i class="fas fa-street-view" style="color:#00b359; margin-right: 10px;"></i><?=$_SESSION['login']?></h3>-->
                            <p style="font-size:17px;"> <i class="fab fa-accusoft" style="color:#e000c7; padding-top:10px;"></i> <b>Animes</b> Assistindo: 0</p>
                        </div>
                        <div class="col-md-auto">
                            <p style="font-size:17px;"> <i class="fas fa-boxes" style="color:#00ace6; padding-top:10px;"></i> <b>Animes</b> Parados: 0</p>
                        </div>
                        <div class="col-md-auto" style="text-align:right;">
                            <p style="font-size:17px;"> <i class="fas fa-list-ol" style="font-size:18px; color:#5cbcb1; padding-top:9px;"></i> <b>Animes</b> Assistidos: 0</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    
                    <div class="row" style="background-color:white; width: 98%; margin-left: 60px; margin-top: 30px;">
                        <div class="col">
                            <i class="fas fa-star" style="color:#5345ba; font-size: 22px;"></i>
                            <b>Conquistas:</b> 281,30
                        </div>
                        <div class="col">
                            <img src="../../trunk/imagens/icon-doc.png" />
                            <b>Anotações:</b> 15
                        </div>
                    </div>
                    
                    <div class="row" style="margin-left:60px; margin-top:10px;">
                        <div class="col">
                            <i class="fas fa-coins" style="color:#5345ba; font-size: 22px;"></i>&nbsp
                            <b>R$:</b> 1000,00
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
            <div class="" style="margin-top:10px; text-align:center;">
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="far fa-newspaper" style="color:#00ace6; font-size: 20px;"></i> Noticias</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-sync-alt" style="color:#5cbcb1; font-size: 20px;"></i> Animes Parados</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-chart-bar" style="color:#ff8000; font-size: 20px;"></i> Meu Ranking Animes</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-chart-area" style="color:#e3356f; font-size: 20px;"></i> Perfil Ranking</button> &nbsp &nbsp
                    <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-users" style="color:#003366; font-size: 20px;"></i> Amigos</button> &nbsp &nbsp
            </div>
            
            <!-- LINHA 04: Botões de ação usuário -->
            <div class="" style="margin-top:10px; text-align:center;">
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-user-circle" style="color:#e000c7; font-size: 20px;"></i> Trocar Nick</button> &nbsp &nbsp
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-key" style="color:#db8780; font-size: 20px;"></i> Trocar Senha</button> &nbsp &nbsp
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-at" style="color:#00ace6; font-size: 20px;"></i> Trocar E-Mail</button> &nbsp &nbsp
                <button type="button" class="btn btn-outline-primary btn-sm" style="color:black; font-weight: bold;"> <i class="fas fa-cog" style="color:#3e1a61; font-size: 20px;"></i> Configurações</button> &nbsp &nbsp
            </div>
            
        </div>
        
        <!-- #### ROW GERAL 02: Animes #### -->
        <div class="row" style="width:99%; margin-left:4px; margin-top:15px; height: 230px;">
            
            <div class="col" style="background-color:white; border-radius:3px;">
                <p style="font-family: 'Slackey', cursive; font-size:30px; margin-top:20px;">Trilhando pelo Rio Grande do Norte.</p>
                <hr style="border-color: #002b8c; border-width: 1px; width:;">
            </div>
            
            <!-- League of Legends -->
            <div class="col" style="background-color:white; margin-left:10px; border-radius:3px; font-family: 'Poppins', sans-serif;">
                
                <h4>League of Legends</h4>
                <hr style="width:100%;">
                
                <div class="row" style="color:gray;">
                    <div class="col-md-auto">
                        <img src="../imagens/icon-circle-lol/c1.jpg" style="width:px;"/>
                    </div>
                    <div class="col-md-auto" style="color:black;">
                        LCK -
                    </div>
                    <div class="col">
                        teastandooooooooooooo
                    </div>
                </div>
                
                <div class="row" style="color:gray; margin-top:10px;">
                    <div class="col-md-auto">
                        <img src="../imagens/icon-circle-lol/c2.jpg" style="width:px;"/>
                    </div>
                    <div class="col-md-auto" style="color:black;">
                        CBLOL -
                    </div>
                    <div class="col">
                        teastandooooooooooooo
                    </div>
                </div>
                
                <div class="row" style="color:gray; margin-top:10px;">
                    <div class="col-md-auto">
                        <img src="../imagens/icon-circle-lol/c3.jpg" style="width:px;"/>
                    </div>
                    <div class="col-md-auto" style="color:black;">
                        LCS -
                    </div>
                    <div class="col">
                        teastandooooooooooooo
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