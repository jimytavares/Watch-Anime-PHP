<?php
    session_start();
    require_once('../.globals/verificar_logado.php');

    if((!isset ($_SESSION['login']) == true)){
      unset($_SESSION['login']);
      unset($_SESSION['nickname']);
      header('location:index.php');
    }

    $nickname = $_SESSION['nickname'];
?>

<!DOCTYPE HTML>  
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Meu CSS -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Responsividade -->
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" media="all"/>
    
    <!-- Bootstrap CSS.01 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap CSS.02 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Font Awesome.01 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Font Awesome.02 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Alert JavaScript -->
    <script type="text/javascript" src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Font Family -->
        <!-- Poppins -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
</head>

    <section style="margin-top:30px;">
        <div class="container-fluid" style="width: 95%;">

            <div class="row" style="font-family: 'Poppins', sans-serif;">

                <div class="col-3">

                  <img src="../imagens/titulo.png"/ style="padding-top:10px;">
                  <p style="color:white; padding-top:5px;"> <i class="fas fa-user-tie" style="font-size:15px; color:#80bfff;"></i> Usuário: <?php echo $nickname; ?></p>

                </div>

                <div class="col-md-auto">

                    <a href="../.pages/home.php"> <div class="btn bg-nav" style="margin-top:30px;"><i class="fas fa-home"></i> Home</div> </a>
                    <a href="../.pages/perfil.php"> <div class="btn bg-nav" style="margin-top:30px;"><i class="fas fa-user"></i> Perfil</div> </a>
                        <br/>
                    <a href="../.pages/perfil.php"> <div class="btn bg-nav" style="margin-top:5px;"> <i class="far fa-newspaper" style="font-size:px;"></i> Notícias</div> </a>
                    <a href="../.pages/form-anime.php"> <div class="btn bg-nav" style="margin-top:5px;"><i class="fas fa-database"></i> DB</div> </a>

                </div>

                <div class="col-md-auto">

                    <a href="../.pages/form-assistindo.php"> <div class="btn bg-nav" style="margin-top:30px;"> <i class="fas fa-tv"></i> Assistindo </div> </a>
                    <a href="../.pages/form-parados.php"> <div class="btn bg-nav" style="margin-top:30px; background-color:# !important;"> <i class="fas fa-tv"></i> Parados </div> </a>
                    <a href="../.pages/form-ranking.php"> <div class="btn bg-nav" style="margin-top:30px;"> <i class="fas fa-tv"></i> Ranking </div> </a>
                        <br/>
                    <a href="../.pages/ranking.php"> <div class="btn bg-nav" style="margin-top:5px; margin-left:233px;"> <i class="fas fa-list-ol"></i> Ranking </div> </a>

                </div>

                <div class="col">

                    <a href="../.pages/loja-on.php"> <div class="btn bg-nav" style="margin-top:30px;"> <i class="fas fa-coins"></i> Loja </div> </a>
                    <!--<a href="../.pages/ranking.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px;"> <i class="fas fa-list-ol" style="color:#00ffff; font-size:18px; margin-top:2px;"></i> </div> </a>-->
                    <a href="../.pages/perfil.php"> <div class="btn bg-nav" style="margin-top:30px;"> <i class="fas fa-file-contract"></i> Fale Conosco</div> </a>
                    <a href="../logout.php"> <div class="btn bg-nav" style="margin-top:30px;"><i class="fas fa-sign-out-alt"></i> Sair</div> </a>

                </div>

            </div>

        </div>
    </section>
    <br/>
    
<?php include ('../.globals/action-add.php'); ?>
