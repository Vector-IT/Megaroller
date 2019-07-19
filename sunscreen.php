<?php
	session_start();
	require_once 'php/conexion.php';

	   //Productos
	$strSQL = "SELECT NumeProd, NombProd, ImpoVent, CantProd";
	$strSQL.= $crlf."FROM productos";
	$strSQL.= $crlf."WHERE NumeProd IN (SELECT NumeProd FROM productoscategorias WHERE NumeCate = 2)";
	$strSQL.= $crlf."AND NumeEsta = 1";
	$productos = cargarTabla($strSQL);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cortina Roller Sunscreen 5% - MEGAROLLER | Fábrica de Cortinas Roller</title>

    <?php include 'php/links-header.php'; ?>

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script src="js/productos.js"></script>

</head>
<body>
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php include 'php/header.php'; ?>
            <!-- CONTENIDO -->
            <div class="container">
            <div class="row noMargin">
                <h1 class="alignCenter">Cortinas Roller Sunscreen 5% <img src="./img/iconos_0003_roller.png" style="height: 30px; margin-top: -5px;"></h1>
                    <div class="col-sm-6">
                        <div class="carousel slide article-slide carousel-fade" id="article-photo-carousel" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner cont-slider">
                                <div class="item active">
                                    <img alt="" title="" src="./img/item-producto/sunscreen/foto-blanco-blanco.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/sunscreen/foto-blanco-beige.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/sunscreen/foto-blanco-gris.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/sunscreen/foto-beige-beige.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/sunscreen/foto-beige-negro.jpg">
                                </div>

                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/sunscreen/foto-negro-negro.jpg">
                                </div>

                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="active inpColor" data-value="Blanco/Blanco" data-slide-to="0" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/sunscreen/color-blanco-blanco.jpg">
                                    <p class="nombreColor">BLANCO/BLANCO</p>
                                </li>
                                <li class="inpColor" data-value="Beige/Beige" data-slide-to="1" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/sunscreen/color-blanco-beige.jpg">
                                    <p class="nombreColor">BLANCO/BEIGE</p>
                                </li>
                                <li class="inpColor" data-value="Blanco/Gris" data-slide-to="2" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/sunscreen/color-blanco-gris.jpg">
                                    <p class="nombreColor">BLANCO/GRIS</p>
                                </li>
                                <li class="inpColor" data-value="Beige/Beige" data-slide-to="3" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/sunscreen/color-beige-beige.jpg">
                                    <p class="nombreColor">BEIGE/BEIGE</p>
                                </li>
                                <li class="inpColor" data-value="Beige/Negro" data-slide-to="4" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/sunscreen/color-beige-negro.jpg">
                                    <p class="nombreColor">BEIGE/NEGRO</p>
                                </li>
                                <li class="inpColor" data-value="Negro/Negro" data-slide-to="5" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/sunscreen/color-negro-negro.jpg">
                                    <p class="nombreColor">NEGRO/NEGRO</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6 info-producto">
                        <h2 class="nombre-producto">Roller Sunscreen <span style="font-family: 'BentonSans-Light' !important;">5</span>%</h2>
                        <h5 class="border">SELECCIONA EL COLOR</h5>
                        <div class="espacio-indicadores"></div>
                        <div style="margin-left:18px;margin-top: 15px;margin-bottom: 15px;"><strong>RECOMENDACIÓN vea como calcular la medida justa para su cortina<button type="button" class="btn-click" data-toggle="modal" data-target="#medidas">click aquí</button></strong></div>
                        <div class="caracteristicas">
                            <h5 class="border">TIPO DE MONTAJE</h5>
                            <label class="radio-inline"><input type="radio" name="Montaje" value="Interior" checked style="margin-top: 15px;">Interior <img alt="" src="./img/item-producto/montaje-interior.png" style="margin-left: 5px; margin-right: 30px;" width="30px"></label>
                            <label class="radio-inline"><input type="radio" name="Montaje" value="Exterior" style="margin-top: 15px;">Exterior <img alt="" src="./img/item-producto/montaje-exterior.png" style="margin-left: 5px; margin-right: 30px;" width="30px"></label>
                            <h5>MEDIDAS ESTÁNDAR</h5>
                            <?php
                                $strSalida = "";
                                while ($fila = $productos->fetch_assoc()) {
                                    //Categorias
                                    $filtroCategorias = ' OR pf.ValoFilt = 1';

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
                                    $strSQL.= $crlf."AND (((pf.NumeTipoFilt IS NULL OR pf.NumeTipoFilt = 1) AND (pf.ValoFilt IS NULL OR pf.ValoFilt = {$fila["NumeProd"]}))";
                                    //Filtro por categoría
                                    $strSQL.= $crlf."OR ((pf.NumeTipoFilt IS NULL OR pf.NumeTipoFilt = 2) AND (pf.ValoFilt IS NULL {$filtroCategorias})))";

                                    $promociones = cargarTabla($strSQL);

                                    $impoUnit = $fila["ImpoVent"];

                                    if ($promociones->num_rows > 0) {
                                        while ($promo = $promociones->fetch_assoc()) {
                                            switch ($promo["NumeTipoProm"]) {
                                                case '1': //Porcentaje de descuento
                                                    $impoUnit = number_format($impoUnit * (100 - $promo["ValoProm"]) / 100, 2);
                                                    break;

                                                case '2': //Monto de descuento
                                                    if ($impoUnit < floatval($promo["ValoProm"])) {
                                                        $impoUnit = 0;
                                                    }
                                                    else {
                                                        $impoUnit = number_format($impoUnit - $promo["ValoProm"], 2);
                                                    }
                                                    break;
                                            }
                                        }
                                    }

                                    if ($strSalida == "") {
                                        $strSalida.= $crlf.'<label class="radio-inline radio-margenes"><input type="radio" name="NumeProd" value="'.$fila["NumeProd"].'" data-precio="'.$impoUnit.'" checked onclick="verPrecio()">'.$fila["NombProd"].' - $'.$impoUnit.'</label>';
                                    }
                                    else {
                                        $strSalida.= $crlf.'<label class="radio-inline radio-margenes"><input type="radio" name="NumeProd" value="'.$fila["NumeProd"].'" data-precio="'.$impoUnit.'" onclick="verPrecio()">'.$fila["NombProd"].' - $'.$impoUnit.'</label>';
                                    }
                                }
                                echo $strSalida;
                            ?>
                            <h5 class="top20">CONTROL DE POSICIÓN</h5>
                            <label class="radio-inline"><input type="radio" name="Control" value="Derecha" checked>Derecha <img alt="" src="./img/item-producto/control-de-posicion-icon_derecha.png" style="margin-left: 5px; margin-right: 30px;" width="30px"></label>
                            <label class="radio-inline"><input type="radio" name="Control" value="Izquierda">Izquierda <img alt="" src="./img/item-producto/control-de-posicion-icon_izquierda.png" style="margin-left: 5px; margin-right: 30px;" width="30px"> </label>
                        </div>
                        <a type="button" href="#contacto" class="btn-consultar" data-toggle="modal" data-target="#consultar">Consultar por medidas especiales</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="info-producto">
                            <h3>Descripción</h3>
                            <p>Nuestras Cortinas Roller Sunscreen son fabricadas con la más alta calidad, este material es importado de EEUU o Europa y ofrece ventajas con respecto a otras telas, dado que filtra y modera la entrada de luz natural protegiendo el ambiente y su mobiliario de los rayos UV, ayuda a regular la temperatura ambiente y otorga una agradable decoración y estética.
                            Su tela de apariencia microperforada también brinda la posibilidad de disfrutar de espacios más frescos e íntimos, permitiendo ver a través de ella y contemplar el paisaje exterior.

                            </p>
                                       <ul class="relacionados">
                                          <li>
                                             <a href="#lightbox-fotos-producto" data-toggle="modal" data-slide-to="0">
                                                <img alt="" src="./img/item-producto/sunscreen/thumb-sunscreen1.jpg">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-fotos-producto" data-toggle="modal" data-slide-to="1">
                                                <img alt="" src="./img/item-producto/sunscreen/thumb-sunscreen2.jpg">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-fotos-producto" data-toggle="modal" data-slide-to="2">
                                                <img alt="" src="./img/item-producto/sunscreen/thumb-sunscreen3.jpg">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-fotos-producto" data-toggle="modal" data-slide-to="3">
                                                    <img alt="" src="./img/item-producto/sunscreen/thumb-sunscreen4.jpg">
                                             </a>
                                          </li>
                                       </ul>
                                                                                 <!-- Modal -->
                                          <div class="modal fade and carousel slide" id="lightbox-fotos-producto">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                        </button>
                                                   </div>
                                                   <h4 class="modal-title" style="color: white;">Sunscreen</h4>
                                                   <div class="modal-body">
                                     <div id="carousel-fotos-producto" class="carousel slide" data-ride="carousel">
                                             <!-- Indicators -->
                                             <ol class="carousel-indicators">
                                                <li data-target="#carousel-fotos-producto" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-fotos-producto" data-slide-to="1"></li>
                                                <li data-target="#carousel-fotos-producto" data-slide-to="2"></li>
                                                <li data-target="#carousel-fotos-producto" data-slide-to="3"></li>
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/item-producto/sunscreen/sunscreen1.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/item-producto/sunscreen/sunscreen2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/item-producto/sunscreen/sunscreen3.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/item-producto/sunscreen/sunscreen4.jpg" alt="">
                                                </div>
                                             </div>
                                          </div>

                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section">
                            <h3>Presupuesto</h3>
                            <p class="precio" id="ImpoUnit"></p>
                            <div>
                                <p class="cantidad">Cantidad</p>
                                <div id="cantidad">
                                    <button class="btn-minus"><span class="glyphicon glyphicon-minus"></span></button>
                                    <input id="CantProd" value="1" />
                                    <button class="btn-plus"><span class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                            <!-- <button id="btnAgregar" type="button" class="hamburger animated fadeInLeft btn-agregar-carrito hide" data-toggle="offcanvas">Agregar a carro de compras</button>  -->
                            <button id="btnAgregar" type="button" onclick="agregarProd()" class="animated fadeInLeft btn-agregar-carrito" >Agregar a carro de compras</button>
                        </div>
                        <ul class="redes-sociales">
                        <?php
                              if ($face != '') echo $crlf.'<li><a href="'. $face .'" target="_blank"><img class="" src="./img/item-producto/redes-fb.png" alt=""></a></li>';
                              if ($twit != '') echo $crlf.'<li><a href="'. $twit .'" target="_blank"><img class="" src="./img/item-producto/redes-tw.png" alt=""></a></li>';
                              if ($inst != '') echo $crlf.'<li><a href="'. $inst .'" target="_blank"><img class="" src="./img/item-producto/redes-inst.png" alt=""></a></li>';
                              if ($goog != '') echo $crlf.'<li><a href="'. $goog .'" target="_blank"><img class="" src="./img/item-producto/redes-g.png" alt=""></a></li>';
                        ?>
                        </ul>
                    </div>
                </div>
                <div class="row bottom40">
                    <div class="col-md-4 text-center" style="font-family: 'BentonSans-Medium'; font-size: 16px;">
                        <img style="opacity: 0.6;" class="img-center top40" src="./img/home/_0003_icono2.png" width="135px" height="135px"/>
                        <div style="margin: 15px;"><button type="button"  data-toggle="modal" data-target="#medidas"><strong>¿CÓMO TOMAR MEDIDAS?</strong><br/> Lee AQUI el instructivo para tomar la medida correcta de tu cortina.</button></div>
                    </div>
                    <div class="col-md-4 text-center" style="font-family: 'BentonSans-Medium'; font-size: 16px;">
                        <img style="opacity: 0.6;" class="img-center top40" src="./img/home/_0004_icono1.png" width="135px" height="135px"/>
                        <div style="margin: 15px;"><strong>¿DUDAS?</strong><br/> ¡Comunicate con un asesor ahora! <br/>
                            0351 471 51 55
                        </div>
                    </div>
                    <div class="col-md-4 text-center" style="font-family: 'BentonSans-Medium'; font-size: 16px;">
                        <img style="opacity: 0.6;" class="img-center top40" src="./img/home/_0000_icono5.png" width="135px" height="135px"/>
                        <div style="margin: 15px;"><strong>ENVÍO</strong><br/> A todo el país
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.CONTENIDO -->
            <?php include 'php/footer.php'; ?>
        </div>
        <!-- /#page-content-wrapper -->
        <?php include 'php/sidebar.php';?>
    </div>
    <!-- /#wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="contactoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>
                <h4 class="modal-title" id="contactoModalLabel">Consulta por medidas especiales</h4>
                <div class="modal-body">
                    <div class="container-fluid formulario">
                        <!-- Formulario de Contacto -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                                <form id="contactForm">
                                    <div class="row control-group">
                                        <div class="form-group col-lg-6 floating-label-form-group controls">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                                            <p class="help-block text-danger"></p>
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="" id="email" required data-validation-required-message="Por favor ingresa tu email.">
                                            <p class="help-block text-danger"></p>
											<label>Localidad</label>
											<input name="location" type="text" class="form-control" placeholder="" id="location" required data-validation-required-message="Por favor ingresa tu localidad.">
                                 			<p class="help-block text-danger"></p>
                                            <label>Teléfono</label>
                                            <input type="tel" class="form-control" placeholder="" id="phone" required data-validation-required-message="Por favor ingresa tu teléfono.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group col-lg-6 floating-label-form-group controls">
                                            <label>Consulta</label>
                                            <textarea rows="5" class="form-control" placeholder="" id="message" required data-validation-required-message="Por favor ingresa tu consulta."></textarea>
                                            <p class="help-block text-danger"></p>
                                            <button type="submit" class="btn btn-enviar">Enviar</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="success"></div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2"> </div>
                            <div class="col-lg-8 border-top">
                                <img class="img-center" src="./img/logo.jpg" alt="">
                            </div>
                            <div class="col-lg-2"> </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 alignCenter">
						<p class="vContacto"><span>FÁBRICA Y SHOWROOM</span><br/>
							Bedoya 178, Barrio Cofico, Córdoba<br/>
							0351 471 51 55 / 0351 157 319 051<br/>
							<a href="mailto:fabrica@megarollercortinas.com" target="_top">Email: fabrica@megarollercortinas.com</a><br/>
							Lunes a viernes de 9hs a 18 hs, sábados de 9hs a 13 hs<br/>
						</p>
						<p class="vContacto"><span>LOCAL ZONA NORTE</span><br/>
                            Paseo Acaece, Valle Escondido Local 11<br/>
							0351 156 135 314<br/>
							<a href="mailto:info@megarollercortinas.com" target="_top">Email: info@megarollercortinas.com</a><br/>
							Lunes a sábados de 9 a 14hs y 17 a 22hs<br/>
						</p>
                        <p class="vContacto"><span>ZONA SUR</span><br/>
            Av. Valparaiso 3790 (Frente Jockey Club)<br/>
							0351 157 319 666<br/>
							<a href="mailto:valparaiso@megarollercortinas.com" target="_top">Email: valparaiso@megarollercortinas.com</a><br/>
							Lunes a viernes de 9 a 19hs - Sábados 9 a 13:30hs<br/>
						</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'php/scripts-footer.php'; ?>
    <script>
        // Open Modal
        $(document).ready(function () {

            $('#medidas').modal('show');

        });
    </script>
    <!-- Contact Form JavaScript -->
    <!-- <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script> -->
</body>
</html>