<?php

if((!isset ($_SESSION['login']) == true)){
  
  unset($_SESSION['login']);
  unset($_SESSION['nickname']);
  header('location:index.php');

}
 
$nickname = $_SESSION['nickname'];

?>

<style>
    .r-button{ background-color: transparent; border-color:white; margin: 5px; color: white; padding: 5px; height: 40px; width: 40px; border-radius: 20px; }
    .r-button:hover{ background-color:#ff1a8c; border-color: transparent; }
    
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

<section>
    
    <div class="container-fluid" style="width: 95%; margin-top: 0px; border-radius:5px;">
        <div class="row" style="margin-top: 30px">
            
            <div class="col-lg-3">
              <img src="../imagens/titulo.png"/>
            </div>
            
            <div class="col-lg-6">
                
                <form style="padding-top:25px;">
                    <div class="input-group" style="width: 90%;">
                        
                        <input type="text" class="form-control" style="background-color:rgba(255, 255, 255, 0.5); border: 1px solid rgba(115, 24, 107, 0.5); color: white;" placeholder="Pesquisar">
                        
                        <div class="input-group-append">
                            <button class="btn btn-search" type="button">
                            <i class="fa fa-search"></i>
                            </button>
                        </div>
                        
                    </div>
                </form>
                
            </div>
            
            <div class="col-lg-3" style="background-color:#eeebf9; border-radius: 5px; height: 80px; line-height: 80px;">
                    <div class="col-lg-2">
                        <img src="../imagens/logo-table.png" style="width:80px; padding:10px; float: left; margin-left:-10px;"/>
                    </div>
                    <div class="col-lg-6" style="padding-left:40px; font-size:17px; padding-top:2px;">
                        Olá, <?php echo $nickname; ?>
                    </div>
                    <div class="col-lg-4">
                        <a href="../.pages/perfil.php"> <div class="btn btn-search"><i class="fas fa-cog"></i></div> </a>
                        <a href="../logout.php"> <div class="btn btn-search"><i class="fas fa-sign-out-alt"></i></div> </a>
                    </div>
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