<?php

   require_once('../.connection/conn.class.php');
   $db = Database::conexao();

   $sql = "SELECT * FROM vw_assistido WHERE id_usuario = " . $_SESSION['id'] . " order by num_dia_semana";

   $getAssistindo = $db->prepare($sql);
   $getAssistindo->execute();

   //enviar instrucao sql para o banco

    $dadosAssistindo = $getAssistindo->fetchAll();

    // $dados = mysqli_fetch_array($resultado)

    $exibir = '';
    $diaSemana = 'Nenhum';

    foreach ($dadosAssistindo AS $dados){
        if($diaSemana != $dados["dia_semana"])
        {
            $diaSemana = $dados["dia_semana"];
            $exibir .= '<tr id="tr-parados">
                <th id="th-parados" style="background-color:#eeebf9;"> ' . $dados["dia_semana"] . ' </th>
                <th id="th-parados" style="background-color:#eeebf9;"></th>
                <th id="th-parados" style="background-color:#eeebf9;"></th>
            </tr>';
        }
        
        $exibir .= "<tr>" . 
        "<td>" . $dados["nome"] . "</td>" .
        "<td>" . $dados["episodio"] . "</td>" .
        "<td>" . $dados["dia_semana"] . "</td>" .
        "</tr>";
        
    }
    
    echo $exibir;

?>