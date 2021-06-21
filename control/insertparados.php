<?php
    session_start();

    require_once('../.connection/connection.class.php');

    if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }
    
    $id_user = (int) $_SESSION['id'] ;
    $nomeP = $_POST['id_anime'];
    $epP   = $_POST['episodio'];
    $dataP = $_POST['data'];
    $notaP = $_POST['nota'];
    $linkP = $_POST['link'];

    $val = true;
    $consulta = mysqli_query($mysqli,"SELECT * FROM tb_parado WHERE id_anime='$nomeP'");
    $linha = mysqli_num_rows($consulta);

    if($linha >= 1)
    {
        do
        {
            $val = false;
            echo 
            '<script type="text/javascript">
                location.href="javascript:history.go(-1)";    
                alert("Anime parado ja existe!");
            </script>';
            exit;
        } while ($val == true);
    }

    mysqli_query($sql = "INSERT INTO tb_parado(id_usuario, id_anime, episodio, data, nota, link) VALUES ('$id_user','$nomeP', '$epP', '$dataP', '$notaP', '$linkP');");
    
    mysqli_close($mysqli);

    header('Location: ../.pages/form-parados.php?success');
    die();
?>