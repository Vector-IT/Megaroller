<?php
    use TodoPago\Sdk;

    session_start();
    require_once 'php/conexion.php';

    if (isset($_SESSION["NumeCarr"])) {
        $strSQL = $crlf."SELECT cd.CodiIden, c.NumeCarr, cd.NumeProd, cd.NombCate, cd.NombProd, cd.Peso, cd.CantProd, cd.ImpoUnit, cd.ImpoTota, cd.RutaImag, cd.SlugProd, c.FlagShip";
        $strSQL.= $crlf."FROM carritos c";
        $strSQL.= $crlf."INNER JOIN (SELECT cd.CodiIden, cd.NumeCarr, cd.NumeProd, pc.NombCate, p.NombProd, p.Peso, cd.CantProd, cd.ImpoUnit, cd.ImpoTota, pi.RutaImag, p.SlugProd";
        $strSQL.= $crlf."			FROM carritosdetalles cd";
        $strSQL.= $crlf."			INNER JOIN productos p ON cd.NumeProd = p.NumeProd";
        $strSQL.= $crlf."			INNER JOIN (SELECT NumeProd, NombCate FROM productoscategorias pc INNER JOIN categorias c ON pc.NumeCate = c.NumeCate)pc ON cd.NumeProd = pc.NumeProd";
        $strSQL.= $crlf."			LEFT JOIN productosimagenes pi ON cd.NumeProd = pi.NumeProd AND pi.NumeOrde = 1";
        $strSQL.= $crlf."		   ) cd ON c.NumeCarr = cd.NumeCarr";
        $strSQL.= $crlf."WHERE c.NumeCarr = ". $_SESSION["NumeCarr"];

        $carrito = cargarTabla($strSQL);    

        if ($carrito->num_rows == 0) {
            $carrito = false;
        }
    }
    else {
        $carrito = false;
    }
    $peso = 0;
    $subtotal = 0;
    $envio = 0;
    $bonificacion = 0;
    $total = 0;
    $ship = "1";

	//Datos usuario
	$numeUser = isset($_SESSION["NumeUser"])? $_SESSION["NumeUser"]: '';
    $numeInvi = isset($_SESSION["NumeInvi"])? $_SESSION["NumeInvi"]: '';
    
    $plataformaPago = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'PLATAFORMA DE PAGO'");

	if ($numeUser != '') {
        $strSQL = "SELECT u.NombPers, u.MailUser, u.TeleUser, u.DireUser, u.CodiPost, u.NumeProv, u.NombLoca, p.NombProv, p.CodiProv";
        $strSQL.= $crlf."FROM usuarios u";
        $strSQL.= $crlf."LEFT JOIN provincias p ON u.NumeProv = p.NumeProv";
        $strSQL.= $crlf."WHERE NumeUser = ". $numeUser;

        $datosUsuario = buscarDato($strSQL);
    
        if (isset($_SESSION["NumeCarr"])) {
            $nombPersCarr = buscarDato("SELECT NombPers FROM carritos WHERE NumeCarr = ". $_SESSION["NumeCarr"]);

            if ($nombPersCarr != '') {
                $strSQL = "SELECT u.NombPers, u.MailUser, u.TeleUser, u.DireUser, u.CodiPost, u.NumeProv, u.NombLoca, p.NombProv, p.CodiProv";
                $strSQL.= $crlf."FROM carritos u";
                $strSQL.= $crlf."LEFT JOIN provincias p ON u.NumeProv = p.NumeProv";
                $strSQL.= $crlf."WHERE NumeCarr = ". $_SESSION["NumeCarr"];
                $datosUsuario = buscarDato($strSQL);
            }
        }
	}
	elseif ($numeInvi != '') {
		$strSQL = "SELECT u.NombPers, u.MailUser, u.TeleUser, u.DireUser, u.CodiPost, u.NumeProv, u.NombLoca, p.NombProv, p.CodiProv";
		$strSQL.= $crlf."FROM invitados u";
		$strSQL.= $crlf."LEFT JOIN provincias p ON u.NumeProv = p.NumeProv";
		$strSQL.= $crlf."WHERE NumeInvi = ". $numeInvi;
		$datosUsuario = buscarDato($strSQL);
	}
	

    if ($carrito) {
        while ($fila = $carrito->fetch_assoc()) {
            $ship = $fila["FlagShip"];

            $peso+= floatval($fila["Peso"]);
            $subtotal+= floatval($fila["ImpoTota"]);
        }

        //ENVIO
        if ($ship == "1") {
            if ($datosUsuario["NumeProv"] != '' && $peso > 0) {
                if (buscarDato("SELECT COUNT(*) FROM shipping WHERE NumeProv = {$datosUsuario["NumeProv"]}") != '0') {
                    $maxPeso = buscarDato("SELECT MAX(PesoShip) PesoShip FROM shipping WHERE NumeProv = {$datosUsuario["NumeProv"]}");
                    if ($peso <= $maxPeso) {
                        $envio = floatval(buscarDato("SELECT ImpoShip FROM shipping WHERE PesoShip >= {$peso} AND NumeProv = {$datosUsuario["NumeProv"]} ORDER BY PesoShip LIMIT 1"));
                    }
                    else {
                        $envio = floatval(buscarDato("SELECT MAX(ImpoShip) FROM shipping WHERE NumeProv = {$datosUsuario["NumeProv"]} ORDER BY PesoShip LIMIT 1"));
                    }
                }
                else {
                    $maxPeso = buscarDato("SELECT MAX(PesoShip) PesoShip FROM shipping WHERE NumeProv IS NULL");
                    if ($peso <= $maxPeso) {
                        $envio = floatval(buscarDato("SELECT ImpoShip FROM shipping WHERE PesoShip >= {$peso} AND NumeProv IS NULL ORDER BY PesoShip LIMIT 1"));
                    }
                    else {
                        $envio = floatval(buscarDato("SELECT MAX(ImpoShip) FROM shipping WHERE NumeProv IS NULL ORDER BY PesoShip LIMIT 1"));
                    }
                }
            }
        }

        //PROMOCION DEL CARRITO
        $numeProm = buscarDato("SELECT NumeProm FROM carritos WHERE NumeCarr = ". $_SESSION["NumeCarr"]);
        if ($numeProm != '') {
            $strSQL = "SELECT NumeTipoProm, ValoProm";
            $strSQL.= $crlf."FROM promociones pr";
            $strSQL.= $crlf."WHERE (pr.CantPerm IS NULL OR pr.CantUtil < pr.CantPerm)";
            $strSQL.= $crlf."AND (pr.FechDesd IS NULL OR pr.FechDesd <= SYSDATE())";
            $strSQL.= $crlf."AND (pr.FechHast IS NULL OR pr.FechHast > SYSDATE())";
            $strSQL.= $crlf."AND NumeProm = ". $numeProm;
            
            $promocion = buscarDato($strSQL);

            if ($promocion != '') {
                switch ($promocion["NumeTipoProm"]) {
                    case '1': //Porcentaje de descuento
                        $bonificacion = $subtotal * $promocion["ValoProm"] / 100;
                        break;
                    
                    case '2': //Monto fijo
                        $bonificacion = $promocion["ValoProm"];
                        break;

                    case '3': //Envio gratis
                        $bonificacion = $envio;
                        break;
                }
            }
            else {
                $strSQL = "UPDATE carritos SET NumeProm = NULL WHERE NumeCarr = ". $_SESSION["NumeCarr"];
                ejecutarCMD($strSQL);
            }
        }

        $total = $subtotal - $bonificacion;

        //MERCADO PAGO
        switch ($plataformaPago) {
            case '1': //Mercado Pago
                require_once "admin/mercadopago/mercadopago.php";
                
                $mpClientID = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'MP_CLIENT_ID'");
                $mpClientSecret = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'MP_CLIENT_SECRET'");
                
                $mp = new MP($mpClientID, $mpClientSecret);
        
                if ($subtotal > 0) {
                    $preference_data = array(
                        "items" => array(
                            array(
                                "title" => "Advocatus",
                                "currency_id" => "ARS",
                                "category_id" => "Libro",
                                "picture_url" => "http://". $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != "80"? ":".$_SERVER['SERVER_PORT']: "") . $raiz ."img/logo_transparente.png",
                                "quantity" => 1,
                                "unit_price" => $subtotal + $envio - $bonificacion
                                )
                            ),
                            "external_reference" => $_SESSION["NumeCarr"],
                            "notification_url" => "http://". $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != "80"? ":".$_SERVER['SERVER_PORT']: "") . $raiz ."admin/mercadopago/notifications.php",
                            "back_urls" => array(
                                "success" => "http://". $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != "80"? ":".$_SERVER['SERVER_PORT']: "") . $raiz,
                                "pending" => "http://". $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != "80"? ":".$_SERVER['SERVER_PORT']: "") . $raiz,
                                "failure" => "http://". $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != "80"? ":".$_SERVER['SERVER_PORT']: "") . $raiz
                            )
                    );
                    
                    $preference = $mp->create_preference($preference_data);
                }
                break;
            
            case '2': //Todo Pago
                //importo archivo con SDK
                if ($datosUsuario["NombPers"] != '') {
                    include_once 'admin/todopago/vendor/autoload.php';
                    
                    $tpMerchantID = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'TP_MERCHANT_ID'");
                    $tpAPIKey = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'TP_API_KEY'");

                    //común a todas los métodos
                    $http_header = array('Authorization'=>'TODOPAGO '.$tpAPIKey,
                        'user_agent' => 'PHPSoapClient');
                    
                    //datos constantes
                    define('CURRENCYCODE', 032);
                    define('MERCHANT', $tpMerchantID);
                    define('ENCODINGMETHOD', 'XML');
                    define('SECURITY', $tpAPIKey);

                    $optionsSAR_comercio = array (
                        'Security'=> SECURITY,
                        'EncodingMethod'=>ENCODINGMETHOD,
                        'Merchant'=>MERCHANT,
                        'URL_OK'=>"http://". $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != "80"? ":".$_SERVER['SERVER_PORT']: "") . $raiz . "compraOk.php?operationid=". $_SESSION["NumeCarr"],
                        'URL_ERROR'=>"http://". $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != "80"? ":".$_SERVER['SERVER_PORT']: "") . $raiz . "compraError.php?operationid=". $_SESSION["NumeCarr"],
                    );
                    
                    $optionsSAR_operacion = array(
                        'MERCHANT'=>MERCHANT,
                        'OPERATIONID'=>$_SESSION["NumeCarr"],
                        'AMOUNT'=>number_format($subtotal + $envio - $bonificacion, 2, ".", ""),
                        'CSBTCITY'=>'Cordoba', //Ciudad de facturación, REQUERIDO.
                        'CSBTCOUNTRY'=>'AR', //País de facturación. REQUERIDO. Código ISO.
                        'CSBTCUSTOMERID'=>($numeUser != ''? $numeUser: $numeInvi), //Identificador del usuario al que se le emite la factura. REQUERIDO. No puede contener un correo electrónico.
                        'CSBTIPADDRESS'=>get_ip_address(), //IP de la PC del comprador. REQUERIDO.
                        'CSBTEMAIL'=>$datosUsuario["MailUser"], //Mail del usuario al que se le emite la factura. REQUERIDO.
                        'CSBTFIRSTNAME'=>explode(" ", $datosUsuario["NombPers"])[0] ,//Nombre del usuario al que se le emite la factura. REQUERIDO.
                        'CSBTLASTNAME'=>explode(" ", $datosUsuario["NombPers"], 2)[1], //Apellido del usuario al que se le emite la factura. REQUERIDO.
                        
                        'CSBTPHONENUMBER'=>str_replace(" ", "", 
                                            str_replace(",", "", 
                                            str_replace("-", "", 
                                            str_replace(".", "", $datosUsuario["TeleUser"])))), //Teléfono del usuario al que se le emite la factura. No utilizar guiones, puntos o espacios. Incluir código de país. REQUERIDO.
                        
                        'CSBTPOSTALCODE'=>$datosUsuario["CodiPost"], //Código Postal de la dirección de facturación. REQUERIDO.
                        'CSBTSTATE'=>$datosUsuario["CodiProv"], //Provincia de la dirección de facturación. REQUERIDO. Ver tabla anexa de provincias.
                        'CSBTSTREET1'=>$datosUsuario["DireUser"], //Domicilio de facturación (calle y nro). REQUERIDO.
                        'CSPTCURRENCY'=>'ARS', //Moneda. REQUERIDO.
                        'CSPTGRANDTOTALAMOUNT'=>number_format($subtotal + $envio - $bonificacion, 2, ".", ""), //Con decimales opcional usando el punto como separador de decimales. No se permiten comas, ni como separador de miles ni como separador de decimales. REQUERIDO. (Ejemplos:$125,38-> 125.38 $12-> 12 o 12.00)
                        'CSMDD8'=>'Y', //Usuario Guest? (Y/N). En caso de ser Y, el campo CSMDD9 no deberá enviarse. OPCIONAL.
                        'CSSTCITY'=>$datosUsuario["NombLoca"], //Ciudad de envío de la orden. REQUERIDO.
                        'CSSTCOUNTRY'=>'AR', //País de envío de la orden. REQUERIDO.
                        'CSSTEMAIL'=>$datosUsuario["MailUser"], //Mail del destinatario, REQUERIDO.
                        'CSSTFIRSTNAME'=>explode(" ", $datosUsuario["NombPers"])[0], //Nombre del destinatario. REQUERIDO.
                        'CSSTLASTNAME'=>explode(" ", $datosUsuario["NombPers"], 2)[1], //Apellido del destinatario. REQUERIDO.
                        'CSSTPHONENUMBER'=>str_replace(" ", "", 
                                            str_replace(",", "", 
                                            str_replace("-", "", 
                                            str_replace(".", "", $datosUsuario["TeleUser"])))), //Número de teléfono del destinatario. REQUERIDO.
                        'CSSTPOSTALCODE'=>$datosUsuario["CodiPost"], //Código postal del domicilio de envío. REQUERIDO.
                        'CSSTSTATE'=>$datosUsuario["CodiProv"], //Provincia de envío. REQUERIDO. Son de 1 caracter
                        'CSSTSTREET1'=>$datosUsuario["DireUser"], //Domicilio de envío. REQUERIDO.
                        // 'CSMDD12'=>'',//Shipping DeadLine (Num Dias). NO REQUERIDO.
                        // 'CSMDD13'=>'',//Método de Despacho. NO REQUERIDO.
                        // 'CSMDD14'=>'',//Customer requires Tax Bill ? (Y/N). NO REQUERIDO.
                        // 'CSMDD15'=>'',//Customer Loyality Number. NO REQUERIDO.
                        // 'CSMDD16'=>'',//Promotional / Coupon Code. NO REQUERIDO.

                        //Retail: datos a enviar por cada producto, los valores deben estar separados con #:
                        'CSITPRODUCTCODE'=>'default', //Código de producto. REQUERIDO. Valores posibles(adult_content;coupon;default;electronic_good;electronic_software;gift_certificate;handling_only;service;shipping_and_handling;shipping_only;subscription)
                        'CSITPRODUCTDESCRIPTION'=>'Megaroller', //Descripción del producto. REQUERIDO.
                        'CSITPRODUCTNAME'=>'Megaroller', //Nombre del producto. REQUERIDO.
                        'CSITPRODUCTSKU'=>$_SESSION["NumeCarr"], //Código identificador del producto. REQUERIDO.
                        'CSITTOTALAMOUNT'=>number_format($subtotal + $envio - $bonificacion, 2, ".", ""), //CSITTOTALAMOUNT=CSITUNITPRICE*CSITQUANTITY "999999[.CC]" Con decimales opcional usando el punto como separador de decimales. No se permiten comas, ni como separador de miles ni como separador de decimales. REQUERIDO.
                        'CSITQUANTITY'=>'1', //Cantidad del producto. REQUERIDO.
                        'CSITUNITPRICE'=>number_format($subtotal + $envio - $bonificacion, 2, ".", ""), //Formato Idem CSITTOTALAMOUNT. REQUERIDO.
                    );

                    //creo instancia de la clase TodoPago
                    $connector = new Sdk($http_header, "prod");

                    $rta = $connector->sendAuthorizeRequest($optionsSAR_comercio, $optionsSAR_operacion);
                    if($rta['StatusCode'] != -1) {
                        //Error
                        $tp_Error = $rta['StatusMessage'];
                    }
                    else {
                        setcookie('RequestKey',$rta["RequestKey"],  time() + (86400 * 30), "/");
                        $tp_URL = $rta["URL_Request"];
                    }
                }
                break;
        }
        
        $carrito->data_seek(0);
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
    <title>Mi Carrito - MEGAROLLER | Fábrica de Cortinas Roller</title>

    <?php include 'php/links-header.php'; ?>

    <script>
        function quitarProd1(strID) {
            $.post("php/carritosProcesar.php", { 
                "operacion": "2",
                "CodiIden": strID,
                },
                function (data) {
                    if (data.estado === true) {
                        location.reload();
                    }
                }
            );
        }

        function envio() {
            $.post("php/carritosProcesar.php", { 
                "operacion": "3"
                },
                function (data) {
                    if (data.estado === true) {
                        location.reload();
                    }
                }
            );
        }
    </script>
</head>
<body>

<?php include 'php/header.php'; ?>

        <!-- ORDEN DE COMPRA -->
        <div id="mi-carrito" class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Mi carrito de compras</h1>
            </div>
            
            <?php 
                $strSalida = "";
                switch ($plataformaPago) {
                    case '1': //Mercado Pago
                        if (isset($preference)) {
                            if ($ship == 1 && $envio == 0) {
                                $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos de envío y Comprar</a>';
                            }
                            elseif(!isset($datosUsuario) || $datosUsuario["NombPers"] == '') {
                                $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos personales y Comprar</a>';
                            }
                            elseif ($subtotal > 0) {
                                $strSalida.= $crlf.'<div class="col-lg-6">';
                                $strSalida.= $crlf.'<a href="'.$preference['response']['init_point'].'" name="MP-Checkout" class="btn-carrito-negro pushRight" onclick="compra()">Realizar compra</a>';
                                $strSalida.= $crlf.'</div>';
                            }
                        }
                        break;
                    
                    case '2': //Todo Pago
                        if (isset($tp_URL)) {
                            if ($ship == 1 && $envio == 0) {
                                $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos de envío y Comprar</a>';
                            }
                            elseif(!isset($datosUsuario) || $datosUsuario["NombPers"] == '') {
                                $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos personales y Comprar</a>';
                            }
                            elseif ($subtotal > 0) {
                                $strSalida.= $crlf.'<div class="col-lg-6">';
                                $strSalida.= $crlf.'<a href="'.$tp_URL.'" name="TP-Checkout" class="btn-carrito-negro pushRight" onclick="compra()">Realizar compra</a>';
                                $strSalida.= $crlf.'</div>';
                            }
                        }
                        break;
                }
                echo $strSalida;
            ?>
        </div>

        <div class="row hidden-xs">
            <div class="col-sm-3 noPadding">
                <h2>Producto</h2>
            </div>
            <div class="col-sm-3 noPadding">		
                <h2>Descripción</h2>
            </div>
            <div class="col-sm-2 noPadding text-right">		
                <h2>Cantidad</h2>
            </div>
            <div class="col-sm-2 noPadding text-right">
                <h2>Precio</h2>
            </div>
            <div class="col-sm-2 noPadding text-right">
                <h2>Total</h2>
            </div>
        </div>
        
        <?php 
        if (!$carrito) {
            echo '<h4>Su carrito está vacío</h4>';
        } else {
            $strHTML = "";

            while($fila = $carrito->fetch_assoc()) {
                $strHTML.= $crlf.'<div class="row">';
                $strHTML.= $crlf.'    <div class="col-sm-3 noPadding">';
                $strHTML.= $crlf.'        <h2 class="visible-xs">Producto</h2>';
                $strHTML.= $crlf.'        <article>';
                $strHTML.= $crlf.'            <a href="producto/'. $fila["SlugProd"] .'.php"><img class="img-producto-carrito" src="admin/'. $fila["RutaImag"] .'" alt=""></a>';
                $strHTML.= $crlf.'        </article>';
                $strHTML.= $crlf.'    </div>';
                $strHTML.= $crlf.'    <div class="col-sm-3 noPadding">';
                $strHTML.= $crlf.'        <h2 class="visible-xs">Descripción</h2>';
                $strHTML.= $crlf.'        <article>';
                $strHTML.= $crlf.'            <p class="info-producto">'. $fila["NombCate"].' - '.$fila["NombProd"] .'</p>';
                $strHTML.= $crlf.'        </article>';
                $strHTML.= $crlf.'    </div>';
                $strHTML.= $crlf.'    <div class="col-sm-2 noPadding">';
                $strHTML.= $crlf.'        <h2 class="visible-xs">Cantidad</h2>';
                $strHTML.= $crlf.'        <article id="1">';
                $strHTML.= $crlf.'            <p class="info-producto text-right">'. $fila["CantProd"] .'</p>';
                $strHTML.= $crlf.'        </article>';
                $strHTML.= $crlf.'    </div>';
                $strHTML.= $crlf.'    <div class="col-sm-2 noPadding">';
                $strHTML.= $crlf.'        <h2 class="visible-xs">Precio</h2>';
                $strHTML.= $crlf.'        <article id="1">';
                $strHTML.= $crlf.'            <p class="info-producto text-right">$ '. $fila["ImpoUnit"] .'</p>';
                $strHTML.= $crlf.'        </article>';
                $strHTML.= $crlf.'    </div>';
                $strHTML.= $crlf.'    <div class="col-sm-2 noPadding">';
                $strHTML.= $crlf.'        <h2 class="visible-xs">Total</h2>';
                $strHTML.= $crlf.'        <article id="1">';
                $strHTML.= $crlf.'            <p class="info-producto text-right">$ '. $fila["ImpoTota"] .'</p>';
                $strHTML.= $crlf.'        </article>';
                $strHTML.= $crlf.'    </div>';
                $strHTML.= $crlf.'</div>';
                $strHTML.= $crlf.'<div class="row">';
                $strHTML.= $crlf.'    <div class="eliminar-item"><span class="clickable" onclick="quitarProd1('. $fila["CodiIden"] .');">ELIMINAR ITEM X</span></div>';
                $strHTML.= $crlf.'</div>';
            }
            echo $strHTML;
            $total = $subtotal + $envio - $bonificacion;

            $strSQL = "UPDATE carritos SET ImpoSubt = {$subtotal}, ImpoDesc = {$bonificacion}, ImpoShip = {$envio}, ImpoTota = {$total} WHERE NumeCarr = ". $_SESSION["NumeCarr"];
            ejecutarCMD($strSQL);
        }
        ?>
        <div class="row">
            <div class="col-lg-6">
				<h4>Datos de envío y contacto</h4>
                <?php 
                    if (isset($tp_Error)) {
                        $strSalida.= $crlf.'<p><strong>'.$tp_Error.'</strong></p>';
                        echo $strSalida;
                    }

					if (isset($datosUsuario)) {
						$strSalida = '';
						if ($subtotal > 0 && $envio == 0 && $ship == "1") {
							$strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro" data-toggle="modal">Cargar datos de envío y Comprar</a>';
							$strSalida.= $crlf.'<a href="javascript:void(0);" class="btn-carrito-negro" onclick="envio()">Coordinar Envío / Retiro en tienda</a>';
						}
						else {
                            if ($ship == "1") {
                                $strSalida.= $crlf.'<div><strong>ENVIO A DOMICILIO</strong></div>';
                            }
                            else {
                                $strSalida.= $crlf.'<div><strong>COORDINAR ENVIO / RETIRO EN TIENDA</strong></div>';
                            }
							$strSalida.= $crlf.'<div><strong>Nombre completo: </strong> '.$datosUsuario["NombPers"].'</div>';
							$strSalida.= $crlf.'<div><strong>Teléfono: </strong> '.$datosUsuario["TeleUser"].'</div>';
							$strSalida.= $crlf.'<div><strong>Mail: </strong> '.$datosUsuario["MailUser"].'</div>';
							$strSalida.= $crlf.'<div><strong>Dirección: </strong> '.$datosUsuario["DireUser"].'</div>';
							$strSalida.= $crlf.'<div><strong>Código postal: </strong> '.$datosUsuario["CodiPost"].'</div>';
							$strSalida.= $crlf.'<div><strong>Localidad: </strong> '.$datosUsuario["NombLoca"].'</div>';
							$strSalida.= $crlf.'<div><strong>Provincia: </strong> '.$datosUsuario["NombProv"].'</div>';
                            $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro" data-toggle="modal">Modificar datos</a>';
                            if ($ship == "1") {
                                $strSalida.= $crlf.'<a href="javascript:void(0);" class="btn-carrito-negro" onclick="envio()">Coordinar Envío / Retiro en tienda</a>';
                            }
                            else {
                                $strSalida.= $crlf.'<a href="javascript:void(0);" class="btn-carrito-negro" onclick="envio()">Envío a domicilio</a>';
                            }
						}
						echo $strSalida;
					}
                ?>
            </div>
            <div class="col-sm-6">
            <?php if ($carrito) {?>
                <?php if ($numeProm == '') {?>
                    <div style="border-bottom: 1px solid;">
                        <h4>Agregar código de bonificación</h4>
                        <form id="frmCuponDescuento">
                            <input id="txtCupon" class="codigo-bonificacion" required placeholder="Ingrese su código aquí"><button class="btn-carrito-negro btnCupon">Aplicar</button>
                        </form>
                        <br>
                    </div>
                <?php } else {?>
                    <div style="border-bottom: 1px solid;">
                        <form id="frmQuitarCuponDescuento">
                            <strong style="display: inline-block; width: 75%;">Anular código de bonificación</strong><button class="btn-carrito-negro btnCupon">Aplicar</button>
                        </form>
                        <br>
                    </div>
                <?php }?>
            <?php }?>

                <div class="row">
                    <div class="col-xs-6">
                        <h3>SUBTOTAL</h3>
                        <h3>ENVIO</h3>
                    <?php if ($bonificacion > 0) {?>
                        <h3>BONIFICACION</h3>
                    <?php }?>
                        <h3>TOTAL:</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="alignRight">$ <?php echo number_format($subtotal, 2)?></h3>
                        <h3 class="alignRight">$ <?php echo number_format($envio, 2)?></h3>
                    <?php if ($bonificacion > 0) {?>
                        <h3 class="alignRight">$ <?php echo number_format($bonificacion, 2)?></h3>
                    <?php }?>
                        <h3 class="alignRight">$ <?php echo number_format($total, 2)?></h3>

                    <?php 
                        $strSalida = "";
                        switch ($plataformaPago) {
                            case '1': //Mercado Pago
                                if (isset($preference)) {
                                    if ($ship == 1 && $envio == 0) {
                                        $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos de envío y Comprar</a>';
                                    }
                                    elseif(!isset($datosUsuario) || $datosUsuario["NombPers"] == '') {
                                        $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos personales y Comprar</a>';
                                    }
                                    elseif ($subtotal > 0) {
                                        $strSalida.= $crlf.'<a href="'.$preference['response']['init_point'].'" name="MP-Checkout" class="btn-carrito-negro pushRight" onclick="compra()">Realizar compra</a>';
                                    }
                                }
                                break;
                            
                            case '2': //Todo Pago
                                if (isset($tp_URL)) {
                                    if ($ship == 1 && $envio == 0) {
                                        $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos de envío y Comprar</a>';
                                    }
                                    elseif(!isset($datosUsuario) || $datosUsuario["NombPers"] == '') {
                                        $strSalida.= $crlf.'<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos personales y Comprar</a>';
                                    }
                                    elseif ($subtotal > 0) {
                                        $strSalida.= $crlf.'<a href="'.$tp_URL.'" name="TP-Checkout" class="btn-carrito-negro pushRight" onclick="compra()">Realizar compra</a>';
                                    }
                                }
                                break;
                        }
                        echo $strSalida;
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
        <!-- <div class="row">
            <div class="col-lg-6"> </div>
			<?php if (isset($preference)) {?>
				<?php if ($ship == 1 && $envio == 0) {?>
					<a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos de envío y Comprar</a>
                <?php } elseif(!isset($datosUsuario) || $datosUsuario["NombPers"] == '') { ?>
                    <a href="#mdlEnvio" class="btn-carrito-negro pushRight" data-toggle="modal">Cargar datos personales y Comprar</a>
                <?php } elseif ($subtotal > 0) {?>
					<div class="col-lg-6">
                        <a href="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout" class="btn-carrito-negro pushRight" onclick="compra()">Realizar compra</a>
                    </div>
	            <?php }?>
            <?php }?>
        </div>
        <br/><br/> -->
        <div class="col-lg-11">
            <div class="row">
                <div class="col-lg-3">
                    <p class="envios">Envíos a todo el país</p>
                </div>
                <div class="col-lg-9"><img class="img-center" src="./img/mi-carrito/formas-de-pago.png" alt="" style="max-width: 500px;"></div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        </div>
        <!-- /.ORDEN DE COMPRA -->

    </div>

    <?php include 'php/footer.php'; ?>

	<?php if (isset($datosUsuario)) {?>
	<div class="modal fade" id="mdlEnvio" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<form id="frmEnvio" method="post">
				<div class="modal-content">
					<div class="modal-header" align="center" style="padding: 5px;">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					</div>

					<h4 class="modal-title">Datos de Envío</h4>
					<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="NombPers">Nombre completo *</label>
								<input type="text" class="form-control form-custom" id="NombPers" placeholder="Nombre Completo *" value="<?php echo $datosUsuario["NombPers"]?>" required>
							</div>
							<div class="form-group">
								<label for="TeleUser">Teléfono *</label>
								<input type="text" class="form-control form-custom" id="TeleUser" placeholder="Teléfono *" value="<?php echo $datosUsuario["TeleUser"]?>" required>
							</div>
							<div class="form-group">
								<label for="MailUser">Mail *</label>   
								<input type="email" class="form-control form-custom" id="MailUser" placeholder="Correo Electrónico *" value="<?php echo $datosUsuario["MailUser"]?>" required>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="DireUser">Dirección *</label>
										<input type="text" class="form-control form-custom" id="DireUser" placeholder="Dirección *" value="<?php echo $datosUsuario["DireUser"]?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="CodiPost">Código Postal *</label>
										<input type="text" class="form-control form-custom" id="CodiPost" placeholder="Código Postal" value="<?php echo $datosUsuario["CodiPost"]?>" required>
									</div>
								</div>
                            </div>
                            <div class="form-group">
                                <label from="NombLoca">Localidad *</label>
                                <input type="text" class="form-control form-custom" id="NombLoca" placeholder="Localidad *" value="<?php echo $datosUsuario["NombLoca"]?>" required>
                            </div>
							<div class="form-group">
								<label for="NumeProv">Provincia *</label>
								<select class="form-control form-custom" id="NumeProv" required>
								<?php echo cargarCombo("SELECT NumeProv, NombProv FROM provincias ORDER BY NombProv", "NumeProv", "NombProv", $datosUsuario["NumeProv"]);?>
								</select>
							</div>
						</div>
					</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-small">Confirmar</button>
					</div>
				</div><!-- /.modal-content -->
			</form>
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->    
	<?php }?>

    <?php if ($plataformaPago == '1') {?>
    <script type="text/javascript" src="//resources.mlstatic.com/mptools/render.js"></script>
    <?php }?>
    <!-- <script type="text/javascript" src="http://mp-tools.mlstatic.com/buttons/render.js"></script> -->
    <?php include 'php/scripts-footer.php'; ?>
</body>
</html>