<?php

   $servidor = 'localhost';
   $usuario  = 'dbanime';
   $senha    = '12345';
   $banco    = 'dbanime';

   $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

   //enviar instrucao sql para o banco
   $sql = "SELECT * FROM assistindo";

    $resultado = $mysqli->query($sql);

    // $dados = mysqli_fetch_array($resultado)
    while($dados = mysqli_fetch_assoc($resultado)){
                                echo "<tr>";
                                    echo "<td>" . $dados["id"];                                       
                                        echo "</td>";
                                    echo "<td>" . $dados["nome"];                                      
                                        echo "</td>";
                                    echo "<td>" . $dados["diasemana"];                                      
                                        echo "</td>";
                                    echo "<td>" . $dados["dataassistido"];                                      
                                        echo "</td>";
                                    echo "<td>" . $dados["diasemanaproxep"];                                      
                                        echo "</td>";
                                    echo "<td>" . $dados["dataproxep"];                                      
                                        echo "</td>";
                                echo "</tr>";
                           }
?>
