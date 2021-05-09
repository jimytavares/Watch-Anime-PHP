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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- Css Table -->
    <link rel="stylesheet" type="text/css" href="../css/main-table.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
    
    <style>  </style>

</head>
<body style="background-image: linear-gradient(to right, #6424ea,  #ad00b1, #9200c5);">
    
    <!-- SECTION 01: Header 
    ===================================================== -->
    <?php include ('../../trunk/.globals/header.php'); ?>

    <!-- SECTION 02: Botões de Ação
    ===================================================== -->
    <sectcion>
        <div class="container-fluid" style="width: 95%; margin-top:30px;">

            <div class="row" style="margin-left:40px;">
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/home.php" > <button type="button" class="btn btn-outline-success" style="background-color:black; opacity:0.6; width:100px; height: 50px; color:white; border-radius:1px;"> Home </button> </a>
                </div>
                <div class="col-md-auto">
                    <a href="../../trunk/.pages/perfil.php"> <button type="button" class="btn btn-outline-success" style="background-color:#eeebf9; width:100px; height: 50px; color:black; border-radius:1px; margin-left:-25px;"> <i class="fas fa-tv" style="font-size:30px;"></i> </button> </a>
                </div>
            </div>

        </div>
    </sectcion>

    <!-- SECTION ALL BODY
    ===================================================== -->
    <section class="container-fluid" style="background-color:#F7F8FA;width: 95%; margin-top: 0px; height:1000px; border-radius:5px;">
    
        <table class="table table-bordered" style="margin-top: 10px;">
            <thead>
                <tr id="tr-parados">
                    <th id="th-parados">Nome</th>
                    <th id="th-parados">Episódio</th>
                    <th id="th-parados">Comentário</th>
                </tr>
            </thead>
            <tbody id="body-table-parados">
                <?php include_once('../../trunk/control/selectAssistindoAll.php'); ?>
            </tbody>
        </table>
        
        <div class="limiter">
			<div class="wrap-table100">
				<div class="table100 ver6 m-b-110">
                    
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head" >
								<th class="column100 column1" data-column="column1">Nome</th>
								<th class="column100 column2" data-column="column2">Nome</th>
								<th class="column100 column3" data-column="column3"></th>
								<th class="column100 column4" data-column="column4">Tuesday</th>
								<th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Lawrence Scott</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>
                <!-- CARD: Geral
                    <div class="card-geral" style="width:95%; margin-top:30px; height: 250px; background-image: url('../imagens/bg-index2.png'); background-size:cover; border-radius:5px;">

                    <!-- LINHA: Dentro do Card
                    <div class="row" style="width: 100%; margin-left: -90px; padding-top: 10px; height:95%;">

                    <div class="col-md-auto" style="background-color:;">
                    <img src="../imagens/user.jpg" style="border-radius:100px; width: 150px; padding-top: 40px;"/>
                    </div>

                    <div class="col" style="background-color:blue;">
                    <?php echo $_SESSION['login'] ?>
                    </div>

                    </div>
                </div>-->