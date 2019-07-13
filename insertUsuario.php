<?php 
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$checkbox = $_POST['checkbox'];
if(!empty($login) && !empty($senha) && !empty($email)){
	require_once('.connection/Connection.class.php');
	$database = Database::conexao();
	$sql = "INSERT INTO TB_USUARIO VALUES (default, '$login', '$senha', '$email', 2, 1, '$checkbox')";
	try{
		$insert = $database->prepare($sql);
		$insert->execute();
		header('Location: index.php?success');
	}catch(Exception $e){
		header('Location: index.php?error');
	}
}else{
	header('Location: index.php');
}
?>