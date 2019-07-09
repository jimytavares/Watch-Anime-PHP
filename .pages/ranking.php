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
    <link href="../css/main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <style>
    
        .wrap
        {
          margin:50px auto 0 auto;
          width:100%;
          display:flex;
          align-items:space-around;
          max-width:1200px;
        }
        .tile
        {
          width:380px;
          height:380px;
          margin:10px;
            border-radius: 8px;
          background-color:#99aeff;
          display:inline-block;
          background-size:cover;
          position:relative;
          cursor:pointer;
          transition: all 0.4s ease-out;
          box-shadow: 0px 35px 77px -17px rgba(0,0,0,0.44);
          overflow:hidden;
          color:white;
          font-family:'Arial';

        }
        .tile img
        {
          height:100%;
          width:100%;
          position:absolute;
          top:0;
          left:0;
          z-index:0;
          transition: all 0.4s ease-out;
        }
        .tile .text
        {
        /*   z-index:99; */
          position:absolute;
          padding:30px;
          height:calc(100% - 60px);
        text-align: center;
            
        }
        .tile h1
        {
            color:black;
          font-weight:300;
          margin:0;
          text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            border-radius:5px;
        }
        .tile h2
        {
          font-weight:100;
          margin:20px 0 0 0;
          font-style:italic;
           transform: translateX(200px);
        }
        .tile p
        {
          font-weight:300;
          margin:20px 0 0 0;
          line-height: 25px;
        /*   opacity:0; */
          transform: translateX(-200px);
          transition-delay: 0.2s;
        }
        .animate-text
        {
          opacity:0;
          transition: all 0.6s ease-in-out;
        }
        .tile:hover
        {
        /*   background-color:#99aeff; */
        box-shadow: 0px 35px 77px -17px rgba(0,0,0,0.64);
          transform:scale(1.05);
        }
        .tile:hover img
        {
          opacity: 0.2;
        }
        .tile:hover .animate-text
        {
          transform:translateX(0);
          opacity:1;
        }
        .dots
        {
          position:absolute;
          bottom:20px;
          right:30px;
          margin: 0 auto;
          width:30px;
          height:30px;
          color:currentColor;
          display:flex;
          flex-direction:column;
          align-items:center;
          justify-content:space-around;

        }

        .dots span
        {
            width: 5px;
            height:5px;
            background-color: currentColor;
            border-radius: 50%;
            display:block;
          opacity:0;
          transition: transform 0.4s ease-out, opacity 0.5s ease;
          transform: translateY(30px);

        }

        .tile:hover span
        {
          opacity:1;
          transform:translateY(0px);
        }

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
<body style="background-image: url('../imagens/img245.jpg'); background-size:cover;">
    
    <section>
      
        <?php include ('../.globals/header.php'); ?>
        <div class="container" style="margin-left:150px;">
                
            <div style="margin-top: 50px; color:white; background-image: linear-gradient(to right, #00a0ff ,#0080ff, #6d58f0, #a000c4); border-color: red; height:50px; width:90%; border-radius:5px; box-shadow: 1px 3px 10px #000000; text-align:center;">
                <div class="row" style="padding-top:15px;">
                    <div class="col">
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="collapse" href="#collapseCards" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fas fa-th-large mt-0" style="font-size:18px; color:white"></i>
                        </button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                            <i class="fas fa-columns mt-0" style="font-size:20px; color:white"></i>
                        </button>
                    </div>
                    <div class="col">
                        <b style="color:white; font-size:17px;">Anime Ranking</b>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                            <i class="fas fa-pencil-alt mt-0" style="font-size:18px; color:white"></i>
                        </button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                            <i class="far fa-trash-alt mt-0" style="font-size:18px; color:white"></i>
                        </button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#ModalInfo">
                            <i class="fas fa-info-circle mt-0" style="font-size:20px; color:white"></i>
                        </button>
                    </div>
                </div>
            </div>

            
            <!-- CARDS: Ranking -->
            <div class="wrap" style="margin-left:-60px;" id="collapseCards">
                
                 <div class="tile"> 
                      <img src='../imagens/ranking/ranking-1.gif'/>
                      <div class="text">
                          <h1></h1>
                          <h2 class="animate-text">Animes Ranking Nota 10</h2>
                          <p class="animate-text">Clique aqui para listar todos os animes do seu perfil de nota 10.</p>
                       
                          <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                          </div>
                      </div>
                 </div>


                <div class="tile"> 
                    <img src='../imagens/ranking/ranking-4.gif'/>
                      <div class="text">
                          <h1></h1>
                          <h2 class="animate-text">Animes Ranking Nota 8~6</h2>
                          <p class="animate-text">Clique aqui para listar todos os animes do seu perfil de nota 8~6.</p>
                       
                          <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                          </div>
                      </div>
                 </div>

                  <div class="tile"> 
                      <img src='../imagens/ranking/ranking-6.gif' style="opacity:;"/>
                      <div class="text">
                          <h1></h1>
                          <h2 class="animate-text">Animes Ranking Nota 5~1</h2>
                          <p class="animate-text">Clique aqui para listar todos os animes do seu perfil de nota 5~1.</p>
                        
                          <div class="dots">
                            <span></span>
                            <span></span>
                            <span></span>
                          </div>
                      </div>
                 </div>
            </div>
        
            <!-- TABLE: Ranking -->
            <div class="card card-cascade narrower" style="margin-left: -50px; width:100%; margin-top:20px;">

              <div class="px-4">

                <div class="table-wrapper">
                  <table class="table table-hover mb-0">

                    <!--Table head-->
                    <thead>
                      <tr>
                        <th>
                          <input class="form-check-input" type="checkbox" id="checkbox">
                          <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                        </th>
                        <th class="th-lg">
                          <a>First Name
                            <i class="fas fa-sort ml-1"></i>
                          </a>
                        </th>
                        <th class="th-lg">
                          <a href="">Last Name
                            <i class="fas fa-sort ml-1"></i>
                          </a>
                        </th>
                        <th class="th-lg">
                          <a href="">Username
                            <i class="fas fa-sort ml-1"></i>
                          </a>
                        </th>
                        <th class="th-lg">
                          <a href="">Username
                            <i class="fas fa-sort ml-1"></i>
                          </a>
                        </th>
                        <th class="th-lg">
                          <a href="">Username
                            <i class="fas fa-sort ml-1"></i>
                          </a>
                        </th>
                        <th class="th-lg">
                          <a href="">Username
                            <i class="fas fa-sort ml-1"></i>
                          </a>
                        </th>
                      </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody>
                      <tr>
                        <th scope="row">
                          <input class="form-check-input" type="checkbox" id="checkbox1">
                          <label class="form-check-label" for="checkbox1" class="label-table"></label>
                        </th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <input class="form-check-input" type="checkbox" id="checkbox2">
                          <label class="form-check-label" for="checkbox2" class="label-table"></label>
                        </th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <input class="form-check-input" type="checkbox" id="checkbox3">
                          <label class="form-check-label" for="checkbox3" class="label-table"></label>
                        </th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <input class="form-check-input" type="checkbox" id="checkbox4">
                          <label class="form-check-label" for="checkbox4" class="label-table"></label>
                        </th>
                        <td>Paul</td>
                        <td>Topolski</td>
                        <td>@P_Topolski</td>
                        <td>Paul</td>
                        <td>Topolski</td>
                        <td>@P_Topolski</td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <input class="form-check-input" type="checkbox" id="checkbox5">
                          <label class="form-check-label" for="checkbox5" class="label-table"></label>
                        </th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                    <!--Table body-->
                  </table>
                  <!--Table-->
                </div>

              </div>

            </div>
            
    
        </div>
        
            <?php include ('../.globals/footer.php'); ?>
            
            
        
            <!-- MODAL: Info -->
            <div class="modal fade" id="ModalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-info" style="color:red; font-size:25px;"></i> Informações: Página de Ranking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
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