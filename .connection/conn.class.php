<?php

/**
 * LOCALHOST
 * Modo de Usar:
 * require_once '.connection/conn.class.php';
 * $db = Database::conexao();
 * E agora use as funções do PDO (prepare, query, exec) em cima da variável $db.
 */
class Database
{
    protected static $db;

    private function __construct(){
        # Informações sobre o banco de dados:
        $db_host = "localhost";
        $db_nome = "dbanime";
        $db_usuario = "root";
        $db_senha = "";
        $db_driver = "mysql";

        try{
            self::$db = new PDO("$db_driver:host=$db_host;port=3306;dbname=$db_nome", $db_usuario, $db_senha);

            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$db->exec('SET NAMES utf8');
        }
        catch (PDOException $e){
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

}

?>