<?php

   require_once('.connection/Connection.class.php');
   $db = Database::conexao();

   $sql = "SELECT * FROM vw_assistido";

   $getAssistindo = $db->prepare($sql);
   $getAssistindo->execute();

   //enviar instrucao sql para o banco

    $dadosAssistindo = $getAssistindo->fetchAll();

    // $dados = mysqli_fetch_array($resultado)
    foreach ($dadosAssistindo AS $dados){
        echo "<tr>";
        echo "<td>" . $dados["id"];
        echo "</td>";
        echo "<td>" . $dados["nome"];
        echo "</td>";
        echo "<td>" . $dados["episodio"];
        echo "</td>";
        echo "<td>" . $dados["dia_semana"];
        echo "</td>";
        echo "<td>" . $dados["dia_assistido"];
        echo "</td>";
        echo "<td>" . $dados["dataproxep"];
        echo "</td>";
        echo "<td>" . $dados["qualidade"];
        echo "</td>";
        echo "<td>" . $dados["comentario"];
        echo "</td>";
        echo "<td>" . $dados["nota"];
        echo "</td>";
        echo "</tr>";
    }
?>