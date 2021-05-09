<?php

    session_start();

    require_once('../.connection/connection.class.php');

    if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }

    $id_user    = (int) $_SESSION['id'] ;
    $id_animeA  = $_POST['id_anime'];
    $id_nota    = $_POST['id_nota'];
    $comentario = $_POST['comentario'];

    //var_dump($_POST);
    //echo $id_user;

    $val = true;
    $consulta = mysqli_query($mysqli,"SELECT * FROM tb_ranking WHERE id_anime='$id_animeA'");
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

    mysqli_query($mysqli,"INSERT INTO tb_ranking(id_usuario, id_anime, id_nota, comentario) VALUES ('$id_user', '$id_animeA', '$id_nota', '$comentario');");

    mysqli_close($mysqli);

    header('Location: ../.pages/form-ranking.php?success');
    die();
    
?>