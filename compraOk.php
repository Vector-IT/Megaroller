<?php
use TodoPago\Sdk;

session_start();
require_once 'php/conexion.php';

$tpMerchantID = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'TP_MERCHANT_ID'");
$tpAPIKey = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'TP_API_KEY'");

//importo archivo con SDK
include_once __DIR__.'/admin/todopago/vendor/autoload.php';

define('MERCHANT', $tpMerchantID);
define('SECURITY', $tpAPIKey);

$rk = $_COOKIE['RequestKey'];
$ak = strip_tags($_GET['Answer']);
$numeCarr = $_GET['operationid'];
error_log("Procesando carrito NRO: ". $numeCarr ." - ID: ". $_GET["id"]);

$optionsGAA = array (
        'Security'   => SECURITY,
        'Merchant'   => MERCHANT,
        'RequestKey' => $rk,
        'AnswerKey'  => $ak // *Importante
);

//común a todas los métodos
$http_header = array('Authorization'=>'TODOPAGO '. $tpAPIKey);

//creo instancia de la clase TodoPago
$connector = new Sdk($http_header, "prod");

$rta2 = $connector->getAuthorizeAnswer($optionsGAA);

if ($rta2['StatusCode'] != -1) {
    header("location: compraError.php?operationid=$numeCarr");
}
else {
    $numeEstaCarr = 7;

    $datosUsuario = buscarDato("SELECT NumeUser, NumeInvi, NombPers, MailUser, TeleUser, DireUser, CodiPost, NombLoca, NumeProv, ImpoTota FROM carritos WHERE NumeCarr = ".$numeCarr);
    
    if ($datosUsuario["NombPers"] == '') {
        if ($datosUsuario["NumeUser"] != '') {
            $strSQL = "SELECT u.NombPers, u.MailUser, u.TeleUser, u.DireUser, u.CodiPost, u.NombLoca, u.NumeProv";
            $strSQL.= $crlf."FROM usuarios u";
            $strSQL.= $crlf."WHERE u.NumeUser = ". $datosUsuario["NumeUser"];
    
            $datosUsuario = buscarDato($strSQL);
        }
        else {
            $strSQL = "SELECT u.NombPers, u.MailUser, u.TeleUser, u.DireUser, u.CodiPost, u.NombLoca, u.NumeProv";
            $strSQL.= $crlf."FROM invitados u";
            $strSQL.= $crlf."WHERE u.NumeInvi = ". $datosUsuario["NumeInvi"];
    
            $datosUsuario = buscarDato($strSQL);
        }
    }
    $datosUsuario["ImpoTota"] = buscarDato("SELECT ImpoTota FROM carritos WHERE NumeCarr = ".$numeCarr);

    //Actualizo datos del carrito
    $strSQL = "UPDATE carritos SET ";
    $strSQL.= $crlf."NumeEstaCarr = ". $numeEstaCarr;
    $strSQL.= $crlf.", NombPers = '{$datosUsuario["NombPers"]}'";
    $strSQL.= $crlf.", TeleUser = '{$datosUsuario["TeleUser"]}'";
    $strSQL.= $crlf.", MailUser = '{$datosUsuario["MailUser"]}'";
    $strSQL.= $crlf.", DireUser = '{$datosUsuario["DireUser"]}'";
    $strSQL.= $crlf.", CodiPost = '{$datosUsuario["CodiPost"]}'";
    $strSQL.= $crlf.", NombLoca = '{$datosUsuario["NombLoca"]}'";
    $strSQL.= $crlf.", NumeProv = ". $datosUsuario["NumeProv"];
    $strSQL.= $crlf." WHERE NumeCarr = ".$numeCarr;

    ejecutarCMD($strSQL);

    //Descuento promocion
    $numeProm = buscarDato("SELECT NumeProm FROM carritos WHERE NumeCarr = ". $numeCarr);
    if ($numeProm != '') {
        $strSQL  = "UPDATE promociones SET CantUtil = CantUtil + 1 WHERE NumeProm = ". $numeProm;
        ejecutarCMD($strSQL);
    }
    
    //Descuento stock
    $strSQL = $crlf."SELECT cd.NumeProd, cd.CantProd";
    $strSQL.= $crlf."FROM carritosdetalles cd";
    $strSQL.= $crlf."WHERE cd.NumeCarr = ". $numeCarr;
    $tblCarrito = cargarTabla($strSQL);

    while ($fila = $tblCarrito->fetch_assoc()) {
        $strSQL = $crlf."UPDATE productos SET CantProd = CantProd - {$fila["CantProd"]} WHERE NumeProd = ". $fila["NumeProd"];
        ejecutarCMD($strSQL);
    }

    //Envio mail
    $titulo = "Megaroller - Nueva compra";
    $mensajeHtml = "Este es un mensaje autom&aacute;tico. Por favor no lo responda.";
    $mensajeHtml.= "<br>Nueva compra registrada en megarollercortinas.com";
    $mensajeHtml.= "<br>";
    $mensajeHtml.= "<br>Nro Carrito: <strong>{$numeCarr}</strong>";
    $mensajeHtml.= "<br>Importe: <strong>$ {$datosUsuario["ImpoTota"]}</strong>";
    
    $mensaje = "Este es un mensaje automatico. Por favor no lo responda";
    $mensaje.= "\nNueva compra registrada en eadvocatus.com.ar";
    $mensaje.= "\n";
    $mensaje.= "\nNro Carrito: ". $numeCarr;
    $mensaje.= "\nImporte: $". $datosUsuario["ImpoTota"];
    
    $url = "http://". $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != "80"? ":".$_SERVER['SERVER_PORT']: "") . $raiz .'admin/php/enviarMail.php';
    $fields = array(
            'Para' => 'info@megarollercortinas.com',
            'Titulo' => $titulo,
            'Mensaje' => $mensajeHtml,
            'MensajeAlt' => $mensaje
    );
    $datos = http_build_query($fields);
        
    //open connection
    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $url);
    curl_setopt($handle, CURLOPT_POST, true);
    curl_setopt($handle, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
    
    //execute post
    $response = curl_exec($handle);
    if (!$response) {
        $salida = array("estado"=>false, "msg"=>"");
    }
    //close connection
    curl_close($handle);
    
    if (strripos($response, "error") === false) {
        $salida = array("estado"=>true, "msg"=>"");
    }
    else {
        $salida = array("estado"=>false, "msg"=>"");
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MEGAROLLER | Fábrica de Cortinas Roller</title>

    <?php include 'php/links-header.php'; ?>

</head>
<body>
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <?php include 'php/header.php'; ?>

            <div class="container-full">
                <h1 style="min-height: 46.5vh; padding: 15vh 0;">Muchas gracias por su compra!</h1>
            </div>
            <!-- /.CONTENIDO -->

            <?php include 'php/footer.php'; ?>
        </div>
        <!-- /#page-content-wrapper --> 
        <?php include 'php/sidebar.php'; ?>
    </div>
    <!-- /#wrapper --> 

    <?php include 'php/scripts-footer.php'; ?>
    
</body>
</html>
