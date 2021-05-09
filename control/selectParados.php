
<?php

    require_once('../.connection/connection.class.php');

    $sql = "SELECT * FROM vw_parados WHERE id_usuario =" . $_SESSION['id'];

    $dadosAssistindo = $mysqli->query($sql);

    foreach ($dadosAssistindo AS $dados){
        echo "<tr>";

            echo "<td>" . $dados["id"];
                echo "</td>";
        
            echo "<td>";
                echo " <a href= " . $dados['link'] ." target='_blank'> <i class='fas fa-tv' style='color:#ff00bf; font-size:15px; margin-top:3px;'></i> </a>";
            echo "</td>";

            echo "<td style='font-weight:;color:#ff00bf;'>" . $dados["nome"];
                echo "</td>";

            echo "<td style='padding-left:30px;'>" . $dados["episodio"];
                echo "</td>";
        
            echo "<td>" . $dados["dia"];
                echo "</td>";

            echo "<td style='color:#b1b1b1;'>" . $dados["data"];
                echo "</td>";
        
            echo "<td style='color:red; padding-left:19px;'>" . $dados["nota"];
                echo "</td>";

            echo "<td>"; 
                echo "<a href='../control/plusParados.php?plus=" . $dados['id'] . "'> <img src='../imagens/img-button-table/plus1.png' style='width:29px;'/> </a>";
            echo "</td>";

            echo "<td>"; 
                echo "<a href='../control/plusParadosM.php?plus=" . $dados['id'] . "'> <img src='../imagens/img-button-table/plus2.png' style='width:28px;'/> </a>";
            echo "</td>";

            echo "<td>"; 
                echo "<a href='../control/excluindoParados.php?idex=" . $dados['id'] . "'> <i class='fas fa-trash-alt' style='font-size:20px; color:red; padding-left:17px; padding-top:5px;'></i> </a>";
            echo "</td>";

        echo "</tr>";
    }

/*while($artigos = $dadosAssistindo->fetch_array()){
    echo $artigos["nome"]."<br>";
}*/
?>