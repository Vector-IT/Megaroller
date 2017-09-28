<?php 
use TodoPago\Sdk;

require_once '../php/datos.php';

$tpMerchantID = $config->buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'TP_MERCHANT_ID'");
$tpAPIKey = $config->buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'TP_API_KEY'");

//importo archivo con SDK
include_once '../../vendor/autoload.php';

define('MERCHANT', $tpMerchantID);
define('SECURITY', $tpAPIKey);

$rk = $_COOKIE['RequestKey'];
$ak = strip_tags($_GET['Answer']);
$operationid = strip_tags($_GET['operationid']);

$optionsGAA = array (     
        'Security'   => SECURITY,      
        'Merchant'   => MERCHANT,     
        'RequestKey' => $rk,       
        'AnswerKey'  => $ak // *Importante     
);  

//común a todas los métodos
$http_header = array('Authorization'=>'TODOPAGO '. $tpAPIKey);


//creo instancia de la clase TodoPago
$connector = new Sdk($http_header, "test");

$rta2 = $connector->getAuthorizeAnswer($optionsGAA);

if ($rta2['StatusCode']== -1){
	echo "<h2>OPERACION :".htmlspecialchars($operationid)." exitosa</h2>";
}else{
	header("location: error.php?operationid=$operationid");
}
?>