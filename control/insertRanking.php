<?php

    session_start();

    $servidor = 'localhost';
    $usuario  = 'testee';
    $senha    = '12345';
    $banco    = 'dbanime';

    $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

    $id_user    = (int) $_SESSION['id'] ;
    $id_animeA  = $_POST['id_anime'];
    $id_nota    = $_POST['id_nota'];
    $comentario = $_POST['comentario'];

    //var_dump($_POST);
    //echo $id_user;

    $sql = "INSERT INTO tb_ranking(id_usuario, id_anime, id_nota, comentario) VALUES ('$id_user', '$id_animeA', '$id_nota', '$comentario');";

    if ($mysqli->query($sql) === TRUE) {
    header('Location: ../.pages/form-assistindo.php');

    } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>