<?php

    session_start();

    $servidor = 'localhost';
    $usuario  = 'testee';
    $senha    = '12345';
    $banco    = 'dbanime';

    $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

    $nome       = $_POST['nome'];
    $abreviacao = $_POST['abreviacao'];
    $episodio   = $_POST['episodio'];
    $estreia    = $_POST['estreia'];
    $sinopse    = $_POST['sinopse'];
    
    $id_genero    = $_POST['id_genero'];
    $id_categoria = $_POST['id_categoria'];
    $id_temporada = $_POST['id_temporada'];

    //var_dump($_POST);
    //echo $id_user;

    $sql = "INSERT INTO tb_animes(nome, abreviacao, episodio, estreia, sinopse, id_genero, id_categoria, id_temporada) VALUES ('$nome', '$abreviacao', '$episodio', '$estreia', '$sinopse', '$id_genero', '$id_categoria', '$id_temporada');";

    if ($mysqli->query($sql) === TRUE) 
    {
        header('Location: ../../.pages/home.php');
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>