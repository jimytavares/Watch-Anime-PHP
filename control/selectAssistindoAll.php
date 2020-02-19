<?php

   require_once('../.connection/conn.class.php');
   $db = Database::conexao();

   $sql = "SELECT * FROM vw_ranking WHERE id_usuario = " . $_SESSION['id'];

   $getAssistindo = $db->prepare($sql);
   $getAssistindo->execute();

   //enviar instrucao sql para o banco

    $dadosAssistindo = $getAssistindo->fetchAll();

    // $dados = mysqli_fetch_array($resultado)

    $table10 = '';
    $table9 = '';

    foreach ($dadosAssistindo AS $dados)
    {
        
        $nota10 = $dados["id_nota"];
        if($dados["id_nota"] != 0)
        {
            $table10 .= 
            '<tr id="tr-parados">
                <th id="th-parados" style="color:red;"> ' . $dados["nome"] . ' </th>
                <th id="th-parados" style=""> ' . $dados["id_nota"] . ' </th>
                <th id="th-parados" style="">' . $dados["comentario"] . ' </th>
            </tr>';
        } else {
            echo 'erro';
        }
        
        
    }
    
    echo $table10;
    echo $table9;

?>