<?php

   require_once('.connection/conn.class.php');
   $db = Database::conexao();

   $sql = "SELECT * FROM vw_assistido WHERE id_usuario = " . $_SESSION['id'];

   $getAssistindo = $db->prepare($sql);
   $getAssistindo->execute();

   //enviar instrucao sql para o banco

    $dadosAssistindo = $getAssistindo->fetchAll();

    // $dados = mysqli_fetch_array($resultado)
    foreach ($dadosAssistindo AS $dados){
        echo "<tr>";
        echo "<td>" . $dados["nome"];
        echo "</td>";
        echo "<td>" . $dados["episodio"];
        echo "</td>";
        echo "<td>" . $dados["dia_semana"];
        echo "</td>";
        echo "</tr>";
    }
?>