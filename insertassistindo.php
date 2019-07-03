<?php

    $mysqli = new mysqli ('localhost', 'dbanime', '12345', 'dbanime');
    
    $nomeA          = $_POST['nome'];
    $episodioA             = $_POST['episodio'];
    $dataassistidoA = $_POST['dataassistido'];
    $diasemanaA       = $_POST['diasemana'];
    $dataproxepA          = $_POST['dataproxep'];
    $diasemanaproxepA         = $_POST['diasemanaproxep'];
    $qualidadeA          = $_POST['qualidade'];
    $comentarioA     = $_POST['comentario'];
    $notaA = $_POST['nota'];

    //enviar instrucao sql para o banco
    $sql = "INSERT INTO assistindo(nome, episodio, dataassistido, diasemana, dataproxep, diasemanaproxep, qualidade, comentario, nota) VALUES ('$nomeA', '$episodioA', '$dataassistidoA', '$diasemanaA', '$dataproxepA', '$diasemanaproxepA', '$qualidadeA', '$comentarioA', '$notaA');";
    
    if ($mysqli->query($sql) === TRUE) {
    header('Location: index.php');

    } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>