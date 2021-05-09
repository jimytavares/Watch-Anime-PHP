<?php include_once ('../.globals/header.php'); ?>
   
    <style>.bodyanimeted{
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #FC5C7D,  #6A82FB);
            background-size: 400% 400%;
            position: relative;
            animation: change 10s ease-in-out infinite;
        }

        @keyframes change {
            0%{background-position: 0 50%}
            50%{background-position: 100% 50%}
            100%{background-position: 0 50%}
        }</style>

<body class="bodyanimeted resp-bodyAll" style="background-image: linear-gradient(to right, #FC5C7D,  #6A82FB);">

    <section class="container-fluid resp-body" style="background-color:#eeebf9; width: 95%; border-radius:5px;">
            
        <!-- ##### ROW 01: Assistindo #### -->
        <div class="container-fluid" style="padding-top: 20px; width:100%;">

            <div class="container" style="width:100%; color:white; background-image: linear-gradient(to right, #3FC9FE ,#3A7EC7, #2F449C); border-radius:10px; box-shadow: 1px 3px 10px #000000; text-align:center;">

                <div class="row" style="padding-top:15px;">
                    <div class="col">

                    </div>

                    <div class="col alignText-r">
                        <p style="font-family: 'Poppins', sans-serif; font-size:15px;">A n i m e s Assistindo</p>
                    </div>

                    <div class="col">

                    </div>
                </div>

            </div>

            <table class="container-fluid table table-borderless" style="margin-top: 20px; width:90%; font-size:13px;">
                <thead>
                    <tr style="background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); color:white;">
                        <th style="width:10%;">ID</th>
                        <th style="">TV</th>
                        <th style="width:20%;">Nome</th>
                        <th style="width:10%;">Episódio Assistido</th>
                        <th style="color:;">Dia Lançamento</th>
                        <th style="width:10%;">Gênero</th>
                        <th style="width:7%;">+1 Ep</th>
                        <th style="width:7%;">-1 Ep</th>
                        <th style="width:7%;">Editar</th>
                        <th style="width:7%;">Apagar</th>
                    </tr>
                </thead>
                <tbody style="background-color:white; font-family: 'Poppins', sans-serif; color:#545868;">
                    <?php include_once('../../trunk/control/selectAssistindo2.php'); ?>
                </tbody>
            </table>

        </div>

        <!-- ##### ROW 02: Parados #### -->
        <div class="row" style="padding-top: 20px; width: 99%; margin-left:8px;">

            <div class="container" style="width:1000px; color:white; background-image: linear-gradient(to right, #959abc, #6eb1d7, #54d8b1); height:50px; border-radius:2px; box-shadow: 1px 3px 10px #000000; text-align:center; margin-top:30px;">
                    <div class="row" style="padding-top:15px;">
                        <div class="col" style="background-color:;">
                            <i class="far fa-calendar-alt" id="icon-table-assist"></i>
                            <i class="fas fa-info-circle" id="icon-table-assist" style="margin-left:30px;"></i> 
                        </div>
                        <div class="col alignText-r">
                            <p style="font-family: 'Poppins', sans-serif; font-size:16px;">Animes Parados</p>
                        </div>
                        <div class="col" style="background-color:;">
                            <a href="form-parados.php" style="color:white;"> 
                                <i class="fab fa-wpforms" style="font-size:23px; color:#ff99ff;"></i>
                            </a>

                            <i class='far fa-edit' style='color:#ff66d9; font-size: 20px; margin-left:20px;'></i>
                        </div>
                    </div>
                </div>
            
            <table class="table table-borderless" style="margin-top: 10px; margin-left: 5%; width:90%;">
                <thead>
                    <tr style="background-image: linear-gradient(to right, #3A7EC7 ,#3A7EC7, #2F449C); color:white;">
                        <th style="width:10%;">ID</th>
                        <th style="">TV</th>
                        <th style="width:20%;">Nome</th>
                        <th style="width:10%;">Episódio</th>
                        <th style="width:;">Dia/Semana</th>
                        <th style="width:10%;">Data</th>
                        <th style="width:;">Nota</th>
                        <th style="width:;">+1 Ep</th>
                        <th style="width:;">-1 Ep</th>
                        <th style="width:;">Apagar</th>
                    </tr>
                </thead>
                <tbody style="background-color:white; font-family: 'Poppins', sans-serif; color:#545868;">
                    <?php include_once('../../trunk/control/selectParados.php'); ?>
                </tbody>
            </table>

        </div>
        
    </section>
    
    <?php include ('../.globals/action-add.php'); ?>
    
    
    <!--<script>swal({
      text: "Carregado!",
    });</script>-->
    
    <p class="teste11">aa</p>
    
    <br/>
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>