<?php 

    class Database
    {	
	
        private $connection = null;

    // this function is called everytime this class is instantiated		
    public function __construct( $servidor = 'localhost', $usuario  = 'testee', $senha = '12345', $banco    = 'dbanime'){

        try
        {
	
            $this->connection = new mysqli($servidor, $usuario, $senha, $banco);
		
            if( mysqli_connect_errno() )
            {
                throw new Exception("Could not connect to database.");   
            }
		
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }			
	
    }
        


    // Insert a row/s in a Database Table
    public function Insert( $query = "" , $params = [] ){
	
        try{
		
        $stmt = $this->executeStatement( $query , $params );
            $stmt->close();
		
            return $this->connection->insert_id;
		
        }catch(Exception $e){
            throw New Exception( $e->getMessage() );
        }
	
        return false;
	
    }

    // Select a row/s in a Database Table
    public function Select( $query = "" , $params = [] ){
	
        try{
		
            $stmt = $this->executeStatement( $query , $params );
		
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);				
            $stmt->close();
		
            return $result;
		
        }catch(Exception $e){
            throw New Exception( $e->getMessage() );
        }
	
        return false;
    }

    // Update a row/s in a Database Table
    public function Update( $query = "" , $params = [] ){
        try{
		
            $this->executeStatement( $query , $params )->close();
		
        }catch(Exception $e){
            throw New Exception( $e->getMessage() );
        }
	
        return false;
    }		

    // Remove a row/s in a Database Table
    public function Remove( $query = "" , $params = [] ){
        try{
		
            $this->executeStatement( $query , $params )->close();
		
        }catch(Exception $e){
            throw New Exception( $e->getMessage() );
        }
	
        return false;
    }		

    // execute statement
    private function executeStatement( $query = "" , $params = [] ){
	
        try{
		
            $stmt = $this->connection->prepare( $query );
		
            if($stmt === false) {
                throw New Exception("Unable to do prepared statement: " . $query);
            }
		
            if( $params ){
                call_user_func_array(array($stmt, 'bind_param'), $params );				
            }
		
            $stmt->execute();
		
            return $stmt;
		
        }catch(Exception $e){
            throw New Exception( $e->getMessage() );
        }
	
    }
		
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

?>