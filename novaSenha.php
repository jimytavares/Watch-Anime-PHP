<?php

$codigo_autenticador = $_GET['key'];

require_once('.connection/conn.class.php');

$database = Database::conexao();
$sql = "SELECT * FROM tb_rec_user WHERE codigo_autenticador='".$codigo_autenticador."'";
$select = $database->prepare($sql);
$select->execute();
$result = $select->fetch(PDO::FETCH_ASSOC);

if($result){
	var_dump($result['id_usuario']);

	$sql = "UPDATE tb_usuario SET password = '123456' WHERE id = ".$result['id_usuario'];
	
	$update = $database->prepare($sql);
	$update->execute();

	$sql = "DELETE FROM tb_rec_user WHERE codigo_autenticador='".$codigo_autenticador."'";
	$delete = $database->prepare($sql);
	$delete->execute();
}

header('Location: index.php');
?>