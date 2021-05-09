<?php

    session_start();

    require_once('../.connection/connection.class.php');

    if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }
    
    //O PROBLEMA DE NÃO FUNCIONAR COM BOTÃO PORQUE SÓ TAVA FUNCIONANDO COM O METODO _GET O _POST NÃO IA
    $idA = $_GET['idex'];

    $sql = "DELETE FROM tb_assistido WHERE id='$idA'";
    
    if ($mysqli->query($sql) === TRUE) 
    {
        header('Location: ../.pages/home.php?delAnime');
    }else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
?>