<?php
    $mysqli = new mysqli ('localhost', 'dbanime', '12345', 'dbanime');
    
    //O PROBLEMA DE NÃO FUNCIONAR COM BOTÃO PORQUE SÓ TAVA FUNCIONANDO COM O METODO _GET O _POST NÃO IA
    $idA = $_GET['idex'];

    $sql = "DELETE FROM assistindo WHERE id='$idA'";
    
    if ($mysqli->query($sql) === TRUE) 
    {
        header('Location:index.php');
    }else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
?>