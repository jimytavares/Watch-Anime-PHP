<?php
$usuario = $_POST['username'];
$senha = $_POST['password'];
if(!empty($usuario) && !empty($senha)){
	
	require_once('.connection/conn.class.php');
	
	$database = Database::conexao();
	$sql = "SELECT * FROM tb_usuario WHERE username='".$usuario."' and password='".$senha."'";
	try{
		$insert = $database->prepare($sql);
		$insert->execute();
		$result = $insert->fetch(PDO::FETCH_ASSOC);
	}catch(Exception $e){
		
		echo "aconteceu algum erro". $e->getMessage();
	}
	if($result){
		unset($result['password']);
		session_start();
		$_SESSION['id'] = $result['id'];
		$_SESSION['login'] = $usuario;
		$_SESSION['nickname'] = $result['nickname'];
		header('Location: home.php');
	}else{
		header('Location: index.php?error=wrong');
	}
	
}else{
	header('Location: index.php');
}
?>