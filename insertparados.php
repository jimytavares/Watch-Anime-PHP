<?php

    $mysqli = new mysqli ('localhost', 'dbanime', '12345', 'dbanime');
    
    $nomeP         = $_POST['nome'];
    $epP           = $_POST['episodio'];
    $dataP         = $_POST['data'];
    $seasonP       = $_POST['season'];
    $comentP       = $_POST['comentario'];
    $notaP         = $_POST['nota'];

    $sql = "INSERT INTO parados(nome, ep, dt, temporada, comentario, nota) VALUES ('$nomeP', '$epP', '$dataP', '$seasonP', '$comentP', '$notaP');";
    
    if ($mysqli->query($sql) === TRUE) 
    {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>