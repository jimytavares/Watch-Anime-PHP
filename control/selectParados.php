<?php

   $servidor = 'localhost';
   $usuario  = 'dbanime';
   $senha    = '12345';
   $banco    = 'dbanime';

   $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

   //enviar instrucao sql para o banco
   $sql = "SELECT * FROM parados";

    $resultado = $mysqli->query($sql);

    // $dados = mysqli_fetch_array($resultado)
    while($dados = mysqli_fetch_assoc($resultado)){
                                echo "<tr>";
                                    echo "<td>" . $dados["id"];                                       
                                        echo "</td>";
                                    echo "<td>" . $dados["nome"];                                       
                                        echo "</td>";
                                    echo "<td>" . $dados["ep"];                                      
                                        echo "</td>";
                                    echo "<td>" . $dados["dt"];                                       
                                        echo "</td>";
                                    echo "<td>" . $dados["temporada"];
                                        echo "</td>";
                                    echo "<td>" . $dados["nota"];  
                                        echo "</td>";
                                    echo "<td>" . $dados["comentario"];  
                                        echo "</td>";
                                    echo "<td>" . " <a href=' excluindoAssistindo.php?idex=". $dados['id']. "'> <button      type='submit' class='btn-xs btn-danger'>X</button> </a>";
                                        echo "</td>";
                                echo "</tr>";
                           }
?>
