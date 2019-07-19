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

        .bodyanimeted{
            background: linear-gradient( to left, #2438FF, #8E30FF, #B120E8, #FE24FF);
            background-size: 400% 400%;
            position: relative;
            animation: change 10s ease-in-out infinite;
        }

        *{
            box-sizing: border-box;
        }


        @keyframes change {
            0%{background-position: 0 50%}
            50%{background-position: 100% 50%}
            100%{background-position: 0 50%}
        }
        .card-list{
            margin-top: 25px;
            display: inline-grid;
            grid-template-columns: repeat(3,minmax(390px,460px));
            grid-column-gap: 50px;
            grid-row-gap: 50px;

        }
        .cover{
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            position: relative;
            z-index: 3;
        }
        .container{margin-left: 5em;}
        .card{
            width: 380px;
            height: 280px;
            min-width: 370px;
            background-color: #e9e9e9;
            display: inline-grid;
            grid-template-columns: 185px auto;
        }
        .card img{
            width: 100%;
            height: 100%;
            position: relative;
        }
        .card a{
            text-decoration: unset;
            text-align: center;
        }
        .overlay{
            content: "";
            position: absolute;
            flex-direction: column;
            justify-content: flex-end;
            z-index: 10;
            width: 100%;
        }
    </style>
    
</head>
<body class="bodyanimeted">
    
    <section>
        <div class="fixed-headerbar">
            <?php include ('../.globals/header.php'); ?>
        </div>
        <?php
            include_once('../control/selectAnimes.php');
        ?>
        <div class="fixed-bottom">
            <?php include ('../.globals/footer.php'); ?>
        </div>
    </section>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>