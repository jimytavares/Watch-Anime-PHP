
<?php

   $servidor = 'localhost';
   $usuario  = 'testee';
   $senha    = '12345';
   $banco    = 'dbanime';

   $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

   //enviar instrucao sql para o banco
   $sql = "SELECT * FROM vw_assistido WHERE id_usuario =" . $_SESSION['id'];

    $resultado = $mysqli->query($sql);

    // $dados = mysqli_fetch_array($resultado)
    foreach ($dadosAssistindo AS $dados){
        echo "<tr>";
        
            echo "<td>" . $dados["id"];
                echo "</td>";
        
            echo "<td style='font-weight:;color:#9933ff;'>" . $dados["nome"];
                echo "</td>";
        
            echo "<td style='padding-left:60px;'>" . $dados["episodio"];
                echo "</td>";
        
            echo "<td>" . $dados["dia_semana"];
                echo "</td>";
        
            echo "<td>" . $dados["dtdia"];
                echo "</td>";
        
            echo "<td>"; 
                echo "<a href='../control/plusEpisodio.php?plus=" . $dados['id'] . "'> <img src='../imagens/plus1.png' style='width:29px;'/> </a>";
            echo "</td>";
        
            echo "<td>"; 
                echo "<a href='../control/plusEpisodio.php?plus=" . $dados['id'] . "'> <img src='../imagens/plus2.png' style='width:28px;'/> </a>";
            echo "</td>";
        
            echo "<td>"; 
                echo "<a href='../control/excluindoAssistindo.php?idex=" . $dados['id'] . "'> <i class='fas fa-trash-alt' style='font-size:20px; color:red; padding-left:17px; padding-top:5px;'></i> </a>";
            echo "</td>";
        
        echo "</tr>";
    }
?>