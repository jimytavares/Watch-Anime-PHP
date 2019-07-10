<?php

    $mysqli = new mysqli ('localhost', 'dbanime', '12345', 'dbanime');
    
    $nomeA      = $_POST['nome'];
    $temporadaA = $_POST['temporada'];
    $estreiaA   = $_POST['estreia'];
    $sinopseA   = $_POST['sinopse'];
    $trailerA   = $_POST['trailer'];
    $notaA      = $_POST['nota'];

    $sql = "INSERT INTO proxtemporada(nome, temporada, estreia, sinopse, trailer, nota) VALUES ('$nomeA', '$temporadaA', '$estreiaA', '$sinopseA', '$trailerA', '$notaA');";
    
    if ($mysqli->query($sql) === TRUE) 
    {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>