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
    
    <style> </style>

</head>
<body>
    
    
    
<!-- SECTION 02: Cards 
    ================================================== -->
    <section>
        <div class="container" style="padding-top:30px;">
            
            <img src="imagens/titulo-black.png" id="site-title" style="margin-left:42%;"/>

                    <hr style="width:50%; background-color:black;"/>
            
            <p style="text-align:center;">Aqui você pode cadastrar Animes das próximas temporadas, como um controle de favoritos de espera dos animes que serão lançados futuramentes.</p>
                
                <p style="text-align:center; color:white;"> <i class="fas fa-radiation-alt"></i> Cadastre animes e suas respectivas datas das próximas temporadas para ter um controle do que os aguarda nas próximas temporadas.</p>
                    
                <!-- Input: Cadastro Anime Assistindo -->
                <div class="" style="color:white; height: 150px; border-radius:20px; opacity:0.9; background-image: linear-gradient(to right, #a900b4 , #522ec0);">
                    <form action="insertproxtemporada.php" method="post" style="padding-top:22px; margin-left:15px;">
                        <div class="row" id="row-input-parados2">
                            <div class="col-2">
                                <label for="inputEmail4">Nome:</label>
                                <input type="text" class="form-control" name="nome" placeholder="Anime Name" required>
                            </div>
                            <div class="col-2">
                                <label for="inputEmail4">Data Estreia:</label>
                                <input type="text" class="form-control" name="estreia" placeholder="Estreia" required>
                            </div>
                            <div class="col-2">
                                <label for="inputEmail4">Temporada:</label>
                                <input type="text" class="form-control" name="temporada" placeholder="Temporada">
                            </div>
                            <div class="col-2">
                                <label for="inputEmail4">Sinopse:</label>
                                <input type="text" class="form-control" name="sinopse" placeholder="Sobre">
                            </div>
                            <div class="col-2">
                                <label for="inputEmail4">Link Trailer:</label>
                                <input type="text" class="form-control" name="trailer" placeholder="Link do Trailer">
                            </div>
                            <div class="col-1">
                                <label for="inputEmail4">Nota:</label>
                                <input type="text" class="form-control" name="nota" placeholder="Nota">
                            </div>
                            <div class="col-1">
                                <label for="inputEmail4">Save</label>
                                <button type="submit" class="btn btn-dark btn-animeproxtemp"> <i class="fas fa-save" id="icon-save-parados"></i></button>
                            </div>
                                <input name="imagem" type="file" style="margin-left:68%; margin-top:10px;"/>
                        </div>
                    </form>
                </div>
            
            <div class="row" style="margin-top:40px; margin-left:-110px;">
                <?php include ('control/selectproxtemporada.php'); ?>
            </div>

            <!-- Next Section: Button -->
            <div class="">
                <button id="button-next"> <i class="fa fa-angle-double-down" id="arrow-next"></i> </button>
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