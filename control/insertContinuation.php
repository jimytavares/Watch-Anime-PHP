<?php
    //var_dump($_POST);
    //echo $id_user;

    session_start();

    require_once('../.connection/connection.class.php');

    if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }

    $ep    = $_POST['ep'];
    $dia   = $_POST['dia'];
    $dtata = $_POST['dtata'];
    $link  = $_POST['link'];

    $id_user      = (int) $_SESSION['id'] ;
    $id_anime     = $_POST['id_anime'];
    $id_temporada = $_POST['id_temporada'];
    $id_nota      = $_POST['id_nota'];

    $val = true;
    $consulta = mysqli_query($mysqli,"SELECT * FROM tb_continuation WHERE id_anime='$id_animeA'");
    $linha = mysqli_num_rows($consulta);

    if($linha >= 1)
    {
        do
        {
            $val = false;
            echo 
            '<script type="text/javascript">
                location.href="javascript:history.go(-1)";    
                alert("Nome de usuário já existente!");
            </script>';
            exit;
        } while ($val == true);
    }

     mysqli_query($mysqli,"INSERT INTO tb_continuation(ep, dia, data, link, id_anime, id_usuario, id_temporada, id_nota) VALUES ('$ep', '$dia', '$dtata', '$link', '$id_anime', '$id_user', '$id_temporada', '$id_nota');");

    /*$sql = "INSERT INTO tb_assistido(id_usuario, id_anime, episodio, dia_semana, dtdia, link) VALUES ('$id_user', '$id_animeA', '$episodioA', '$dia_semana', '$dtdia', '$link');";*/

    mysqli_close($mysqli);

    header('Location: ../.pages/form-teste.php?success');
    die();
    
?>