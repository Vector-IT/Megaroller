<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

ini_set('log_errors', 1);
ini_set('error_log', 'php-error.log');

require_once __DIR__ .'/../admin/php/datosdb.php';

require_once __DIR__ .'/../admin/php/phpmailer/Exception.php';
require_once __DIR__ .'/../admin/php/phpmailer/SMTP.php';
require_once __DIR__ .'/../admin/php/phpmailer/PHPMailer.php';

function enviarMail($para, $titulo, $mensaje, $mensajeAlt, $adjunto = [], $replyTo = '', $cc = '', $bcc = '') {
	global $raiz, $crlf;

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->isHTML(true);
	$mail->setLanguage('es', $raiz.'admin/php/phpmailer/language/');
	$mail->isSMTP();
	$mail->Host = 'aj000619.ferozo.com';
	$mail->SMTPAuth = true;
    $mail->Username = 'no-reply@megarollercortinas.com';
    $mail->Password = 'dLYTaph6g7jc';
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;

	if ($replyTo != '') {
		$mail->AddReplyTo($replyTo);
	}

	$mail->setFrom('no-reply@megarollercortinas.com', 'Megaroller Cortinas');

	$direcciones = explode(',', $para);
	foreach ($direcciones as $dir) {
		$mail->addAddress(trim($dir));
	}

	$direcciones = explode(',', $cc);
	foreach ($direcciones as $dir) {
		$mail->addCC(trim($dir));
	}

	$direcciones = explode(',', $bcc);
	foreach ($direcciones as $dir) {
		$mail->addBCC(trim($dir));
	}

	$mail->Subject = $titulo;
	$mail->Body = $mensaje;
	$mail->AltBody = $mensajeAlt;

	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

	if (count($adjunto) > 0) {
		$mail->addAttachment($adjunto['tmp_name'], $adjunto['name']);
	}

	if (!$mail->send()) {
		$salida = array('estado' => false, 'msg' => 'Error al enviar mail!' . $crlf . $mail->ErrorInfo);
	} else {
		$salida = array('estado' => true, 'msg' => 'Datos enviados!');
	}
	return $salida;
}
?>
