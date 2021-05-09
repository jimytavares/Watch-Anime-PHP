<?php

    session_start();

   require_once('../.connection/connection.class.php');

    if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
    //O PROBLEMA DE NÃO FUNCIONAR COM BOTÃO PORQUE SÓ TAVA FUNCIONANDO COM O METODO _GET O _POST NÃO IA
    $idA = $_GET['plus'];

    $sql = "UPDATE tb_assistido SET episodio = episodio - 1 WHERE id='$idA'";
    
    if ($mysqli->query($sql) === TRUE) 
    {
        header('Location: ../.pages/home.php?errorEp');
    }else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
?>