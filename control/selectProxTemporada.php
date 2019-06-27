<?php

   $servidor = 'localhost';
   $usuario  = 'dbanime';
   $senha    = '12345';
   $banco    = 'dbanime';

   $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

   //enviar instrucao sql para o banco
   $sql = "SELECT * FROM proxtemporada";

    $resultado = $mysqli->query($sql);

    // $dados = mysqli_fetch_array($resultado)
    while($dados = mysqli_fetch_assoc($resultado)){
                                echo "<div class='col-3 offset-md-1' style='background-color:white; border-radius:20px; margin-top:20px;'>";
                                    echo "<h3 style='text-align:center;'>" . $dados["nome"]. "</h3>";
                                    echo "<p style='text-align:center;'>" . $dados["sinopse"]. "</p>";
                                    echo "<i class='far fa-calendar-alt'></i>" . $dados["estreia"] . "</br>";
                                    echo "<i class='far fa-sun'></i>" . $dados["temporada"] . "</br>";
                                echo "</div>";
                           }
?>
