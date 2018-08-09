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
                                    echo "<td>" . $dados["episodio"];                                      
                                        echo "</td>";
                                    echo "<td>" . $dados["comentario"];  
                                        echo "</td>";
                                    echo "<td>" . $dados["qualidade"];   
                                        echo "</td>";
                                    echo "<td>" . " <a href='excluindoAssistindo.php?idex=". $dados['id']. "'> <button type='submit' class='btn-xs btn-outline-warning' style='border-style:none; width:60px;'> <i class='far fa-edit' style='color:#00ffff; font-size: 20px;'></i> </button> </a>";
                                        echo "</td>";
                                    echo "<td>" . " <a href='excluindoAssistindo.php?idex=". $dados['id']. "'> <button type='submit' class='btn-xs btn-outline-danger' style='border-style:none; width:60px;'> <i class='fas fa-trash-alt' style='font-size:20px; color:black;'></i> </button> </a>";
                                        echo "</td>";
                                echo "</tr>";
                           }
?>
