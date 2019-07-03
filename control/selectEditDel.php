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
                                     echo "<td>" . " <button type='submit' class='btn-xs btn-outline-warning' data-toggle='modal' data-target='#modaledit' style='border-style:none; width:60px; background-color:transparent;'> <i class='far fa-edit' style='color:#ff66d9; font-size: 20px;'></i> </button> ";
                                        echo "</td>";
                                    echo "<td>" . " <a href='excluindoAssistindo.php?idex=". $dados['id']. "'> <button type='submit' class='btn-xs btn-outline-danger' style='border-style:none; width:60px;background-color:transparent;'> <i class='fas fa-trash-alt' style='font-size:20px; color:#EE5253;'></i> </button> </a>";
                                        echo "</td>";
                                echo "</tr>";
                           }
?>
