<?php

    session_start();

    $mysqli = new mysqli ('localhost', 'testee', '12345', 'dbanime');
    
    $id_user    = (int) $_SESSION['id'] ;
    $nomeP         = $_POST['id_anime'];
    $epP           = $_POST['episodio'];
    $dataP         = $_POST['data'];

    $sql = "INSERT INTO tb_parado(id_usuario, id_anime, episodio, data) VALUES ('$id_user','$nomeP', '$epP', '$dataP');";
    
    if ($mysqli->query($sql) === TRUE) {
    header('Location: ../.pages/form-parados.php');

    } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>