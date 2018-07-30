<?php

    $mysqli = new mysqli ('localhost', 'dbanime', '12345', 'dbanime');
    
    $nomeA           = $_POST['nome'];
    $ep             = $_POST['episodio'];
    $dataassistidoA = $_POST['dataassistido'];
    $proxep         = $_POST['proximoepisodio'];
    $dataprox       = $_POST['dataproxep'];
    $quali          = $_POST['qualidade'];
    $coment         = $_POST['comentario'];

    //enviar instrucao sql para o banco
    $sql = "INSERT INTO assistindo(nome, episodio, dataassistido, proximoepisodio, dataproxep, qualidade, comentario) VALUES ('$nomeA', '$ep', '$dataassistidoA', '$proxep', '$dataprox', '$quali', '$coment');";
    
    if ($mysqli->query($sql) === TRUE) {
    header('Location: index.php');

    } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>