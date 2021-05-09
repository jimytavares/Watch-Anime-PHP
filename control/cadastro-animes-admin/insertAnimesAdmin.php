<?php
    //var_dump($_POST); 
    //echo $id_user;

    session_start();

    require_once('../../.connection/connection.class.php');

    if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $nome       = $_POST['nome'];
    $abreviacao = $_POST['abreviacao'];
    $episodio   = $_POST['episodio'];
    $estreia    = $_POST['estreia'];
    $sinopse    = $_POST['sinopse'];
    
    $id_genero    = $_POST['id_genero'];
    $id_categoria = $_POST['id_categoria'];
    $id_temporada = $_POST['id_temporada'];

    $val = true;
    $consulta = mysqli_query($mysqli,"SELECT * FROM tb_animes WHERE nome='$nome'");
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

    mysqli_query($mysqli,"INSERT INTO tb_animes(nome, abreviacao, episodio, estreia, sinopse, id_genero, id_categoria, id_temporada) VALUES ('$nome', '$abreviacao', '$episodio', '$estreia', '$sinopse', '$id_genero', '$id_categoria', '$id_temporada')");

    mysqli_close($mysqli);

    header('Location: ../../.pages/form-anime.php');
    die();
    
?>