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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Meu CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css" media="all"/>
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
    <section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 0px; border-radius:5px; height: 800px;">

        <!-- #### Row 01: Alert #### -->
        <div class="" style="margin-top:20px; background-color:white; border-radius:3px; height: 67px; width:98%; margin-left:10px;">
            
            <div class="row " style="width: 80%; margin-left: 1%; padding-top:20px;">
                <div class="col-md-auto">
                    <img src="../imagens/alert.png" style="margin-top:px;"/>
                </div>
                <div class="col" style="margin-top:-8px; font-size:13px;">
                    <p>Ranking de <b>Animes</b> que você assistiu durante toda sua jornada.</p>
                    <p style="color:gray;">Os animes cadastrados são rankeados pelas notas que você os deu. Para cadastrar mais animes no ranking <a href="home.php" style="color:#716aca;"> <i class="fas fa-arrow-right"></i> Clique Aqui</a> .</p>
                </div>
            </div>
            
            <div class="" style="background-color:white; border-radius:5px; margin-top: 20px;">
            
                <div class="row">
                    <div class="col-md-auto">
                        <i class="fas fa-sort-numeric-up" style="font-size:26px; margin-top:20px; margin-left:40px; color:#1cbfae;"></i>
                    </div>
                    <div class="col">
                        <h4 style=" margin-top:24px; font-family: 'Poppins', sans-serif;">Anime <b style="color:#716aca;">Ranking</b></h4> 
                    </div>
                </div>
                
                <hr style="border-top: 1px solid #999999; width:98%; opacity:0.4; margin-top:-1px;">
            
                <div class="" style="width:98%; margin-left:10px;">
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
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