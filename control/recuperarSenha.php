<?php
require_once('../.connection/Connection.class.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../library/PHPMailer/PHPMailer.php');
require('../library/PHPMailer/SMTP.php');
require('../library/PHPMailer/Exception.php');

$email = $_POST['emailrec'];

$database = Database::conexao();
$sql = "SELECT * FROM tb_usuario WHERE email = '{$email}'";

try{

	$stmt = $database->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	//echo "<pre>";
	//print_r($result);

	if($result){

		$id = $result['id'];
		$bytes = openssl_random_pseudo_bytes(rand(5, 10));
		$hex   = bin2hex($bytes);
		$codigo_autenticador = $hex;

		$database = Database::conexao();
		$sql = "INSERT INTO tb_rec_user (id, id_usuario, codigo_autenticador) VALUES (default, '$id', '$codigo_autenticador')";

		$insert = $database->prepare($sql);
		$insert->execute();

		$mail = new PHPMailer(true);
		$mail->CharSet = "UTF-8";
		try {
		    //Server settings
		    $mail->SMTPDebug = false;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'noreply.an1m3@gmail.com';                 // SMTP username
		    $mail->Password = '965DzO0r';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('noreply.an1m3@gmail.com', 'Animes NoReply');
		    $mail->addAddress($email);     // Add a recipient

		    //Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Recuperação de Senha';
		    $mail->Body    = "<a href='http://localhost/WATCH-ANIME-PHP/trunk/novaSenha.php?key=".$codigo_autenticador."'>Clique aqui para cadastrar uma nova senha!</a>";
		    $mail->AltBody = 'É necessário utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

		    $mail->send();
		    
		    header('Location: ../index.php?recsuccess');

		} catch (Exception $e) {
			header('Location: ../index.php?recfail');
			//echo $mail->ErrorInfo;
		}

	}else{
		header('Location: ../index.php?recfail');
	}

}catch(Exception $e){

	header('Location: ../index.php?recfail');

}



?>