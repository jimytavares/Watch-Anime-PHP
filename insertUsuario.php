<?php 

$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nickname = $_POST['nickname'];
$checkbox = $_POST['checkbox'];

if(!empty($login) && !empty($senha) && !empty($email)){

	require_once('.connection/Connection.class.php');
	$database = Database::conexao();
	$sql = "INSERT INTO TB_USUARIO (id, username, nickname, password, email, nivel, ativo, notificacao) VALUES (default, '$login', '$nickname', '$senha', '$email', 2, 1, '$checkbox')";
	
	
	try{

		$insert = $database->prepare($sql);
		$insert->execute();

		header('Location: index.php?success');

	}catch(Exception $e){

		header('Location: index.php?error=register_wrong');

	}

}else{

	header('Location: index.php');

}

?>