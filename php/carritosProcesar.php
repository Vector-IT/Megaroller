<?php
session_start();
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $operacion = $_POST["operacion"];

    $salida = [];

    switch ($operacion) {
        case "1": //Agregar
            $numeProd = $_POST["NumeProd"];
            $color = $_POST["Color"];
            $montaje = $_POST["Montaje"];
            $control = $_POST["Control"];
            $cantProd = $_POST["CantProd"];

            if (isset($_SESSION["NumeUser"])) {
                $numeUser = $_SESSION["NumeUser"];
                $numeInvi = 'null';
                $numeCarr = buscarDato("SELECT NumeCarr FROM carritos WHERE NumeEstaCarr = 1 AND NumeUser = ". $numeUser);
            }
            else {
                $params = session_get_cookie_params();
                
                $numeUser = 'null';

                if (!isset($_SESSION["NumeInvi"])) {
                    $_SESSION["NumeInvi"] = crearInvitado();
                    
                    setcookie("v-commerce_numeInvi", $_SESSION["NumeInvi"], time() + (60*60*24*365), $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
                }
                $numeInvi = $_SESSION["NumeInvi"];
                $numeCarr = buscarDato("SELECT NumeCarr FROM carritos WHERE NumeEstaCarr = 1 AND NumeInvi = ". $numeInvi);

                setcookie("v-commerce_numeInvi", $_SESSION["NumeInvi"], time() + (60*60*24*365), $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
            }
            
            $impoUnit = buscarDato("SELECT ImpoVent FROM productos WHERE NumeProd = ". $numeProd);
            $cantProdOld = 0;

            //Categorias
            $strSQL = "SELECT NumeCate FROM productoscategorias WHERE NumeProd = ". $numeProd;
            $categorias = cargarTabla($strSQL);
            $filtroCategorias = '';
            while ($fila = $categorias->fetch_assoc()) {
                $filtroCategorias.= ' OR pf.ValoFilt = '. $fila["NumeCate"];
            }

            //Promociones
            $strSQL = "SELECT NumeTipoProm, ValoProm, NumeTipoFilt, ValoFilt";
            $strSQL.= $crlf."FROM promociones pr";
            $strSQL.= $crlf."LEFT JOIN promocionesfiltros pf ON pr.NumeProm = pf.NumeProm";
            $strSQL.= $crlf."WHERE pr.NumeEsta = 1";
            $strSQL.= $crlf."AND (pr.NombCupo IS NULL OR pr.NombCupo = '')";
            $strSQL.= $crlf."AND (pr.FechDesd IS NULL OR pr.FechDesd <= SYSDATE())";
            $strSQL.= $crlf."AND (pr.FechHast IS NULL OR pr.FechHast > SYSDATE())";
            $strSQL.= $crlf."AND (pr.CantPerm IS NULL OR pr.CantUtil < pr.CantPerm)";
            $strSQL.= $crlf."AND (pf.NumeEsta = 1 OR pf.NumeEsta IS NULL)";
            //Filtro por producto
            $strSQL.= $crlf."AND (((pf.NumeTipoFilt IS NULL OR pf.NumeTipoFilt = 1) AND (pf.ValoFilt IS NULL OR pf.ValoFilt = {$numeProd}))";
            //Filtro por categoría
            $strSQL.= $crlf."OR ((pf.NumeTipoFilt IS NULL OR pf.NumeTipoFilt = 2) AND (pf.ValoFilt IS NULL {$filtroCategorias})))";

            $promociones = cargarTabla($strSQL);

            if ($promociones->num_rows > 0) {
                while ($fila = $promociones->fetch_assoc()) {
                    switch ($fila["NumeTipoProm"]) {
                        case '1': //Porcentaje de descuento
                            $impoUnit = number_format($impoUnit * (100 - $fila["ValoProm"]) / 100, 2);
                            break;

                        case '2': //Monto de descuento
                            if ($impoUnit < floatval($fila["ValoProm"])) {
                                $impoUnit = 0;
                            }
                            else {
                                $impoUnit = number_format($impoUnit - $fila["ValoProm"], 2);
                            }
                            break;
                    }
                }
            }
            
            if ($numeCarr == "") {
                //Creo un carrito nuevo
                $strSQL = $crlf."INSERT INTO carritos(FechCarr, NumeUser, NumeInvi, ImpoSubt, ImpoShip, ImpoDesc, ImpoTota, NumeEstaCarr)";
                $strSQL.= $crlf."VALUES(SYSDATE(), {$numeUser}, {$numeInvi}, 0, 0, 0, 0, 1);";

                $result = ejecutarCMD($strSQL, true);

                if ($result["estado"]) {
                    $numeCarr = $result["msg"];
                }
                else {
                    $salida = array("estado"=>false, "html"=>"Error al crear carrito!");
                    break;
                }
            }
            else {
                $strSQL = "SELECT COALESCE(CantProd, 0)";
                $strSQL.= $crlf."FROM carritosdetalles";
                $strSQL.= $crlf."WHERE NumeCarr = ". $numeCarr;
                $strSQL.= $crlf."AND NumeProd = ". $numeProd;
                $strSQL.= $crlf."AND Color = '{$color}'";
                $strSQL.= $crlf."AND Montaje = '{$montaje}'";
                $strSQL.= $crlf."AND Control = '{$control}'";
                $cantProdOld = buscarDato($strSQL);
            }
            $_SESSION["NumeCarr"] = $numeCarr;

            if (intval($cantProdOld) == 0) {
                $impoTota = $cantProd * $impoUnit;

                $strSQL = "INSERT INTO carritosdetalles(NumeCarr, NumeProd, Color, Montaje, Control, CantProd, ImpoUnit, ImpoTota)";
                $strSQL.= $crlf."VALUES({$numeCarr}, {$numeProd}, '{$color}', '{$montaje}', '{$control}', {$cantProd}, {$impoUnit}, {$impoTota});";
            }
            else {
                $cantProd+= $cantProdOld;
                $impoTota = $cantProd * $impoUnit;
                
                $strSQL = "UPDATE carritosdetalles SET";
                $strSQL.= $crlf."CantProd = {$cantProd}";
                $strSQL.= $crlf.", ImpoUnit = {$impoUnit}";
                $strSQL.= $crlf.", ImpoTota = {$impoTota}";
                $strSQL.= $crlf."WHERE NumeCarr = {$numeCarr}";
                $strSQL.= $crlf."AND NumeProd = {$numeProd}";
                $strSQL.= $crlf."AND Color = '{$color}'";
                $strSQL.= $crlf."AND Montaje = '{$montaje}'";
                $strSQL.= $crlf."AND Control = '{$control}'";
            }
            $result = ejecutarCMD($strSQL);

            if ($result["estado"]) {
                $salida = carrito();
            }
            else {
                $salida = array("estado"=>false, "html"=>"Error al agregar producto!");
            }
            break;

        case "2": //Quitar
            $codiIden = $_POST["CodiIden"];
            $numeCarr = $_SESSION["NumeCarr"];

            $strSQL = "DELETE FROM carritosdetalles WHERE CodiIden = {$codiIden}";
            $result = ejecutarCMD($strSQL);

            if ($result["estado"]) {
                $salida = carrito();
            }
            else {
                $salida = array("estado"=>false, "html"=>"Error al quitar producto!");
            }
            break;

        case "3": //Envío
            $numeCarr = $_SESSION["NumeCarr"];

            $strSQL = "UPDATE carritos SET FlagShip = NOT FlagShip WHERE NumeCarr = {$numeCarr}";
            $salida = ejecutarCMD($strSQL);

            break;
        case "4": //Cupon de descuento
            $numeCarr = $_SESSION["NumeCarr"];

            $strSQL = "SELECT pr.NumeProm, pr.NumeTipoProm, pr.ValoProm, pf.NumeTipoFilt, pf.ValoFilt";
            $strSQL.= $crlf."FROM promociones pr";
            $strSQL.= $crlf."LEFT JOIN promocionesfiltros pf ON pr.NumeProm = pf.NumeProm";
            $strSQL.= $crlf."WHERE pr.NumeEsta = 1";
            $strSQL.= $crlf."AND pr.NombCupo = '". $_POST["NombCupo"] ."'";
            $strSQL.= $crlf."AND (pr.FechDesd IS NULL OR pr.FechDesd <= SYSDATE())";
            $strSQL.= $crlf."AND (pr.FechHast IS NULL OR pr.FechHast > SYSDATE())";
            $strSQL.= $crlf."AND (pr.CantPerm IS NULL OR pr.CantUtil < pr.CantPerm)";
            $strSQL.= $crlf."AND (pf.NumeEsta = 1 OR pf.NumeEsta IS NULL)";
            $strSQL.= $crlf."AND pf.NumeTipoFilt IS NULL";
            
            $promocion = buscarDato($strSQL);

            if ($promocion != '') {
                $strSQL = "UPDATE carritos SET NumeProm = {$promocion["NumeProm"]} WHERE NumeCarr = {$numeCarr}";
                $salida = ejecutarCMD($strSQL);
            }
            else {
                $salida = false;
            }
            break;
        
        case "5": //Quitar cupon de descuento
            $numeCarr = $_SESSION["NumeCarr"];
            $strSQL = "UPDATE carritos SET NumeProm = NULL WHERE NumeCarr = {$numeCarr}";
            $salida = ejecutarCMD($strSQL);
            break;

        case "6": //Carrito
            $salida = carrito();
            break;
    }

    header('Content-Type: application/json');
    echo json_encode($salida);
}

function carrito() {
    global $crlf;

    $strHTML = "";
    $subtotal = 0;
    $bonificacion = 0;
    $total = 0;
    $cantProd = 0;

    if (isset($_SESSION["NumeCarr"]) && $_SESSION["NumeCarr"] != "") {
        $strSQL = "SELECT cd.CodiIden, cd.NumeProd, cd.NombCate, cd.NombProd, cd.CantProd, cd.ImpoUnit, cd.ImpoTota, cd.RutaImag";
        $strSQL.= $crlf."FROM carritos c";
        $strSQL.= $crlf."INNER JOIN (SELECT cd.CodiIden, cd.NumeCarr, cd.NumeProd, pc.NombCate, p.NombProd, cd.CantProd, cd.ImpoUnit, cd.ImpoTota, pi.RutaImag";
        $strSQL.= $crlf."			FROM carritosdetalles cd";
        $strSQL.= $crlf."			INNER JOIN productos p ON cd.NumeProd = p.NumeProd";
        $strSQL.= $crlf."			INNER JOIN (SELECT NumeProd, NombCate FROM productoscategorias pc INNER JOIN categorias c ON pc.NumeCate = c.NumeCate)pc ON cd.NumeProd = pc.NumeProd";
        $strSQL.= $crlf."			LEFT JOIN productosimagenes pi ON cd.NumeProd = pi.NumeProd AND pi.NumeOrde = 1";
        $strSQL.= $crlf."		   ) cd ON c.NumeCarr = cd.NumeCarr";
        $strSQL.= $crlf."WHERE c.NumeCarr = ". $_SESSION["NumeCarr"];
        $carrito = cargarTabla($strSQL);
        
        $cantProd = $carrito->num_rows;

        if ($carrito->num_rows > 0) {
            while ($fila = $carrito->fetch_assoc()) {
                $strHTML.= $crlf.'<article>';
                $strHTML.= $crlf.'	<div class="row">';
                $strHTML.= $crlf.'		<div class="col-lg-5">';
                $strHTML.= $crlf.'			<img class="img-center" alt="" src="admin/'. $fila["RutaImag"] .'">';
                $strHTML.= $crlf.'			<a href="javascript:void(0);" class="quitar" onclick="quitarProd('. $fila["CodiIden"] .')">Quitar</a>';
                $strHTML.= $crlf.'		</div>';
                $strHTML.= $crlf.'		<div class="col-lg-6">';
                $strHTML.= $crlf.'			<p class="titulo">'. $fila["NombCate"].' - '.$fila["NombProd"] .'</p>';
                $strHTML.= $crlf.'			<p class="cantidad">Cantidad: <span>'. $fila["CantProd"] .'</span></p>';
                $strHTML.= $crlf.'			<p class="precio">$ <span>'. $fila["ImpoTota"] .'</span></p>';
                $strHTML.= $crlf.'		</div>';
                $strHTML.= $crlf.'	</div>';
                $strHTML.= $crlf.'</article>';

                $subtotal+= floatval($fila["ImpoTota"]);
            }

            //Promocion por cupon
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
                    }
                }
                else {
                    $strSQL = "UPDATE carritos SET NumeProm = NULL WHERE NumeCarr = ". $_SESSION["NumeCarr"];
                    ejecutarCMD($strSQL);
                }
            }

            $total = $subtotal - $bonificacion;
        }
        else {
            $strHTML.= $crlf."<h4>Tu carrito está vacío</h4>";
            $strHTML.= $crlf."<br><br><br>";
        }

        $strSQL = "UPDATE carritos SET ImpoSubt = {$subtotal}, ImpoDesc = 0 WHERE NumeCarr = ". $_SESSION["NumeCarr"];
        ejecutarCMD($strSQL);
    }
    else {
        $strHTML.= $crlf."<h4>Tu carrito está vacío</h4>";
        $strHTML.= $crlf."<br><br><br>";
    }
    
    $salida = array(
        "estado"=>true, 
        "html"=>$strHTML,
        "subtotal"=>$subtotal,
        "bonificacion"=>$bonificacion,
        "total"=>$total,
        "cantProds"=>$cantProd
    );

    return $salida;
}