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
    <title>Cortina Roller Sunscreen - MEGAROLLER | Fábrica de Cortinas Roller</title>

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
                <div class="row">
                    <div class="col-sm-6">
                        <a class="modal-btn" data-toggle="modal" data-target="#fullGallery"><img alt="" src="./img/item-producto/icon-plus.jpg"></a>
                        <!-- Modal -->
                        <div class="modal fade modal-fullscreen" id="fullGallery" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="carousel slide article-slide" id="article-photo-carousel2">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner cont-slider">
                                                <div class="item active">
                                                    <img alt="" title="" src="./img/item-producto/blackout1.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout2.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout3.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout4.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout6.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout7.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout9.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout10.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout11.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout12.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout13.jpg">
                                                </div>
                                                <div class="item">
                                                    <img alt="" title="" src="./img/item-producto/blackout14.jpg">
                                                </div>
                                            </div>
                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#article-photo-carousel2" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="right carousel-control" href="#article-photo-carousel2" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Siguiente</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel slide article-slide carousel-fade" id="article-photo-carousel" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner cont-slider">
                                <div class="item active">
                                    <img alt="" title="" src="./img/item-producto/destacada1.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/destacada2.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/destacada3.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/destacada4.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/destacada6.jpg">
                                </div>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="active inpColor" data-value="Blanco" data-slide-to="0" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/colores_r2_c2.jpg">
                                </li>
                                <li class="inpColor" data-value="Natural" data-slide-to="1" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/colores_r2_c4.jpg">
                                </li>
                                <li class="inpColor" data-value="Beige" data-slide-to="2" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/colores_r2_c6.jpg">
                                </li>
                                <li class="inpColor" data-value="Gris" data-slide-to="3" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/colores_r2_c8.jpg">
                                </li>
                                <li class="inpColor" data-value="Negro" data-slide-to="4" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/colores_r3_c4.jpg">
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6 top40 info-producto">
                        <h1 class="nombre-producto">Roller Sunscreen</h1>
                        <h5 class="border">SELECCIONA EL COLOR</h5>
                        <div class="espacio-indicadores"></div>
                        <div class="cc-selector-2" style="display:none !important;">
                            <input id="color1" type="radio" name="creditcard" value="color1" />
                            <label class="drinkcard-cc" for="color1" style="background-image:url(./img/item-producto/colores_r2_c2.jpg);"></label>
                            <input  checked="checked" id="color2" type="radio" name="creditcard" value="color2" />
                            <label class="drinkcard-cc" style="background-image:url(./img/item-producto/colores_r2_c4.jpg);" for="color2"></label>
                            <input  checked="checked" id="color3" type="radio" name="creditcard" value="color3" />
                            <label class="drinkcard-cc" style="background-image:url(./img/item-producto/colores_r2_c6.jpg);" for="color3"></label>
                            <input  checked="checked" id="color4" type="radio" name="creditcard" value="color4" />
                            <label class="drinkcard-cc" style="background-image:url(./img/item-producto/colores_r2_c8.jpg);" for="color4"></label>
                            <input  checked="checked" id="color5" type="radio" name="creditcard" value="color5" />
                            <label class="drinkcard-cc" style="background-image:url(./img/item-producto/colores_r3_c2.jpg);" for="color5"></label>
                            <input  checked="checked" id="color6" type="radio" name="creditcard" value="color6" />
                            <label class="drinkcard-cc" style="background-image:url(./img/item-producto/colores_r3_c4.jpg);" for="color6"></label>
                        </div>
                        <div style="margin-left:18px;margin-top: 15px;margin-bottom: 15px;"><strong>RECOMENDACIÓN vea como calcular la medida justa para su cortina<button type="button" class="btn-click" data-toggle="modal" data-target="#medidas">click aquí</button></strong></div>
                        <!-- Modal Medidas -->
                        <div class="modal fade" id="medidas" tabindex="-1" role="dialog" aria-labelledby="medidasLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                        
                                    </div>
                                    <h4 class="modal-title" id="myModalLabel" style="color:#FFF;">Medidas de aberturas</h4>
                                    <div class="modal-body">
                                        <img class="img-responsive img-center" alt="" src="./img/item-producto/medidas-1.jpg">
                                        <img class="img-responsive img-center"  alt="" src="./img/item-producto/medidas-2.jpg">
                                        <img class="img-responsive img-center"  alt="" src="./img/item-producto/medidas-3.jpg">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="caracteristicas">
                            <h5 class="border">TIPO DE MONTAJE</h5>
                            <label class="radio-inline"><input type="radio" name="Montaje" value="Interior" checked style="margin-top: 15px;">Interior <img alt="" src="./img/item-producto/montaje-interior.png" style="margin-left: 5px; margin-right: 30px;" width="30px"></label>
                            <label class="radio-inline"><input type="radio" name="Montaje" value="Exterior" style="margin-top: 15px;">Exterior <img alt="" src="./img/item-producto/montaje-exterior.png" style="margin-left: 5px; margin-right: 30px;" width="30px"></label>
                            <h5>MEDIDAS ESTÁNDAR</h5>
                            <?php 
                                $strSalida = "";
                                while ($fila = $productos->fetch_assoc()) {
                                    if ($strSalida == "") {
                                        $strSalida.= $crlf.'<label class="radio-inline radio-margenes"><input type="radio" name="NumeProd" value="'.$fila["NumeProd"].'" data-precio="'.$fila["ImpoVent"].'" checked onclick="verPrecio()">'.$fila["NombProd"].' - $'.$fila["ImpoVent"].'</label>';
                                    }
                                    else {
                                        $strSalida.= $crlf.'<label class="radio-inline radio-margenes"><input type="radio" name="NumeProd" value="'.$fila["NumeProd"].'" data-precio="'.$fila["ImpoVent"].'" onclick="verPrecio()">'.$fila["NombProd"].' - $'.$fila["ImpoVent"].'</label>';
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
                            <h2>Descripción</h2>
                            <p>Nuestras Cortinas Roller Sunscreen son fabricadas con la más alta calidad, este material es importado de EEUU o Europa y ofrece ventajas con respecto a otras telas, dado que filtra y modera la entrada de luz natural protegiendo el ambiente y su mobiliario de los rayos UV, ayuda a regular la temperatura ambiente y otorga una agradable decoración y estética.<br/>
                                Su tela de apariencia microperforada también brinda la posibilidad de disfrutar de espacios más frescos e íntimos, permitiendo ver a través de ella y contemplar el paisaje exterior.
                            </p>
                            <h4>OTRAS OPCIONES</h4>
                            <ul class="relacionados">
                                <li><a href="#"><img alt="" src="./img/item-producto/opciones_r2_c1.gif"></a></li>
                                <li><a href="#"><img alt="" src="./img/item-producto/opciones_r2_c3.gif"></a></li>
                                <li><a href="#"><img alt="" src="./img/item-producto/opciones_r2_c5.gif"></a></li>
                                <li><a href="#"><img alt="" src="./img/item-producto/opciones_r2_c7.gif"></a></li>
                            </ul>
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
                            <!-- <a href="#" type="button" class="hamburger animated fadeInLeft btn-agregar-carrito" data-toggle="offcanvas">Agregar a carro de compras</a>  -->
                            <button id="btnAgregar" type="button" onclick="agregarProd()" class="animated fadeInLeft btn-agregar-carrito" >Agregar a carro de compras</button>
                        </div>
                        <ul class="redes-sociales">
                            <li><a href="#"><img alt="" src="./img/item-producto/redes-fb.png"></a></li>
                            <li><a href="#"><img alt="" src="./img/item-producto/redes-tw.png"></a></li>
                            <li><a href="#"><img alt="" src="./img/item-producto/redes-g.png"></a></li>
                            <li><a href="#"><img alt="" src="./img/item-producto/redes-pin.png"></a></li>
                        </ul>
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
                                <form name="sentMessage" id="contactForm" novalidate>
                                    <div class="row control-group">
                                        <div class="form-group col-lg-6 floating-label-form-group controls">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                                            <p class="help-block text-danger"></p>
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="" id="email" required data-validation-required-message="Por favor ingresa tu email.">
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
                                <p><span>FÁBRICA Y SHOWROOM</span><br/>
                                    Urquiza 1204, Barrio Cofico, Córdoba<br/>
                                    0351 4 713048 / 0351 155 228 460<br/>
                                    <a href="mailto:ventas@megarollercortinas.com" target="_top">Email: ventas@megarollercortinas.com</a><br/>
                                    Lunes a viernes de 9hs a 15 hs,  sábados de 9hs a 13 hs<br/>
                                    +54 (0351) 446-1931
                                </p>
                                <p><span>OFICINA COMERCIAL</span><br/>
                                    Paseo del Jockey, Elias Yofre 1050 Barrio Jardín, Córdoba<br/>
                                    0351 4 64 66 60 /  0351 157 319 051<br/>
                                    <a href="mailto:ventas@megarollercortinas.com" target="_top">Email: ventas@megarollercortinas.com</a><br/>
                                    Atención de lunes a domingo de 10hs a 22 hs
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
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
</body>
</html>