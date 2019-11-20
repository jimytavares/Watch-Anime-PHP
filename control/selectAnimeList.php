<?php

    $servidor = 'localhost';
    $usuario  = 'testee';
    $senha    = '12345';
    $banco    = 'dbanime';

    $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

    $sql = "SELECT * FROM tb_animes WHERE id_usuario =" . $_SESSION['id'];

    $dadosAssistindo = $mysqli->query($sql);

    foreach ($dadosAssistindo AS $dados){
        echo "<tr>";
            echo "<td>" . $dados["id"];
                echo "</td>";
            echo "<td>" . $dados["nome"];
                echo "</td>";
            echo "<td>" . $dados["abreviacao"];
                echo "</td>";
            echo "<td>" . $dados["episodio"];
                echo "</td>";
            echo "<td>" . $dados["estreia"];
                echo "</td>";
            echo "<td>" . $dados["sinopse"];
                echo "</td>";
        echo "</tr>";
    }
?>