<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo 'error';
}

require_once 'enviarMail.php';

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));

$location = '';
if (isset($_POST['location']))
	$location = strip_tags(htmlspecialchars($_POST['location']));

$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'fabrica@megarollercortinas.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.

$email_subject = "Consulta Web:  $name";
$email_body = "Has recibido una nueva consulta desde el formulario de contacto.<br/><br/>"."<br/><br/>Nombre: $name<br/><br/>Email: $email_address<br/><br/>Teléfono: $phone<br/><br/>Localidad: $location<br/><br/>Consulta:<br/>". $message;
$email_body_alt = "Has recibido una nueva consulta desde el formulario de contacto.\n\n"."\n\nNombre: $name\n\nEmail: $email_address\n\nTeléfono: $phone\n\nLocalidad: $location\n\nConsulta:\n". str_ireplace('<br/>', '\n', $message);

$headers = "From: web@megarollercortinas.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";

// $result = mail($to,$email_subject,$email_body,$headers);
// if ($result) {
// 	echo 'exito';
// }
// else {
// 	echo 'error';
// }

$resultado = enviarMail($to, $email_subject, $email_body, $email_body_alt);
if ($resultado["estado"]) {
	echo 'exito';
}
else {
	echo 'error';
}
?>