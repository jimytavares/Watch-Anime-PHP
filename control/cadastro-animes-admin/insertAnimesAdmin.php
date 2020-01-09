<?php

    session_start();

    $servidor = 'localhost';
    $usuario  = 'testee';
    $senha    = '12345';
    $banco    = 'dbanime';

    $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

    $id         = $_POST['id'];
    $nome       = $_POST['nome'];
    $abreviacao = $_POST['abreviacao'];
    $episodio   = $_POST['episodio'];
    $estreia    = $_POST['estreia'];
    $diretor    = $_POST['diretor'];
    $estudio    = $_POST['estudio'];
    $trailer    = $_POST['trailer'];
    $sinopse    = $_POST['sinopse'];
    
    $id_genero    = $_POST['id_genero'];
    $id_categoria = $_POST['id_categoria'];
    $id_temporada = $_POST['id_temporada'];

    //var_dump($_POST);
    //echo $id_user;

    $sql = "INSERT INTO tb_animes(id, nome, abreviacao, episodio, estreia, diretor, estudio, trailer, sinopse, id_genero, id_categoria, id_temporada) VALUES ('$id', '$nome', '$abreviacao', '$episodio', '$estreia', '$diretor', '$estudio', '$trailer', '$sinopse', '$id_genero', '$id_categoria', '$id_temporada');";

    if ($mysqli->query($sql) === TRUE) 
    {
        header('Location: ../../.pages/home.php');
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
    
?>