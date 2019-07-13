<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(!empty($usuario) && !empty($senha)){
	
	require_once('.connection/Connection.class.php');
	
	$database = Database::conexao();

	$sql = "SELECT * FROM tb_usuario WHERE username='$usuario' and password='$senha'";

	try{

		$insert = $database->prepare($sql);
		$insert->execute();
		$result = $insert->fetch(PDO::FETCH_ASSOC);

	}catch(Exception $e){
		
		echo "aconteceu algum erro". $e->getMessage();
	
	}

	if($result){
		echo "logado";
	}else{
		echo "ta errado aí po";
	}

	unset($result['password']);
	
	session_start();
	$_SESSION['login'] = $usuario;
	$_SESSION['password'] = $senha;
	header('Location: home.php');

}else{

	header('Location: index.php');

}


?>