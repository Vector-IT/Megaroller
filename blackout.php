<?php
	session_start();
	require_once 'php/conexion.php';
	   
	   //Productos
	$strSQL = "SELECT NumeProd, NombProd, ImpoVent, CantProd";
	$strSQL.= $crlf."FROM productos";
	$strSQL.= $crlf."WHERE NumeProd IN (SELECT NumeProd FROM productoscategorias WHERE NumeCate = 1)";
	$strSQL.= $crlf."AND NumeEsta = 1";
	$productos = cargarTabla($strSQL);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cortina Roller Blackout - MEGAROLLER | Fábrica de Cortinas Roller</title>

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
                        <div class="carousel slide article-slide carousel-fade" id="article-photo-carousel" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner cont-slider">
                                <div class="item active">
                                    <img alt="" title="" src="./img/item-producto/blackout/foto-blanco.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/blackout/foto-natural.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/blackout/foto-beige.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/blackout/foto-gris.jpg">
                                </div>
                                <div class="item">
                                    <img alt="" title="" src="./img/item-producto/blackout/foto-negro.jpg">
                                </div>                                
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="active inpColor" data-value="Blanco" data-slide-to="0" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/blackout/color-blanco.jpg">
                                    <p class="nombreColor">BLANCO</p>
                                </li>
                                <li class="inpColor" data-value="Natural" data-slide-to="1" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/blackout/color-natural.jpg">
                                    <p class="nombreColor">NATURAL</p>
                                </li>
                                <li class="inpColor" data-value="Beige" data-slide-to="2" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/blackout/color-beige.jpg">
                                    <p class="nombreColor">BEIGE</p>
                                </li>
                                <li class="inpColor" data-value="Gris" data-slide-to="3" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/blackout/color-gris.jpg">
                                    <p class="nombreColor">GRIS</p>
                                </li>
                                <li class="inpColor" data-value="Negro" data-slide-to="4" data-target="#article-photo-carousel">
                                    <img alt="" src="./img/item-producto/blackout/color-negro.jpg">
                                    <p class="nombreColor">NEGRO</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6 top40 info-producto">
                        <h1 class="nombre-producto">Roller Blackout</h1>
                        <h5 class="border">SELECCIONA EL COLOR</h5>
                        <div class="espacio-indicadores"></div>
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
                            <p>Nuestras Cortinas Roller Blackout están fabricadas con los mejores componentes del mercado. Este tejido, de origen USA o CHINA, está constituido a base de fibra de vidrio y recubierto con 3 láminas de PVC.<br/>
                                Su factor de oscurecimiento es prácticamente del 100%, ya que la tela logra evitar completamente la filtración de luz al tiempo que resiste las altas temperaturas.
                            </p>
                                       <ul class="relacionados">
                                          <li>
                                             <a href="#lightbox-fotos-producto" data-toggle="modal" data-slide-to="0">
                                                <img alt="" src="./img/item-producto/blackout/thumb-blackout1.gif">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-fotos-producto" data-toggle="modal" data-slide-to="1">
                                                <img alt="" src="./img/item-producto/blackout/thumb-blackout2.gif">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-fotos-producto" data-toggle="modal" data-slide-to="2">
                                                <img alt="" src="./img/item-producto/blackout/thumb-blackout3.gif">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-fotos-producto" data-toggle="modal" data-slide-to="3">
                                                    <img alt="" src="./img/item-producto/blackout/thumb-blackout4.gif">
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
                                                   <h4 class="modal-title" style="color: white;">Blackout</h4>
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
                                                   <img src="./img/item-producto/blackout/blackout1.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/item-producto/blackout/blackout2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/item-producto/blackout/blackout3.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/item-producto/blackout/blackout4.jpg" alt="">
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
    <script>
        // Open Modal
        $(document).ready(function () {
        
            $('#medidas').modal('show');
        
        });
    </script>             
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
</body>
</html>