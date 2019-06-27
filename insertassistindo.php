<?php

    $mysqli = new mysqli ('localhost', 'dbanime', '12345', 'dbanime');
    
    $nomeA          = $_POST['nome'];
    $ep             = $_POST['episodio'];
    $dataassistidoA = $_POST['dataassistido'];
    $dataprox       = $_POST['dataproxep'];
    $quali          = $_POST['qualidade'];
    $coment         = $_POST['comentario'];
    $notaA          = $_POST['nota'];

    //enviar instrucao sql para o banco
    $sql = "INSERT INTO assistindo(nome, episodio, dataassistido, dataproxep, qualidade, comentario, nota) VALUES ('$nomeA', '$ep', '$dataassistidoA', '$dataprox', '$quali', '$coment', '$notaA');";
    
    if ($mysqli->query($sql) === TRUE) {
    header('Location: index.php');

    } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>