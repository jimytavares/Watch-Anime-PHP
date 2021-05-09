<?php

   $servidor = 'localhost';
   $usuario  = 'testee';
   $senha    = '12345';
   $banco    = 'dbanime';

   $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);
    
    //O PROBLEMA DE NÃO FUNCIONAR COM BOTÃO PORQUE SÓ TAVA FUNCIONANDO COM O METODO _GET O _POST NÃO IA
    $idA = $_GET['idex'];

    $sql = "DELETE FROM tb_ranking WHERE id='$idA'";
    
    if ($mysqli->query($sql) === TRUE) 
    {
        header('Location: ../.pages/ranking.php');
    }else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
?>