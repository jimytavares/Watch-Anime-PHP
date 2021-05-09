<?php

    session_start();
    require_once('../.connection/connection.class.php');

    class insertAnime{
        
        public function insertAssistindo(){
            
            $id_user    = (int) $_SESSION['id'] ;
            $id_animeA  = $_POST['id_anime'];
            $episodioA  = $_POST['episodio'];
            $dia_semana = $_POST['dia_semana'];
            $dtdia      = $_POST['dtdia'];
            $link       = $_POST['link'];

            //var_dump($_POST);
            //echo $id_user;

            $val      = true;
            $consulta = mysqli_query($mysqli,"SELECT * FROM tb_assistido WHERE id_anime='$id_animeA'");
            $linha    = mysqli_num_rows($consulta);

            if($linha >= 1)
            {
                do
                {
                    $val = false;
                    echo 
                    '<script type="text/javascript">
                        location.href="javascript:history.go(-1)";    
                        alert("Nome de usuário já existente!");
                    </script>';
                    exit;
                } while ($val == true);
            }

             mysqli_query($mysqli,"INSERT INTO tb_assistido(id_usuario, id_anime, episodio, dia_semana, dtdia, link) VALUES ('$id_user', '$id_animeA', '$episodioA', '$dia_semana', '$dtdia', '$link');");
            /*$sql = "INSERT INTO tb_assistido(id_usuario, id_anime, episodio, dia_semana, dtdia, link) VALUES ('$id_user', '$id_animeA', '$episodioA', '$dia_semana', '$dtdia', '$link');";*/

            mysqli_close($mysqli);

            header('Location: ../.pages/form-assistindo.php');
            die();
        }
        
    }

?>