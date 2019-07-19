<?php
session_start();

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
</style>

<section>
    <div class="container-fluid" style="width: 95%; margin-top: 30px;">

        <div class="row">
            
            <div class="col-md-auto">
                <img src="../../trunk/imagens/titulo.png" />
            </div>
            
            <div class="col-md-auto resp-icons" style="margin-left:50%; margin-top:10px;">
                <div class="fvorm-group mx-sm-3 mb-2" style="margin-top:10px;">
                    <input type="password" class="form-control" style="background-color:transparent;" id="inputPassword2" placeholder="Procurar">
                </div>
            </div>
            
            <div class="col resp-align-buttons" style="margin-top:10px;">
                <button type="button" class="btn btn-primary r-button">a</button>
                <button type="button" class="btn btn-primary r-button">a</button>
                <button type="button" class="btn btn-primary r-button">a</button>
                <a href="../../trunk/logout.php"> <button type="button" class="btn btn-primary r-button"> <i class="fas fa-sign-out-alt" style="font-size:24px; margin-left:3px; margin-top:2px;"></i> </button> </a>
            </div>
            
        </div>

    </div>
</section>
