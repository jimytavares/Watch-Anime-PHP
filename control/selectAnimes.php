<?php

   require_once('../.connection/conn.class.php');
   $db = Database::conexao();

   $sql = "SELECT * FROM tb_animes";

   $getAnimes = $db->prepare($sql);
   $getAnimes->execute();

   //enviar instrucao sql para o banco

    $dadosAnimes = $getAnimes->fetchAll();

    // $dados = mysqli_fetch_array($resultado)
    foreach ($dadosAnimes AS $dados){
        echo'        
        <div class="ani-card"> 
            <div class="ani-fundo"></div>
            <div class="ani-info">
                <h2 class="ani-title">'. $dados["nome"] .'</h2>
                <h3 class="ani-estudio">'. $dados["estudio"] .'</h3>
                <h3 class="ani-ep"> Nº de Episodios: '. $dados["epsiodio"] .'</h3>
                <p class="ani-txt">
                    Uma história como outra qualquer, com um enredo batido e cansado como mais outro na industria,
                    contando a jornada de um(a) protagonista "cansado" e repetido, fraco que fica forte, emocional
                    e físico.                
                </p>
            </div>            
        </div>
        
        ';
    }
?>