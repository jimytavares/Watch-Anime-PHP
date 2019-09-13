<?php

    session_start();

    $servidor = 'localhost';
    $usuario  = 'testee';
    $senha    = '12345';
    $banco    = 'dbanime';

    $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

    $id_user    = (int) $_SESSION['id'] ;
    $id_animeA  = $_POST['id_anime'];
    $episodioA  = $_POST['episodio'];
    $dia_semana = $_POST['dia_semana'];

    //var_dump($_POST);
    //echo $id_user;

    $sql = "INSERT INTO tb_assistido(id_usuario, id_anime, episodio, dia_semana) VALUES ('$id_user', '$id_animeA', '$episodioA', '$dia_semana');";

    if ($mysqli->query($sql) === TRUE) {
    header('Location: ../pages/form-assistindo.php');

    } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>