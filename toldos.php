<?php
   session_start();
    require_once 'php/conexion.php';
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
            <!-- TABS MATERIALES TOLDOS -->
            <div id="materiales-toldos" class="container-full">
               <div class="row noMargin">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10">
                     <h1 class="alignCenter">Toldos  <img src="./img/iconos_0001_toldo.png" style="height: 30px; margin-top: -5px;"></h1>
                     <div id="tabs-materiales">
                        <ul  class="nav nav-pills">
                           <li class="active"><a  href="#toldo-brazo-invisible" data-toggle="tab">Toldos Brazos Invisibles o Extensibles</a>
                           </li>
                           <li><a href="#toldo-brazo-punto-fijo" data-toggle="tab">Toldos Brazos Punto Fijo</a>
                           </li>
                           <li><a href="#toldo-vertical" data-toggle="tab">Toldos Verticales</a>
                           </li>
                        </ul>
                        <div class="tab-content clearfix top40">
                           <div class="tab-pane active" id="toldo-brazo-invisible">
                              <div class="row noMargin pad25">
                                 <div class="col-sm-12 noPadding">
                                    <h2 class="text-center">Toldos Brazos Invisibles o Extensibles</h2>
                                    <p class="pad25">El toldo de brazos invisibles, es sumamente versátil, ajustándose absolutamente a todas las necesidades y lugares de instalación, su uso es muy variado, y si bien, es el toldo ideal para generar espacios habitables de sombra al aire libre, también se lo puede utilizar para controlar el impacto del sol sobre ventanas.
                                       Con brazos de poco desarrollo, 1.60mts o 2.10mts, se puede utilizar para evitar el impacto del el sol sobre ventanas o ventanales, controlando la temperatura del ambiente, evitando el calor excesivo sobre la abertura, e impidiendo que el sol ingrese al interior de la casa.
                                       Con brazos de gran desarrollo, como los de 2.60mts/3.10mts/3.60mts/4.10mts, se pueden lograr perfectos espacios de sombra en el exteriores, creando un agradable ambiente de sombra al aire libre.
                                    </p>
                                    <div class="col-md-9">
                                       <div id="carousel-toldo-brazo-invisible" class="carousel slide" data-ride="carousel">
                                          <!-- Indicators -->
                                          <ol class="carousel-indicators">
                                             <li data-target="#carousel-toldo-brazo-invisible" data-slide-to="0" class="active"></li>
                                             <li data-target="#carousel-toldo-brazo-invisible" data-slide-to="1"></li>
                                             <li data-target="#carousel-toldo-brazo-invisible" data-slide-to="2"></li>
                                          </ol>
                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner">
                                             <div class="item active">
                                                <img src="./img/productos/toldo-brazo-invisible.jpg" alt="">
                                             </div>
                                             <div class="item">
                                                <img src="./img/productos/toldo-brazo-invisible2.jpg" alt="">
                                             </div>
                                             <div class="item">
                                                <img src="./img/productos/toldo-brazo-invisible3.jpg" alt="">
                                             </div>
                                          </div>
                                       </div>
                                       <img class="inline-block img-responsive" src="./img/empresa/el-zonda.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                       <img class="inline-block img-responsive" src="./img/empresa/sauleda.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                    </div>
                                    <div class="col-md-3">
                                       <!-- Trigger the modal -->
                                       <ul id="toldos" class="nav-color">
                                          <p class="titulo-color">PVC</p>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="0">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-1-color.jpg');"></div>
                                                <p class="codigo-color">Negro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="1">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-2-color.jpg');"></div>
                                                <p class="codigo-color">Gris</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="2">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-3-color.jpg');"></div>
                                                <p class="codigo-color">Natural</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="3">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-4-color.jpg');"></div>
                                                <p class="codigo-color">Maíz</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="4">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-5-color.jpg');"></div>
                                                <p class="codigo-color">Verde Oscuro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="5">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-6-color.jpg');"></div>
                                                <p class="codigo-color">Blanco</p>
                                             </a>
                                          </li>
                                       </ul>
                                       <hr>
                                       <ul id="toldos" class="nav-color">
                                          <p class="titulo-color">Textil</p>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="0">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-1-color.jpg');"></div>
                                                <p class="codigo-color">Negro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="1">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-2-color.jpg');"></div>
                                                <p class="codigo-color">Gris</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="2">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-3-color.jpg');"></div>
                                                <p class="codigo-color">Verde Oscuro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="3">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-4-color.jpg');"></div>
                                                <p class="codigo-color">Maíz</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="4">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-5-color.jpg');"></div>
                                                <p class="codigo-color">Beige</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="5">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-6-color.jpg');"></div>
                                                <p class="codigo-color">Blanco</p>
                                             </a>
                                          </li>
                                       </ul>
                                       <hr>
                                       <p class="titulo-color" style="text-align: center;">Consultá por más colores</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->
                           </div>
                           <div class="tab-pane" id="toldo-brazo-punto-fijo">
                              <div class="row noMargin pad25">
                                 <div class="col-sm-12 noPadding">
                                    <h2 class="text-center">Toldos Brazos Punto Fijo</h2>
                                    <p class="pad25">La función principal de este tipo de toldos, es controlar las altas temperaturas sobre la propia abertura, impidiendo que el sol ingrese al interior del ambiente. Su Inclinación o Caída esta determinada por el movimiento tipo pívot del brazo, permitiendo la posibilidad de variar su inclinación de forma progresiva hasta el punto deseado, quedando en 45 , 90 o 180 grados con el toldo totalmente extendido.</p>
                                    <div class="col-md-9">
                                       <div id="carousel-toldo-brazo-punto-fijo" class="carousel slide" data-ride="carousel">
                                          <!-- Indicators -->
                                          <ol class="carousel-indicators">
                                             <li data-target="#carousel-toldo-brazo-punto-fijo" data-slide-to="0" class="active"></li>
                                             <li data-target="#carousel-toldo-brazo-punto-fijo" data-slide-to="1"></li>
                                             <li data-target="#carousel-toldo-brazo-punto-fijo" data-slide-to="2"></li>
                                          </ol>
                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner">
                                             <div class="item active">
                                                <img src="./img/productos/toldo-brazo-punto-fijo.jpg" alt="">
                                             </div>
                                             <div class="item">
                                                <img src="./img/productos/toldo-brazo-punto-fijo2.jpg" alt="">
                                             </div>
                                             <div class="item">
                                                <img src="./img/productos/toldo-brazo-punto-fijo3.jpg" alt="">
                                             </div>
                                          </div>
                                       </div>
                                       <img class="inline-block img-responsive" src="./img/empresa/el-zonda.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                       <img class="inline-block img-responsive" src="./img/empresa/sauleda.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                    </div>
                                    <div class="col-md-3">
                                       <!-- Trigger the modal -->
                                       <ul id="toldos" class="nav-color">
                                          <p class="titulo-color">PVC</p>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="0">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-1-color.jpg');"></div>
                                                <p class="codigo-color">Negro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="1">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-2-color.jpg');"></div>
                                                <p class="codigo-color">Gris</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="2">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-3-color.jpg');"></div>
                                                <p class="codigo-color">Natural</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="3">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-4-color.jpg');"></div>
                                                <p class="codigo-color">Maíz</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="4">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-5-color.jpg');"></div>
                                                <p class="codigo-color">Verde Oscuro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="5">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-6-color.jpg');"></div>
                                                <p class="codigo-color">Blanco</p>
                                             </a>
                                          </li>
                                       </ul>
                                       <hr>
                                       <ul id="toldos" class="nav-color">
                                          <p class="titulo-color">Textil</p>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="0">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-1-color.jpg');"></div>
                                                <p class="codigo-color">Negro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="1">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-2-color.jpg');"></div>
                                                <p class="codigo-color">Gris</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="2">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-3-color.jpg');"></div>
                                                <p class="codigo-color">Verde Oscuro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="3">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-4-color.jpg');"></div>
                                                <p class="codigo-color">Maíz</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="4">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-5-color.jpg');"></div>
                                                <p class="codigo-color">Beige</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="5">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-6-color.jpg');"></div>
                                                <p class="codigo-color">Blanco</p>
                                             </a>
                                          </li>
                                       </ul>
                                       <hr>
                                       <p class="titulo-color" style="text-align: center;">Consultá por más colores</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->
                           </div>
                           <div class="tab-pane" id="toldo-vertical">
                              <div class="row noMargin pad25">
                                 <div class="col-sm-12 noPadding">
                                    <h2 class="text-center">Toldos Verticales</h2>
                                    <p class="pad25">Estos Toldos permiten crear ambientes mas frescos debido al filtrado de los rayos UV que se realiza antes que lleguen al interior del ambiente y brindan la posibilidad de cerrar espacios exteriores integrando y generando un nuevo ambiente funcional a la casa. Su sencillo accionamiento en sentido vertical y enrollable permite controlar los rayos solares manteniendo la visibilidad y otorgando agradables condiciones de temperatura.
                                       Este tipo de Toldos es ideal para cerrar una galería o quincho abierto y protegerse así del frio y viento, creando un nuevo ambiente funcional para su casa.  
                                    </p>
                                    <div class="col-md-9">
                                       <div id="carousel-toldo-vertical" class="carousel slide" data-ride="carousel">
                                          <!-- Indicators -->
                                          <ol class="carousel-indicators">
                                             <li data-target="#carousel-toldo-vertical" data-slide-to="0" class="active"></li>
                                             <li data-target="#carousel-toldo-vertical" data-slide-to="1"></li>
                                             <li data-target="#carousel-toldo-vertical" data-slide-to="2"></li>
                                          </ol>
                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner">
                                             <div class="item active">
                                                <img src="./img/productos/toldo-vertical.jpg" alt="">
                                             </div>
                                             <div class="item">
                                                <img src="./img/productos/toldo-vertical2.jpg" alt="">
                                             </div>
                                             <div class="item">
                                                <img src="./img/productos/toldo-vertical3.jpg" alt="">
                                             </div>
                                          </div>
                                       </div>
                                       <img class="inline-block img-responsive" src="./img/empresa/coversol.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                       <img class="inline-block img-responsive" src="./img/empresa/el-zonda.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                       <img class="inline-block img-responsive" src="./img/empresa/sauleda.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                    </div>
                                    <div class="col-md-3">
                                       <!-- Trigger the modal -->
                                       <ul id="toldos" class="nav-color">
                                          <p class="titulo-color">Coversol</p>
                                          <li>
                                             <a href="#lightbox-toldo-coversol" data-toggle="modal" data-slide-to="0">
                                                <div class="color" style="background-image: url('./img/productos/toldos/coversol-1-color.jpg');"></div>
                                                <p class="codigo-color">Negro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-coversol" data-toggle="modal" data-slide-to="1">
                                                <div class="color" style="background-image: url('./img/productos/toldos/coversol-2-color.jpg');"></div>
                                                <p class="codigo-color">Gris</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-coversol" data-toggle="modal" data-slide-to="2">
                                                <div class="color" style="background-image: url('./img/productos/toldos/coversol-3-color.jpg');"></div>
                                                <p class="codigo-color">Verde Oscuro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-coversol" data-toggle="modal" data-slide-to="3">
                                                <div class="color" style="background-image: url('./img/productos/toldos/coversol-4-color.jpg');"></div>
                                                <p class="codigo-color">Verde Claro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-coversol" data-toggle="modal" data-slide-to="4">
                                                <div class="color" style="background-image: url('./img/productos/toldos/coversol-5-color.jpg');"></div>
                                                <p class="codigo-color">Maíz</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-coversol" data-toggle="modal" data-slide-to="5">
                                                <div class="color" style="background-image: url('./img/productos/toldos/coversol-6-color.jpg');"></div>
                                                <p class="codigo-color">Blanco</p>
                                             </a>
                                          </li>
                                       </ul>
                                       <hr>
                                       <ul id="toldos" class="nav-color">
                                          <p class="titulo-color">PVC</p>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="0">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-1-color.jpg');"></div>
                                                <p class="codigo-color">Negro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="1">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-2-color.jpg');"></div>
                                                <p class="codigo-color">Gris</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="2">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-3-color.jpg');"></div>
                                                <p class="codigo-color">Natural</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="3">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-4-color.jpg');"></div>
                                                <p class="codigo-color">Maíz</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="4">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-5-color.jpg');"></div>
                                                <p class="codigo-color">Verde Oscuro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-pvc" data-toggle="modal" data-slide-to="5">
                                                <div class="color" style="background-image: url('./img/productos/toldos/pvc-6-color.jpg');"></div>
                                                <p class="codigo-color">Blanco</p>
                                             </a>
                                          </li>
                                       </ul>
                                       <hr>
                                       <ul id="toldos" class="nav-color">
                                          <p class="titulo-color">Textil</p>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="0">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-1-color.jpg');"></div>
                                                <p class="codigo-color">Negro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="1">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-2-color.jpg');"></div>
                                                <p class="codigo-color">Gris</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="2">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-3-color.jpg');"></div>
                                                <p class="codigo-color">Verde Oscuro</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="3">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-4-color.jpg');"></div>
                                                <p class="codigo-color">Maíz</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="4">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-5-color.jpg');"></div>
                                                <p class="codigo-color">Beige</p>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#lightbox-toldo-textil" data-toggle="modal" data-slide-to="5">
                                                <div class="color" style="background-image: url('./img/productos/toldos/textil-6-color.jpg');"></div>
                                                <p class="codigo-color">Blanco</p>
                                             </a>
                                          </li>
                                       </ul>
                                       <hr>
                                       <p class="titulo-color" style="text-align: center;">Consultá por más colores</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->
                           </div>
                           <!-- /.row -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-1"></div>
            </div>
         </div>
         <!-- /.TABS MATERIALES TOLDOS -->
         <!-- Modal COVERSOL-->
         <div class="modal fade and carousel slide" id="lightbox-toldo-coversol">
            <div class="modal-dialog modal-lg">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Toldos COVERSOL</h4>
                  </div>
                  <div class="modal-body">
                     <div class="carousel slide article-slide carousel-fade" id="toldo-coversol-carousel" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner cont-slider">
                           <div class="item active">
                              <img alt="" title="" src="./img/productos/toldos/coversol-1.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/coversol-2.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/coversol-3.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/coversol-4.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/coversol-5.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/coversol-6.jpg">
                           </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators col-3">
                           <li class="active" data-slide-to="0" data-target="#lightbox-toldo-coversol">
                              <div class="color" style="background-image: url('./img/productos/toldos/coversol-1-color.jpg');"></div>
                              <p class="codigo-color">Negro</p>
                           </li>
                           <li class="" data-slide-to="1" data-target="#lightbox-toldo-coversol">
                              <div class="color" style="background-image: url('./img/productos/toldos/coversol-2-color.jpg');"></div>
                              <p class="codigo-color">Gris</p>
                           </li>
                           <li class="" data-slide-to="2" data-target="#lightbox-toldo-coversol">
                              <div class="color" style="background-image: url('./img/productos/toldos/coversol-3-color.jpg');"></div>
                              <p class="codigo-color">Verde Oscuro</p>
                           </li>
                           <li class="" data-slide-to="3" data-target="#lightbox-toldo-coversol">
                              <div class="color" style="background-image: url('./img/productos/toldos/coversol-4-color.jpg');"></div>
                              <p class="codigo-color">Verde Claro</p>
                           </li>
                           <li class="" data-slide-to="4" data-target="#lightbox-toldo-coversol">
                              <div class="color" style="background-image: url('./img/productos/toldos/coversol-5-color.jpg');"></div>
                              <p class="codigo-color">Maíz</p>
                           </li>
                           <li class="" data-slide-to="5" data-target="#lightbox-toldo-coversol">
                              <div class="color" style="background-image: url('./img/productos/toldos/coversol-6-color.jpg');"></div>
                              <p class="codigo-color">Blanco</p>
                           </li>
                        </ol>
                     </div>
                     <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <img class="inline-block img-responsive" src="./img/empresa/coversol.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                        </div>
                        <div class="col-md-2"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Fin Modal COVERSOL content-->
         <!-- Modal PVC -->
         <div class="modal fade and carousel slide" id="lightbox-toldo-pvc">
            <div class="modal-dialog modal-lg">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Toldos PVC</h4>
                  </div>
                  <div class="modal-body">
                     <div class="carousel slide article-slide carousel-fade" id="toldo-pvc-carousel" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner cont-slider">
                           <div class="item active">
                              <img alt="" title="" src="./img/productos/toldos/pvc-1.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/pvc-2.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/pvc-3.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/pvc-4.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/pvc-5.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/pvc-6.jpg">
                           </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators col-3">
                           <li class="active" data-slide-to="0" data-target="#lightbox-toldo-pvc">
                              <div class="color" style="background-image: url('./img/productos/toldos/pvc-1-color.jpg');"></div>
                              <p class="codigo-color">Negro</p>
                           </li>
                           <li class="" data-slide-to="1" data-target="#lightbox-toldo-pvc">
                              <div class="color" style="background-image: url('./img/productos/toldos/pvc-2-color.jpg');"></div>
                              <p class="codigo-color">Gris</p>
                           </li>
                           <li class="" data-slide-to="2" data-target="#lightbox-toldo-pvc">
                              <div class="color" style="background-image: url('./img/productos/toldos/pvc-3-color.jpg');"></div>
                              <p class="codigo-color">Natural</p>
                           </li>
                           <li class="" data-slide-to="3" data-target="#lightbox-toldo-pvc">
                              <div class="color" style="background-image: url('./img/productos/toldos/pvc-4-color.jpg');"></div>
                              <p class="codigo-color">Maíz</p>
                           </li>
                           <li class="" data-slide-to="4" data-target="#lightbox-toldo-pvc">
                              <div class="color" style="background-image: url('./img/productos/toldos/pvc-5-color.jpg');"></div>
                              <p class="codigo-color">Verde Oscuro</p>
                           </li>
                           <li class="" data-slide-to="5" data-target="#lightbox-toldo-pvc">
                              <div class="color" style="background-image: url('./img/productos/toldos/pvc-6-color.jpg');"></div>
                              <p class="codigo-color">Blanco</p>
                           </li>
                        </ol>
                     </div>
                     <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <img class="inline-block img-responsive" src="./img/empresa/el-zonda.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                        </div>
                        <div class="col-md-2"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Fin Modal PVC content-->
         <!-- Modal Textil -->
         <div class="modal fade and carousel slide" id="lightbox-toldo-textil">
            <div class="modal-dialog modal-lg">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Toldos Textil</h4>
                  </div>
                  <div class="modal-body">
                     <div class="carousel slide article-slide carousel-fade" id="toldo-textil-carousel" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner cont-slider">
                           <div class="item active">
                              <img alt="" title="" src="./img/productos/toldos/textil-1.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/textil-2.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/textil-3.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/textil-4.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/textil-5.jpg">
                           </div>
                           <div class="item">
                              <img alt="" title="" src="./img/productos/toldos/textil-6.jpg">
                           </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators col-3">
                           <li class="active" data-slide-to="0" data-target="#lightbox-toldo-textil">
                              <div class="color" style="background-image: url('./img/productos/toldos/textil-1-color.jpg');"></div>
                              <p class="codigo-color">Negro</p>
                           </li>
                           <li class="" data-slide-to="1" data-target="#lightbox-toldo-textil">
                              <div class="color" style="background-image: url('./img/productos/toldos/textil-2-color.jpg');"></div>
                              <p class="codigo-color">Gris</p>
                           </li>
                           <li class="" data-slide-to="2" data-target="#lightbox-toldo-textil">
                              <div class="color" style="background-image: url('./img/productos/toldos/textil-3-color.jpg');"></div>
                              <p class="codigo-color">Verde Oscuro</p>
                           </li>
                           <li class="" data-slide-to="3" data-target="#lightbox-toldo-textil">
                              <div class="color" style="background-image: url('./img/productos/toldos/textil-4-color.jpg');"></div>
                              <p class="codigo-color">Maíz</p>
                           </li>
                           <li class="" data-slide-to="4" data-target="#lightbox-toldo-textil">
                              <div class="color" style="background-image: url('./img/productos/toldos/textil-5-color.jpg');"></div>
                              <p class="codigo-color">Beige</p>
                           </li>
                           <li class="" data-slide-to="5" data-target="#lightbox-toldo-textil">
                              <div class="color" style="background-image: url('./img/productos/toldos/textil-6-color.jpg');"></div>
                              <p class="codigo-color">Blanco</p>
                           </li>
                        </ol>
                     </div>
                     <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <img class="inline-block img-responsive" src="./img/empresa/sauleda.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                        </div>
                        <div class="col-md-2"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Fin Modal Textil content-->
         <div class="container">
            <div class="row top40 noMargin">
               <h2 class="text-center top40">¡SOLICITÁ TU PRESUPUESTO AHORA!</h2>
               <div class="col-sm-7 top40">
                  <form id="contactForm">
                     <div class="row control-group">
                        <div class="form-group col-lg-6 floating-label-form-group controls">
                           <input name="name" type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                           <p class="help-block text-danger"></p>
                           <input name="phone" type="tel" class="form-control" placeholder="Teléfono" id="phone" required data-validation-required-message="Por favor ingresa tu teléfono.">
                           <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-lg-6 floating-label-form-group controls">
                           <input name="email" type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Por favor ingresa tu email.">
                           <p class="help-block text-danger"></p>
                           <input name="location" type="text" class="form-control" placeholder="Localidad" id="location" required data-validation-required-message="Por favor ingresa tu localidad.">
                           <p class="help-block text-danger"></p>
                        </div>
                     </div>
                     <div class="row control-group">
                        <div class="form-group col-lg-12 floating-label-form-group controls">
                           <textarea name="message" rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor ingresa tu consulta."></textarea>
                           <p class="help-block text-danger"></p>
                           <button type="submit" class="btn btn-enviar">Enviar</button>
                        </div>
                     </div>
                     <br>
                     <div id="success"></div>
                  </form>
               </div>
               <div class="col-sm-5 text-center" style="font-family: 'BentonSans-Medium'; font-size: 16px;">
                  <img class="img-center top40" src="./img/home/_0004_icono1.png" width="135px" height="135px"/>
                  <div style="margin: 15px;"><strong>¿DUDAS?</strong><br/> ¡Comunicate con un asesor ahora! <br/>
                     0351 471 51 55
                  </div>
               </div>
            </div>
         </div>
         <?php include 'php/footer.php'; ?>
      </div>
      <!-- /#page-content-wrapper --> 
      <?php include 'php/sidebar.php'; ?>
      </div>
      <!-- /#wrapper --> 
      <?php include 'php/scripts-footer.php'; ?>
      <script>
         $(".carousel").carousel({
           interval: 3000,
           wrap: true
         });
      </script>
   </body>
</html>