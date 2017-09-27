<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	require_once 'datosdb.php';

	require_once 'phpmailer/Exception.php';
	require_once 'phpmailer/SMTP.php';
	require_once 'phpmailer/PHPMailer.php';

	$para = isset($_POST["Para"])? $_POST["Para"]: 'info@megarollercortinas.com';
	$titulo = isset($_POST["Titulo"])? $_POST["Titulo"]: 'Megaroller Cortinas';
	$mensaje = $_POST['Mensaje'];
	$mensajeAlt = isset($_POST["MensajeAlt"])? $_POST["MensajeAlt"]: $_POST["Mensaje"];

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->isHTML(true);
	$mail->setLanguage('es', $raiz.'admin/php/phpmailer/language/');
	$mail->isSMTP();
	$mail->Host = 'mail.megarollercortinas.com';
	$mail->SMTPAuth = true;
    $mail->Username = 'web@megarollercortinas.com';
    $mail->Password = 'VectorNouveh5';
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;  
	
	$mail->setFrom('web@megarollercortinas.com', 'Megaroller Cortinas');
	$mail->addAddress($para);
	$mail->Subject = $titulo;
	$mail->Body = $mensaje;
	$mail->AltBody = $mensajeAlt;

	if (count($_FILES) > 0) {
		$mail->addAttachment($_FILES["Archivo"]["tmp_name"], $_FILES["Archivo"]["name"]);
	}

	if(!$mail->send()) {
		echo "Error al enviar datos!";
		echo $crlf . $mail->ErrorInfo;
	} else {
		echo "Datos enviados!";
	}
} 
else {
	header('HTTP/1.1 403 Forbidden');
	header('Status: 403 Forbidden');
}	
?>
