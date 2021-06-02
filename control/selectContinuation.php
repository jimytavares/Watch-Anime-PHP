<?php

    require_once('../.connection/connection.class.php');

    $sql = "SELECT * FROM vw_continuation WHERE id_usuario = '$_SESSION[id]' order by id";

    $dadosAssistindo = $mysqli->query($sql);

    foreach ($dadosAssistindo AS $dados){
        echo "<tr>";

            echo "<td>" . $dados["id"];
                echo "</td>";
        
            echo "<td>";
                echo " <a href= " . $dados['link'] ." target='_blank'> <i class='fas fa-tv' style='color:#ff00bf; font-size:15px; margin-top:3px;'></i> </a>";
            echo "</td>";

            echo "<td style='font-weight:;color:#9933ff;'>" . $dados["nome"];
                echo "</td>";

            echo "<td style='padding-left:30px; color:red;' id='para1'>" . $dados["episodio"];
                echo "</td>";

            echo "<td>" . $dados["dia_semana"];
                echo "</td>";
        
            echo "<td style='color:#b1b1b1;'>" . $dados["ge_nome"];
                echo "</td>";

          /* echo "<td style='color:#e6e6e6;'>" . $dados["dtdia"];
                echo "</td>";*/

            echo "<td>"; 
                echo "<a href='../control/plusEpisodio.php?plus=" . $dados['id'] . "' onclick='mudarCor('blue');'> <img src='../imagens/img-button-table/plus1.png' style='width:29px; margin-left:5px;'/> </a>";
        
            echo "</td>";

            echo "<td>"; 
                echo "<a href='../control/plusEpisodioM.php?plus=" . $dados['id'] . "'> <img src='../imagens/img-button-table/plus2.png' style='width:28px; margin-left:5px;'/> </a>";
            echo "</td>";
        
            echo "<td>"; 
                echo "<a href='../control/plusEpisodioM.php?plus=" . $dados['id'] . "'> <img src='../imagens/img-button-table/editdata.png' style='width:25px; margin-left:8px; margin-top:1px;'/> </a>";
            echo "</td>";

            echo "<td>"; 
                echo "<a href='../control/excluindoAssistindo.php?idex=" . $dados['id'] . "'> <i class='fas fa-trash-alt' style='font-size:20px; color:red; padding-left:16px; padding-top:5px;'></i> </a>";
            echo "</td>";

        echo "</tr>";
    }

?>