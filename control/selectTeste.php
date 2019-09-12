
<?php

   $servidor = 'localhost';
   $usuario  = 'testee';
   $senha    = '12345';
   $banco    = 'dbanime';

   $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

    $sql = "SELECT nome FROM tb_animes ";

    $resultado = $mysqli->query($sql);

    //$dados = mysqli_fetch_array($resultado);
    foreach ($resultado AS $dados){
        echo '<option value=' . $dados["nome"] . '>' . $dados["nome"] . '</option>';
    }
?>
