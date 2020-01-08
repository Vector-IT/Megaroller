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
            <!-- TABS MATERIALES CORTINAS -->
            <div id="materiales-cortinas" class="container-full">
               <div class="row noMargin">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10">
                     <h1 class="alignCenter">Bandas Verticales <img src="./img/iconos_0002_verticales.png" style="height: 30px; margin-top: -5px;"></h1>
                     <div id="tabs-materiales">
                        <div class="tabbable" class="top40">
                           <ul  class="nav nav-pills" style="display: none;">
                              <li class="active"><a  href="#bandas-verticales" data-toggle="tab">Bandas Verticales</a>
                              </li>
                           </ul>
                           <div class="tab-content clearfix">
                              <div class="tab-pane active" id="bandas-verticales">
                                 <div class="row noMargin pad25">
                                    <div class="col-sm-12 noPadding">
                                           <p class="pad25">Las Cortinas de Bandas Verticales tienen un formato de bandas delgadas deslizables que generan un ambiente de eficiencia, plenitud y neutralidad. Son ideales para cubrir grandes superficies y para crear gran cantidad de escenarios de luz y privacidad según la orientación de sus bandas. 
                                             La variedad de sus telas y colores permiten ir desde la opacidad total, texturas con diseños y tejidos traslucidos. 
                                             Es recomendable para cubrir superficies de grandes dimensiones, como Puertas Ventanas Corredizas o Paños Fijos. Debido a su elegancia y estética se utilizan no solo en Hogares sino también en Oficinas, Consultorios o cualquier ambiente corporativo.
                                             </p>
                                       <div class="col-md-9">
                                          <div id="carousel-bandas-verticales" class="carousel slide" data-ride="carousel">
                                             <!-- Indicators -->
                                             <ol class="carousel-indicators">
                                                <li data-target="#carousel-bandas-verticales" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-bandas-verticales" data-slide-to="1"></li>
                                                <li data-target="#carousel-bandas-verticales" data-slide-to="2"></li>
                                                <li data-target="#carousel-bandas-verticales" data-slide-to="3"></li>
                                                <li data-target="#carousel-bandas-verticales" data-slide-to="4"></li>
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/bandas-verticales/bandas-verticales-1.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/bandas-verticales/bandas-verticales-2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/bandas-verticales/bandas-verticales-3.jpg" alt="">
                                                </div>        
                                                <div class="item">
                                                   <img src="./img/productos/bandas-verticales/bandas-verticales-4.jpg" alt="">
                                                </div>  
                                                <div class="item">
                                                   <img src="./img/productos/bandas-verticales/bandas-verticales-5.jpg" alt="">
                                                </div>                                      
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <!-- Trigger the modal -->
                                          <ul class="nav-color">
                                             <li>
                                                <a href="#lightbox-bandas-verticales-9" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-vinilico/beige.jpg');"></div>
                                                   <p class="codigo-color">Blackout Vinílico</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-bandas-verticales-10" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/patagonia/gris-claro.jpg');"></div>
                                                   <p class="codigo-color">Patagonia</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-bandas-verticales-2" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-beach/maceio-blanco.jpg');"></div>
                                                   <p class="codigo-color">Beach</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-bandas-verticales-7" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-malaga/linea-malaga.jpg');"></div>
                                                   <p class="codigo-color">Malaga</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-bandas-verticales-8" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-shantung/linea-shantung.jpg');"></div>
                                                   <p class="codigo-color">Shantung</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-bandas-verticales-1" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-1.jpg');"></div>
                                                   <p class="codigo-color">Blackout Polyester</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-bandas-verticales-4" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/gris.jpg');"></div>
                                                   <p class="codigo-color">Devon</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-bandas-verticales-6" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lino/beige.jpg');"></div>
                                                   <p class="codigo-color">Lino</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-bandas-verticales-3" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/verde-fluor.jpg');"></div>
                                                   <p class="codigo-color">Carina</p>
                                                </a>
                                             </li>
                                             
                                             <li>
                                                <a href="#lightbox-bandas-verticales-5" data-toggle="modal">
                                                <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lima/taupe.jpg');"></div>
                                                   <p class="codigo-color">Lima</p>
                                                </a>
                                             </li>
                                          </ul>
                                          <!-- Modal 1 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-1">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Blackout Polyester</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-1" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-5.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-4.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-1.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-2.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-3.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-6.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-1">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-5.jpg');"></div>
                                                               <p class="codigo-color">Cairo Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-1">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-4.jpg');"></div>
                                                               <p class="codigo-color">Cairo Marfil</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-1">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-1.jpg');"></div>
                                                               <p class="codigo-color">Edessa Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-bandas-verticales-1">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-2.jpg');"></div>
                                                               <p class="codigo-color">Edessa Natural</p>
                                                            </li>
                                                            
                                                            <li class="" data-slide-to="4" data-target="#lightbox-bandas-verticales-1">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-3.jpg');"></div>
                                                               <p class="codigo-color">Dune Line</p>
                                                            </li>
                                                            
                                                            <li class="" data-slide-to="5" data-target="#lightbox-bandas-verticales-1">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-polyester/blackout-polyester-6.jpg');"></div>
                                                               <p class="codigo-color">Zimbawe Beige</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 2 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-2">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Beach</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-2" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-beach/maceio-blanco.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-beach/maceio-marfil.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-2">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-beach/maceio-blanco.jpg');"></div>
                                                               <p class="codigo-color">Maceio Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-2">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-beach/maceio-marfil.jpg');"></div>
                                                               <p class="codigo-color">Maceio Marfil</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 3 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-3">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Carina</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-3" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/azul-marino.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/blanco-gasa.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/bordo.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/celeste.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/chocolate.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/fucsia.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/gris.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/gris-perla.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/marron.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/naranja.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/natural.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/natural-gasa.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/negro.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/rojo.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-carina/verde-fluor.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/azul-marino.jpg');"></div>
                                                               <p class="codigo-color">azul marino</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/blanco-gasa.jpg');"></div>
                                                               <p class="codigo-color">blanco gasa</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/bordo.jpg');"></div>
                                                               <p class="codigo-color">bordo</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/celeste.jpg');"></div>
                                                               <p class="codigo-color">celeste</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/chocolate.jpg');"></div>
                                                               <p class="codigo-color">chocolate</p>
                                                            </li>
                                                            <li class="" data-slide-to="5" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/fucsia.jpg');"></div>
                                                               <p class="codigo-color">fucsia</p>
                                                            </li>
                                                            <li class="" data-slide-to="6" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/gris.jpg');"></div>
                                                               <p class="codigo-color">gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="7" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/gris-perla.jpg');"></div>
                                                               <p class="codigo-color">gris perla</p>
                                                            </li>
                                                            <li class="" data-slide-to="8" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/marron.jpg');"></div>
                                                               <p class="codigo-color">marron</p>
                                                            </li>
                                                            <li class="" data-slide-to="9" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/naranja.jpg');"></div>
                                                               <p class="codigo-color">naranja</p>
                                                            </li>
                                                            <li class="" data-slide-to="10" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/natural.jpg');"></div>
                                                               <p class="codigo-color">natural</p>
                                                            </li>
                                                            <li class="" data-slide-to="11" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/natural-gasa.jpg');"></div>
                                                               <p class="codigo-color">natural gasa</p>
                                                            </li>
                                                            <li class="" data-slide-to="12" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/negro.jpg');"></div>
                                                               <p class="codigo-color">negro</p>
                                                            </li>
                                                            <li class="" data-slide-to="13" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/rojo.jpg');"></div>
                                                               <p class="codigo-color">rojo</p>
                                                            </li>
                                                            <li class="" data-slide-to="14" data-target="#lightbox-bandas-verticales-3">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-carina/verde-fluor.jpg');"></div>
                                                               <p class="codigo-color">verde fluor</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 4 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-4">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Devon</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-4" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-devon/beige.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-devon/chocolate.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-devon/gris.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-devon/marfil.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-devon/negro.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-4">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-4">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/chocolate.jpg');"></div>
                                                               <p class="codigo-color">Chocolate</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-4">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/gris.jpg');"></div>
                                                               <p class="codigo-color">Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-bandas-verticales-4">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/marfil.jpg');"></div>
                                                               <p class="codigo-color">Marfil</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-bandas-verticales-4">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/negro.jpg');"></div>
                                                               <p class="codigo-color">Negro</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 5 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-5">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Lima</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-5" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lima/blanco.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lima/beige.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lima/gris-oscuro.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lima/gris-perla.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lima/natural.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lima/taupe.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-5">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lima/blanco.jpg');"></div>
                                                               <p class="codigo-color">Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-5">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lima/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-5">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lima/gris-oscuro.jpg');"></div>
                                                               <p class="codigo-color">Gris Oscuro</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-bandas-verticales-5">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lima/gris-perla.jpg');"></div>
                                                               <p class="codigo-color">Gris Perla</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-bandas-verticales-5">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lima/natural.jpg');"></div>
                                                               <p class="codigo-color">Natural</p>
                                                            </li>
                                                            <li class="" data-slide-to="5" data-target="#lightbox-bandas-verticales-5">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lima/taupe.jpg');"></div>
                                                               <p class="codigo-color">Taupe</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 6 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-6">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Lino</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-6" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lino/beige.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lino/havano.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-lino/natural.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-6">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lino/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-6">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lino/havano.jpg');"></div>
                                                               <p class="codigo-color">Havano</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-6">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-lino/natural.jpg');"></div>
                                                               <p class="codigo-color">Natural</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 7 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-7">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Malaga</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-7" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-malaga/blanco.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-malaga/beige.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-malaga/gris.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-malaga/gris-topo.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-7">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-malaga/blanco.jpg');"></div>
                                                               <p class="codigo-color">Blanco</p>
                                                            </li>   
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-7">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-malaga/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-7">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-malaga/gris.jpg');"></div>
                                                               <p class="codigo-color">Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-bandas-verticales-7">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-malaga/gris-topo.jpg');"></div>
                                                               <p class="codigo-color">Gris Topo</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 8 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-8">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Shantung</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-8" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-shantung/beige.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-shantung/blanco.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-shantung/gris.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/linea-shantung/havano.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-8">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-shantung/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-8">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-shantung/blanco.jpg');"></div>
                                                               <p class="codigo-color">Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-8">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-shantung/gris.jpg');"></div>
                                                               <p class="codigo-color">Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-bandas-verticales-8">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-shantung/havano.jpg');"></div>
                                                               <p class="codigo-color">Havano</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 9 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-9">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Blackout Vinílico</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-9" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-vinilico/blanco.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-vinilico/natural.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-vinilico/beige.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-vinilico/gris.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/bandas-verticales/blackout-vinilico/negro.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-9">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-vinilico/blanco.jpg');"></div>
                                                               <p class="codigo-color">Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-9">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-vinilico/natural.jpg');"></div>
                                                               <p class="codigo-color">Natural</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-9">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-vinilico/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-bandas-verticales-9">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-vinilico/gris.jpg');"></div>
                                                               <p class="codigo-color">Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-bandas-verticales-9">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/blackout-vinilico/negro.jpg');"></div>
                                                               <p class="codigo-color">Negro</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal 10 -->
                                          <div class="modal fade and carousel slide" id="lightbox-bandas-verticales-10">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Bandas Verticales - Patagonia</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="bandas-verticales-carousel-10" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/patagonia/crudo.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/patagonia/lino.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/patagonia/beige.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/patagonia/gris-claro.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/patagonia/gris-oscuro.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-3">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-bandas-verticales-10">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/crudo.jpg');"></div>
                                                               <p class="codigo-color">Crudo</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-bandas-verticales-10">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/lino.jpg');"></div>
                                                               <p class="codigo-color">Lino</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-bandas-verticales-10">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-bandas-verticales-10">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/gris-claro.jpg');"></div>
                                                               <p class="codigo-color">Gris Claro</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-bandas-verticales-10">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/gris-oscuro.jpg');"></div>
                                                               <p class="codigo-color">Gris Oscuro</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /.row -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-1"></div>
               </div>
            </div>
            <!-- /.TABS MATERIALES CORTINAS -->
            <div class="container">
               <div class="row top40 noMargin">
                  <h2 class="text-center top40">¡SOLICITÁ TU PRESUPUESTO AHORA!</h2>
                  <div class="col-sm-7 top40">
                     <form id="presupuesto">
                        <div class="row control-group">
                           <div class="form-group col-lg-6 floating-label-form-group controls">
                              <label>Nombre</label>
                              <input type="text" class="form-control" placeholder="" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                           </div>
                           <div class="form-group col-lg-6 floating-label-form-group controls">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="" id="email" required data-validation-required-message="Por favor ingresa tu email.">
                           </div>
                           <div class="form-group col-lg-6 floating-label-form-group controls">
                              <label>Teléfono</label>
                              <input type="tel" class="form-control" placeholder="" id="phone" required data-validation-required-message="Por favor ingresa tu teléfono.">
                           </div>
                           <div class="form-group col-lg-6 floating-label-form-group controls">
                           <label>Localidad</label>
                           <input name="location" type="text" class="form-control" placeholder="" id="location" required data-validation-required-message="Por favor ingresa tu localidad.">

                           <p class="help-block text-danger"></p>
                           </div>
                           <div class="col-lg-12 noPadding" id="divCortinas">
                              <div>
                                 <div class="form-group col-md-4 floating-label-form-group controls">
                                    <label>Tipo de Cortina</label>
                                    <select class="form-control" id="TipoCortina">
                                       <option value=""></option>
                                       <option>Bandas Verticales</option>
                                       <option>Sunscreen</option>
                                       <option>Sistema Doble</option>
                                       <option>Roller Dual</option>
                                       <option>Roller Translúcida</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 floating-label-form-group controls">
                                    <label>Ancho</label>
                                    <input type="number" class="form-control" required id="ancho" min="0" placeholder="Mts." step=".01" style="display: block;" >
                                 </div>
                                 <div class="form-group col-md-4 floating-label-form-group controls">
                                    <label>Alto</label>
                                    <input type="number" class="form-control" required id="alto" min="0" placeholder="Mts." step=".01" style="display: block;" >
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 noPadding">
                              <button style="width: 100%; font-weight: 700; float: unset !important;" type="button" class="btn btn-enviar" onclick="agregarCortinaPres()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> AGREGAR MÁS</button>
                           </div>
                           <div class="form-group col-lg-12 floating-label-form-group controls">
                              <label>Consulta</label>
                              <textarea rows="5" class="form-control" placeholder="" id="message" required data-validation-required-message="Por favor ingresa tu consulta."></textarea>
                           </div>
                           <div class="form-group col-lg-12 floating-label-form-group controls text-right">
                           <div class="g-recaptcha" data-sitekey="6Ld7K04UAAAAABJKWcHcz8N0df4IXTAVP1nMxTjn"></div>
                              <button type="submit" class="btn btn-enviar">Enviar</button>
                           </div>
                        </div>
                        <br>
                        <div id="success"></div>
                     </form>
                  </div>
                  <div class="col-sm-5 text-center" style="font-family: 'BentonSans-Medium'; font-size: 16px;">
                     <img style="cursor: pointer;" data-toggle="modal" data-target="#medidas" class="img-center" src="./img/home/_0003_icono2.png" width="135px" height="135px"/>
                     <div style="margin: 15px;"><strong>¿CÓMO TOMAR MEDIDAS?</strong><br/><button type="button"  data-toggle="modal" data-target="#medidas">Lee AQUI el instructivo<br/> para tomar la medida correcta de tu cortina.</button></div>

                     <img class="img-center top40" src="./img/home/_0004_icono1.png" width="135px" height="135px"/>
                     <div style="margin: 15px;"><strong>¿DUDAS?</strong><br/> ¡Comunicate con un asesor ahora! <br/>
                     0351 471 51 55</div>
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