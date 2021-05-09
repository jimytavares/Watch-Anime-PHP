
<?php

    require_once('../.connection/connection.class.php');

    $sql = "SELECT * FROM vw_ranking WHERE id_usuario =" . $_SESSION['id'];

    $dadosAssistindo = $mysqli->query($sql);

    foreach ($dadosAssistindo AS $dados){
        echo "<tr class='row100'>";

            echo "<td style='background-color:#0099ff;'>";
                echo "</td>";

            echo "<td style='text-align:center;'>" . $dados["id_nota"];
                echo "</td>";
        
            echo "<td style='color:#9933ff;'>" . $dados["nome"];
                echo "</td>";

            echo "<td>" . $dados["id_temporada"];
                echo "</td>";

            echo "<td>" . $dados["comentario"];
                echo "</td>";

            echo "<td class='column100 column1' data-column='column1' >"; 
                echo "<a href='../control/excluindoRanking.php?idex=" . $dados['id'] . "'> <i class='fas fa-trash-alt' style='font-size:20px; color:red; padding-left:px; padding-top:5px;'></i> </a>";
            echo "</td>";

        echo "</tr>";
    }
?>