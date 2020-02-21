<?php

if((!isset ($_SESSION['login']) == true)){
  
  unset($_SESSION['login']);
  unset($_SESSION['nickname']);
  header('location:index.php');

}
 
$nickname = $_SESSION['nickname'];

?>

<style>
    
    @media screen and (min-width:768px) and (max-width:1366px)
    {  
        .resp-icons{ margin-left:40% !important; }
        .resp-align-buttons{ padding-top: 3px !important; }
    }

    .btn-search{
        background-color:#570064;
        color: white;
    }

    .btn-search:hover{
        color: black;
    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: white !important;
        opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: white !important;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: white !important;
    }

</style>

<section style="margin-top:30px;">
    
    <div class="container-fluid" style="width: 95%;">
        <div class="row">
            
            <div class="col-4">
                
              <img src="../imagens/titulo.png"/ style="padding-top:10px;">
              <p style="color:white; padding-top:5px;"> <i class="fas fa-user-tie" style="font-size:15px; color:#80bfff;"></i> Usuário: <?php echo $nickname; ?></p>
                
            </div>
            
            <div class="col-md-auto">
                
                <a href="../.pages/home.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px;"><i class="fas fa-home"></i></div> </a>
                <a href="../.pages/perfil.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px;"><i class="fas fa-user"></i></div> </a>
                <a href="../.pages/AnimeForm.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px;"><i class="fas fa-database"></i></div> </a>
                <a href="../logout.php"> <div class="btn btn-search resp-user-logout" style="margin-top:30px;"><i class="fas fa-sign-out-alt"></i></div> </a>
                
            </div>
            
            <div class="col-md-auto">
                
                <a href="../.pages/form-assistindo.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px;"> <i class="fas fa-pencil-square-o" style="color:#66ff66; padding-left:2px;"></i> </div> </a>
                <a href="../.pages/form-parados.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px; background-color:# !important;"> <i class="fas fa-hourglass-half" style="color:white; padding-left:px; font-size:17px; padding-top:1px;"></i> </div> </a>
                <a href="../.pages/form-ranking.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px;"> <i class="fas fa-pencil-square-o" style="color:#00ffff; padding-left:2px;"></i> </div> </a>
                
            </div>
            
            <!-- Menu Buttons -->
            <div class="col">
                
                <a href="../.pages/table-ranking.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px;"> <i class="fas fa-list-ol" style="color:white; font-size:18px; margin-top:2px;"></i> </div> </a>
                <a href="../.pages/perfil.php"> <div class="btn btn-search resp-user-config" style="margin-top:30px;"> <i class="fas fa-file-contract"></i> </div> </a>
                
            </div>
            
        </div>
    </div>
    
    <!-- div class="container" style="margin-top: 30px;">

        <div class="col-md-12">
            
            <div class="col-md-3">
                <img src="../imagens/titulo.png"/>
            </div>
            
            <div class="col-md-auto resp-icons" style="margin-left:50%; margin-top:10px; float: right;">
                <div class="fvorm-group mx-sm-3 mb-2" style="margin-top:10px;">
                    <form>
                    <span style="float: left;"><input type="text" class="form-control" style="width: 100%; background-color:rgba(255, 255, 255, 0.5); border: 1px solid rgba(115, 24, 107, 0.5); color: white;" id="inputPassword2" placeholder="Procurar"></span>
                    <span style="float: left;"><button class="btn btn-search"><i class="fas fa-search"></i></button></span>
                    </form>
                </div>
            </div>
            
            <div class="col resp-align-buttons" style="margin-top:10px;">
                <div class="row" style="background-color:white; width:100%; border-radius:5px; float: right">
                    <div class="col-md-auto">
                        <div style="float: left;">
                            <img src="../imagens/logo-table.png" style="width:80px; padding:15px; float: left;"/>
                        </div>
                        <div style="float: left;">
                            <h3 style="float: left; margin-left: 10px;">Olá, <?php echo $nickname; ?></h3>

                                <a href="#">
                                <button type="button" class="btn btn-primary r-button" style="color: black;">
                                    <i class="fas fa-cog fa-2x"></i>
                                </button>
                            </a>
                            <a href="../../trunk/logout.php">
                                <button type="button" class="btn btn-primary r-button" style="color: black;">
                                    <i class="fas fa-sign-out-alt fa-2x"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div !-->
</section>