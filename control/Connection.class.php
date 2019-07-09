<?php

/**
 * Modo de Usar:
 * require_once './Connection.class.php';
 * $db = Database::conexao();
 * E agora use as funções do PDO (prepare, query, exec) em cima da variável $db.
 */
class Database
{
    protected static $db;
    
    private function __construct(){
        # Informações sobre o banco de dados:
        $db_host = "server.grupomeuservidorweb.com.br";
        $db_nome = "enetdevc_animes";
        $db_usuario = "enetdevc_animesview";
        $db_senha = "0U3zkbJFtX1k";
        $db_driver = "mysql";
        
        try{
            
            self::$db = new PDO("$db_driver:host=$db_host;port=3306;dbname=$db_nome", $db_usuario, $db_senha);
            
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            self::$db->exec('SET NAMES utf8');
        }
        catch (PDOException $e){
            echo 'erro';
            die("Connection Error: " . $e->getMessage());
        }
    }
    
    public static function conexao(){
        
        if (!self::$db)
        {
            new Database();
        }
        
        return self::$db;
    }
    
    /*public static function exibirAssistido(){
    $con = self::conexao();
    $getAssistindo = $con->prepare("SELECT * FROM vw_assistido");
    $getAssistindo->execute();
    $dadosAssistindo = $getAssistindo->fetchAll();
    foreach ($dadosAssistindo AS $dados){
        echo "<tr>";
        echo "<td>" . $dados["id"];
        echo "</td>";
        echo "<td>" . $dados["nome"];
        echo "</td>";
        echo "<td>" . $dados["episodio"];
        echo "</td>";
        echo "<td>" . $dados["diasemana"];
        echo "</td>";
        echo "<td>" . $dados["dataassistido"];
        echo "</td>";
        echo "<td>" . $dados["dataproxep"];
        echo "</td>";
        echo "<td>" . $dados["qualidade"];
        echo "</td>";
        echo "<td>" . $dados["comentario"];
        echo "</td>";
        echo "<td>" . $dados["nota"];
        echo "</td>";
        echo "</tr>";
    }
    }*/
    
}

?>