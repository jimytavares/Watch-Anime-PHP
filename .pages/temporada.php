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
    <link href="../css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

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

</head>
<body class="bodyanimeted" style="overflow-x: hidden; background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">

<?php include ('../.globals/header.php'); ?>

<sectcion>
    <div class="container-fluid" style="width: 95%; margin-top:30px;">

        <div class="row" style="margin-left:40px;">
            <div class="col-md-auto">
                <a href="home.php" > <button type="button" class="btn btn-outline-success" style="background-color:black; opacity:0.6; width:100px; height: 50px; color:white; border-radius:1px;"> Home </button> </a>
            </div>
            <div class="col-md-auto">
                <a href="perfil.php">  <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Perfil</button> </a>
            </div>
            <div class="col-md-auto">
                <a href="temporada.php"> <button type="button" class="btn btn-outline-success" style="background-color:#F9F8FD; width:100px; height: 50px;  color:white; border-radius:1px; margin-left:-25px;"> <i class="fas fa-tree" style="color:black; font-size:25px; "></i> </button> </a>
            </div>
            <div class="col-md-auto">
                <a href="lancamentos.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Lançamento</button> </a>
            </div>
            <div class="col-md-auto">
                <a href="ranking.php"> <button type="button" class="btn btn-outline-success" style="background-color:black; width:100px; height: 50px; opacity:0.6; color:white; border-radius:1px; margin-left:-25px;">Ranking</button> </a>
            </div>
        </div>

    </div>
</sectcion>


<section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 0px; border-radius:5px;">

    <div class="" style="">
        <h2 style="text-align:center;">Temporada</h2>
    </div>

    <!-- Cards: Winter, Spring, Summer, Fall -->
    <div class="row">

        <div class="col">
            <a target="_blank" href="https://www.behance.net/doonnnx">
                <div class="thecard">

                    <div class="card-img">
                        <img src="../imagens/seaseon/winter-anime.png">
                    </div>

                    <div class="card-caption">
                        <i class="far fa-snowflake" style="font-size:30px; color:#5500ff;"></i>
                        <span class="date">Janeiro, Julho 16, 2019</span>
                        <h1>Janeiro/Winter/Inverno</h1>
                        <p>Um guia com os novos episódio da temporada de Janeiro / Winter.</p>
                    </div>

                    <div class="card-outmore">
                        <h5>Vê Animes</h5>
                        <i id="outmore-icon" class="fa fa-angle-right"></i>
                    </div>

                </div>
            </a>
        </div>

        <div class="col">
            <a target="_blank" href="https://www.behance.net/doonnnx">
                <div class="thecard">

                    <div class="card-img">
                        <img src="../imagens/seaseon/spring-anime.jpg">
                    </div>

                    <div class="card-caption">
                        <i class="fab fa-pagelines" style="font-size:23px; color:pink;"></i>
                        <span class="date">Thursday, July 16, 2015</span>
                        <h1>Abril/Spring/Primavera</h1>
                        <p>Um guia com os novos episódio da temporada de Abril / Primavera.</p>
                    </div>

                    <div class="card-outmore">
                        <h5>Vê Animes</h5>
                        <i id="outmore-icon" class="fa fa-angle-right"></i>
                    </div>

                </div>
            </a>
        </div>

        <div class="col">
            <a target="_blank" href="https://www.behance.net/doonnnx">
                <div class="thecard">

                    <div class="card-img">
                        <img src="../imagens/seaseon/summer-%20anime.jpg">
                    </div>

                    <div class="card-caption">
                        <i class="fas fa-umbrella-beach" style="font-size:25px; color:#0099ff;"></i>
                        <span class="date">Thursday, July 16, 2015</span>
                        <h1>Julho/Summer/Verão</h1>
                        <p>Um guia com os novos episódio da temporada de Julho / Verão.</p>
                    </div>

                    <div class="card-outmore">
                        <h5>Vê Animes</h5>
                        <i id="outmore-icon" class="fa fa-angle-right"></i>
                    </div>

                </div>
            </a>
        </div>

        <div class="col">
            <a target="_blank" href="https://www.behance.net/doonnnx">
                <div class="thecard">

                    <div class="card-img">
                        <img src="../imagens/seaseon/fall-anime.jpg">
                    </div>

                    <div class="card-caption">
                        <i class="fas fa-apple-alt" style="font-size:25px; color:#e62e00;"></i>
                        <span class="date">Thursday, July 16, 2015</span>
                        <h1>Outubro/Fall/Outono</h1>
                        <p>Um guia com os novos episódio da temporada de Outubro / Fall.</p>
                    </div>

                    <div class="card-outmore">
                        <h5>Vê Animes</h5>
                        <i id="outmore-icon" class="fa fa-angle-right"></i>
                    </div>

                </div>
            </a>
        </div>

    </div>

    <!-- Container: Animes de Temporadas passadas -->
    <div class="container" style="margin-top: 100px;">
        <div class="" style="background-color:#efefef; width:1140px; margin-left:-15px; border-radius:2px; height:40px;">
            <h3 style="text-align:center;">Lista de Animes das Temporada passada</h3>
        </div>
        <div class="row" style="color:black; background-color:white; margin-top:-px;border-radius:2px;">
            <div class="col">
                <p> <i class="far fa-snowflake" style="font-size:30px; color:#5500ff;"></i> Janeiro / Winter / Inverno 2018 </p>
                <p> <i class="far fa-snowflake" style="font-size:30px; color:#5500ff;"></i> Janeiro / Winter / Inverno 2017 </p>
                <p> <i class="far fa-snowflake" style="font-size:30px; color:#5500ff;"></i> Janeiro / Winter / Inverno 2016 </p>
                <p> <i class="far fa-snowflake" style="font-size:30px; color:#5500ff;"></i> Janeiro / Winter / Inverno 2018 </p>
            </div>
            <div class="col">
                <p> <i class="fab fa-pagelines" style="font-size:30px; color:pink;"></i> Abril / Spring / Primavera 2018 </p>
                <p> <i class="fab fa-pagelines" style="font-size:30px; color:pink;"></i> Abril / Spring / Primavera 2017 </p>
                <p> <i class="fab fa-pagelines" style="font-size:30px; color:pink;"></i> Abril / Spring / Primavera 2016 </p>
                <p> <i class="fab fa-pagelines" style="font-size:30px; color:pink;"></i> Abril / Spring / Primavera 2015 </p>
            </div>
            <div class="col">
                <p> <i class="fas fa-umbrella-beach" style="font-size:30px; color:#0099ff;"></i> Julho / Summer / Verão 20 </p>
                <p> <i class="fas fa-umbrella-beach" style="font-size:30px; color:#0099ff;"></i> Julho / Summer / Verão 2017 </p>
                <p> <i class="fas fa-umbrella-beach" style="font-size:30px; color:#0099ff;"></i> Julho / Summer / Verão 2016 </p>
                <p> <i class="fas fa-umbrella-beach" style="font-size:30px; color:#0099ff;"></i> Julho / Summer / Verão 2015 </p>
            </div>
            <div class="col">
                <p> <i class="fas fa-apple-alt" style="font-size:30px; color:#e62e00;"></i> Outubro / Fall / Outono 2018 </p>
                <p> <i class="fas fa-apple-alt" style="font-size:30px; color:#e62e00;"></i> Outubro / Fall / Outono 2017 </p>
                <p> <i class="fas fa-apple-alt" style="font-size:30px; color:#e62e00;"></i> Outubro / Fall / Outono 2016 </p>
                <p> <i class="fas fa-apple-alt" style="font-size:30px; color:#e62e00;"></i> Outubro / Fall / Outono 2015 </p>
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