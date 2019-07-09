<!DOCTYPE HTML>  
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body style="background-image: url('../imagens/bg-login.jpg'); background-size:cover;">
    
    <section class="lg-index">
        <div class="row">
            
            
            <div class="col">
            </div>

            <div class="col">

                    <div class="box-login" style="background-image: linear-gradient(to right, #f34dff, #a900b4 , #522ec0); width:60%; height: 400px; margin-top: 10%; margin-left:5%; border-radius:7px; opacity:0.9;">
                        <div class="box2-login" style="width:80%; margin-left:9%; padding-top:10%;">
                            
                            <img src="../imagens/titulo.png" style="margin-left:18%;"/>
                            
                            <form action="validacao.php" method="post" autocomplete="off">
                                <fieldset>            
                                  <div class="form-group">
                                    <label for="">Login</label>
                                    <input type="text" name ="usuario" class="form-control" autocomplete="off" style="background-color:transparent; border-radius:10px; border:none;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuário">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="senha" class="form-control" autocomplete="off" style="background-color:transparent; border-radius:10px; border:none;" id="exampleInputPassword1" placeholder="Password">
                                    <small style="color:#bfbfbf;">Prestar atenção no capslock ativo.</small>
                                  </div>

                                  <button type="submit" class="btn btn-primary" style="width:80%; color:black; margin-left: 9%; background-image: linear-gradient(to right, #db5783 , #f7bb97); border-color:transparent;">Logar</button>

                                    <div class="row" style="padding-top:30px; margin-left:5px; color:white;">
                                        <div class="col">
                                            <a data-toggle="modal" data-target="#exampleModal">Registrar!</a>
                                        </div>
                                        <div class="col">
                                            Forgot Password?
                                        </div>
                                    </div>
                                </fieldset>    
                            </form>
                            
                        </div>
                    </div>

            </div>
            
        </div>
        
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-image: url('../imagens/fundo.jpg'); background-size:cover;">
              
                <div class="modal-header">
                    <h5 class="modal-title" style="color:white;">Criando Conta: Anime</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body" style="width:80%;color:white;margin-left:27%;">

                        <form>
                          <div class="form-group">
                            <div class="row">
                              <div class="col">
                                <label for="exampleInputEmail1">Login: </label>
                              </div>
                              <div class="col">
                                <input type="email" class="form-control"  style="margin-left:-80%;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login Do Usuário">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                              <div class="row">
                                  <div class="col">
                                      <label for="exampleInputPassword1">Senha: </label>
                                  </div>
                                  <div class="col">
                                      <input type="password" class="form-control" style="margin-left:-80%;" id="exampleInputPassword1" placeholder="Sua Senha">
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="row">
                                  <div class="col">
                                    <label for="exampleInputEmail1">E-Mail: </label>
                                  </div>
                                  <div class="col">
                                    <input type="email" class="form-control" style="margin-left:-80%;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu E-mail">
                                  </div>
                              </div>
                          </div>
                            <div style="margin-left: 90px;">
                            <input  type="Submit"  class="btn btn-success" value="Enviar" name="btnenviar" >
                            <input type="reset" class="btn btn-light"  value="Limpar" name="btnlimpar">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                            <!--<a href="index.html"><input type="button" name="Voltar" value="Voltar" ></a>-->
                            </div>
                        </form>

                </div>





            </div>
          </div>
        </div>

    </section>
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>