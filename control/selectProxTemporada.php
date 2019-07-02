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
                                echo "<div class='col-3 offset-md-1' style=''>";
                                    echo "<a target='_blank' href='https://www.behance.net/doonnnx'>";
                                      echo "<div class='thecard'>";

                                        echo "<div class='card-img'>";
                                          echo "<img src='imagens/seaseon/winter-anime.png'>";
                                        echo "</div>";

                                        echo "<div class='card-caption'>";
                                          echo "<i class='far fa-snowflake' style='font-size:20px; color:#5500ff;'></i>";
                                          echo "<span class='date'>" . $dados["temporada"] . "</span>";
                                          echo "<h1>" . $dados["nome"] . "</h1>";
                                          echo "<p>" . $dados["sinopse"]. "</p>";
                                        echo "</div>";

                                        echo "<div class='card-outmore'>";
                                          echo "<h5>" . $dados["estreia"] . "</h5>";
                                          echo "<i id='outmore-icon' class='fa fa-angle-right'></i>";
                                        echo "</div>";

                                      echo "</div>";
                                    echo "</a>";
                                echo "</div>";
                           }
?>


