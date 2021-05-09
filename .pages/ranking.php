<?php include ('../.globals/header.php'); ?>

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

<body class="bodyanimeted" style="">
   
    <section class="container-fluid" style="background-color:#eeebf9;width: 95%; margin-top: 30px; border-radius:5px; height: 800px;">

        <!--##### ROW 01: Assistindo ####-->
        <div class="row" style="padding-top: 60px; width:99%; margin-left:8px;">

            <!-- TABLE: Ranking -->
            <div class="container" style="width:1000px; color:white; background-image: linear-gradient(to right, #ee0979, #ff6a00, #54d8b1); height:50px; border-radius:2px; box-shadow: 1px 3px 10px #000000; text-align:center;">
                <div class="row" style="padding-top:15px;">
                    <div class="col" style="background-color:;">
                        <i class="far fa-calendar-alt" id="icon-table-assist" style=""></i>
                        <i class="fas fa-info-circle" id="icon-table-assist" style="margin-left:30px; "></i> 
                    </div>
                    <div class="col alignText-r">
                        <p style="font-family: 'Poppins', sans-serif; font-size:16px;">R a n k i n g</p>
                    </div>
                    <div class="col" style="background-color:;">
                        <a href="form-assistindo.php" style="color:white;"> 
                            <i class="fab fa-wpforms" style="font-size:23px; "></i>
                        </a>

                        <i class='far fa-edit' style=' font-size: 20px; margin-left:20px;'></i>
                    </div>
                </div>
            </div>

            <table class="table table-borderless" style="margin-top: 10px; margin-left: 5%; width:90%;">
                <thead>
                    <tr style="background-image: linear-gradient(to right, #ee0979, #ff6a00, #54d8b1); color:white;">
                        <th style="width:1%;">ID</th>
                        <th style="width:5%; text-align:center;">Nota</th>
                        <th style="width:20%;">Nome</th>
                        <th style="width:10%;">Temporada</th>
                        <th style="color:;">Comentário</th>
                        <th style="color:;">Apagar</th>
                    </tr>
                </thead>
                <tbody style="background-color:white; font-family: 'Poppins', sans-serif; color:#545868;">
                    <?php include_once('../../trunk/control/selectRanking.php'); ?>
                </tbody>
            </table>

        </div>   
        
    </section>

   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>