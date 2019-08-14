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
                     <h1 class="alignCenter">Cortinas Roller <img src="./img/iconos_0003_roller.png" style="height: 30px; margin-top: -5px;"></h1>
                     <div id="tabs-materiales">
                        <div class="tabbable">
                           <ul  class="nav nav-pills">
                              <li class="active"><a  href="#roller-blackout" data-toggle="tab">Roller Blackout</a>
                              </li>
                              <li><a href="#roller-sunscreen" data-toggle="tab">Roller Sunscreen</a>
                              </li>
                              <li><a href="#roller-translucida" data-toggle="tab">Roller Translucida</a>
                              </li>
                              <li><a href="#roller-sistema-doble" data-toggle="tab">Roller Sistema Doble</a>
                              </li>
                              <li><a href="#roller-dual" data-toggle="tab">Roller Dual</a>
                              </li>                             
                           </ul>
                           <div class="tab-content clearfix top40">
                              <div class="tab-pane active" id="roller-blackout">
                                 <div class="row noMargin pad25">
                                    <div class="col-sm-12 noPadding">
                                       <h2 class="text-center">Roller Blackout</h2>
                                       <p class="pad25">Nuestras Cortinas Roller Blackout están fabricadas con los mejores componentes del mercado. Este tejido, de origen USA o CHINA, está constituido a base de fibra de vidrio y recubierto con 3 láminas de PVC.
                                          Su factor de oscurecimiento es prácticamente del 100%, ya que la tela logra evitar completamente la filtración de luz al tiempo que resiste las altas temperaturas.
                                       </p>
                                       <div class="col-md-9">
                                          <div id="carousel-roller-blackout" class="carousel slide" data-ride="carousel">
                                             <!-- Indicators -->
                                             <ol class="carousel-indicators">
                                                <li data-target="#carousel-roller-blackout" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-roller-blackout" data-slide-to="1"></li>
                                                <li data-target="#carousel-roller-blackout" data-slide-to="2"></li>
                                                <li data-target="#carousel-roller-blackout" data-slide-to="3"></li>
                                                <li data-target="#carousel-roller-blackout" data-slide-to="4"></li>
                                                <li data-target="#carousel-roller-blackout" data-slide-to="5"></li>
                                                <li data-target="#carousel-roller-blackout" data-slide-to="6"></li>
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/blackout7.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/blackout8.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/blackout9.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/blackout.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/blackout2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/blackout5.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/blackout6.jpg" alt="">
                                                </div>
                                             </div>
                                          </div>
                                          <img class="img-center img-responsive" src="./img/empresa/unitec.jpg" alt="" width="200" height="auto">
                                       </div>
                                       <div class="col-md-3">
                                          <!-- Trigger the modal -->
                                          <img class="img-center img-responsive" src="./img/productos/blackout/blackout.jpg" alt="" width="" height="">
                                          <ul class="nav-color">
                                             <li>
                                                <a href="#lightbox-blackout" data-toggle="modal" data-slide-to="0">
                                                   <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0004_1-color.jpg');"></div>
                                                   <p class="codigo-color">Blanco</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-blackout" data-toggle="modal" data-slide-to="1">
                                                   <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0003_2-color.jpg');"></div>
                                                   <p class="codigo-color">Natural</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-blackout" data-toggle="modal" data-slide-to="2">
                                                   <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0002_3-color.jpg');"></div>
                                                   <p class="codigo-color">Beige</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-blackout" data-toggle="modal" data-slide-to="3">
                                                   <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0001_4-color.jpg');"></div>
                                                   <p class="codigo-color">Gris</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-blackout" data-toggle="modal" data-slide-to="3">
                                                   <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0000_5-color.jpg');"></div>
                                                   <p class="codigo-color">Negro</p>
                                                </a>
                                             </li>
                                          </ul>
                                          <!-- Modal -->
                                          <div class="modal fade and carousel slide" id="lightbox-blackout">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Blackout</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="roller-blackout-carousel" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0004_1.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0003_2.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0002_3.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0001_4.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0000_5.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-2">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-blackout">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0004_1-color.jpg');"></div>
                                                               <p class="codigo-color">Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-blackout">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0003_2-color.jpg');"></div>
                                                               <p class="codigo-color">Natural</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-blackout">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0002_3-color.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-blackout">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0001_4-color.jpg');"></div>
                                                               <p class="codigo-color">Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-blackout">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0000_5-color.jpg');"></div>
                                                               <p class="codigo-color">Negro</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md-9">
                                                            <img class="img-center img-responsive" src="./img/empresa/unitec.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                         </div>
                                                         <div class="col-md-3"></div>
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
                              <div class="tab-pane" id="roller-sunscreen">
                                 <div class="row noMargin pad25">
                                    <div class="col-sm-12 noPadding">
                                       <h2 class="text-center">Roller Sunscreen</h2>
                                       <p class="pad25">Nuestras Cortinas Roller Sunscreen son fabricadas con la más alta calidad, este material es importado de EEUU o Europa y ofrece ventajas con respecto a otras telas, dado que filtra y modera la entrada de luz natural protegiendo el ambiente y su mobiliario de los rayos UV, ayuda a regular la temperatura ambiente y otorga una agradable decoración y estética.
                                          Su tela de apariencia microperforada también brinda la posibilidad de disfrutar de espacios más frescos e íntimos, permitiendo ver a través de ella y contemplar el paisaje exterior.
                                       </p>
                                       <div class="tabbable">
                                          <ul class="nav nav-tabs">
                                             <li class="active"><a data-toggle="tab" href="#sunscreen1">Sunscreen 1%</a></li>
                                             <li style="display:none;"><a data-toggle="tab" href="#sunscreen3">Sunscreen 3%</a></li>
                                             <li><a data-toggle="tab" href="#sunscreen4">Sunscreen 4%</a></li>
                                             <li><a data-toggle="tab" href="#sunscreen5">Sunscreen 5%</a></li>
                                             <li><a data-toggle="tab" href="#sunscreen5bicolor">Sunscreen Bicolor 5%</a></li>
                                             <li><a data-toggle="tab" href="#sunscreen5-tokyo">Sunscreen 5% Tokyo</a></li>
                                             
                                             <li><a data-toggle="tab" href="#sunscreen10-rustico">Sunscreen 10% Rústico</a></li>
                                          </ul>
                                          <div class="tab-content noPadding">
                                             <div id="sunscreen1" class="tab-pane active">
                                                <div class="col-md-9">
                                                   <div id="carousel-sunscreen1" class="carousel slide" data-ride="carousel">
                                                      <!-- Indicators -->
                                                      <ol class="carousel-indicators">
                                                         <li data-target="#carousel-sunscreen1" data-slide-to="0" class="active"></li>
                                                         <li data-target="#carousel-sunscreen1" data-slide-to="1"></li>
                                                         <li data-target="#carousel-sunscreen1" data-slide-to="2"></li>
                                                         <li data-target="#carousel-sunscreen1" data-slide-to="3"></li>
                                                      </ol>
                                                      <!-- Wrapper for slides -->
                                                      <div class="carousel-inner">
                                                      <div class="item active">
                                                                        <img src="./img/productos/cortina-sunscreen10.jpg" alt="">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img src="./img/productos/sunscreen1-1.jpg" alt="">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img src="./img/productos/sunscreen1-2.jpg" alt="">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
                                                                     </div>
                                                      </div>
                                                   </div>
                                                   <img class="inline-block img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto">
                                                   <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto">
                                                </div>
                                                <div class="col-md-3">
                                                   <!-- Trigger the modal -->
                                                   <ul class="nav-color">
                                                      <li>
                                                         <a href="#lightbox-sunscreen1" data-toggle="modal" data-slide-to="0">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen1.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Blanco</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen1" data-toggle="modal" data-slide-to="1">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen2.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Gris</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen1" data-toggle="modal" data-slide-to="2">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen3.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Beige</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen1" data-toggle="modal" data-slide-to="3">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen1-gris-bg.jpg');"></div>
                                                            <p class="codigo-color">Gris</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen1" data-toggle="modal" data-slide-to="4">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen1-negro-bg.jpg');"></div>
                                                            <p class="codigo-color">Negro</p>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                   <!-- Modal -->
                                                   <div class="modal fade and carousel slide" id="lightbox-sunscreen1">
                                                      <div class="modal-dialog modal-lg">
                                                         <!-- Modal content-->
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">Sunscreen 1%</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class="carousel slide article-slide carousel-fade" id="sunscreen1-carousel" data-ride="carousel">
                                                                  <!-- Wrapper for slides -->
                                                                  <div class="carousel-inner cont-slider">
                                                                     <div class="item active">
                                                                        <img src="./img/productos/sunscreen1/sunscreen1-1.jpg" alt="">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img src="./img/productos/sunscreen1/sunscreen1-2.jpg" alt="">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img src="./img/productos/sunscreen1/sunscreen1-3.jpg" alt="">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img src="./img/productos/sunscreen1/sunscreen1-gris.jpg" alt="">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img src="./img/productos/sunscreen1/sunscreen1-negro.jpg" alt="">
                                                                     </div>
                                                                  </div>
                                                                  <!-- Indicators -->
                                                                  <ol class="carousel-indicators col-2">
                                                                     <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen1">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen1.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Blanco</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="1" data-target="#lightbox-sunscreen1">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen2.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Gris</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="2" data-target="#lightbox-sunscreen1">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen3.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Beige</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="3" data-target="#lightbox-sunscreen1">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen1-gris-bg.jpg');"></div>
                                                                        <p class="codigo-color">Gris</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="4" data-target="#lightbox-sunscreen1">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen1-negro-bg.jpg');"></div>
                                                                        <p class="codigo-color">Negro</p>
                                                                     </li>
                                                                  </ol>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col-md-3"></div>
                                                                  <div class="col-md-6">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                                  </div>
                                                                  <div class="col-md-3"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- Fin Modal content-->
                                                </div>
                                             </div>
                                             <div id="sunscreen3" class="tab-pane fade">
                                                <div class="col-md-9">
                                                   <div id="carousel-sunscreen3" class="carousel slide" data-ride="carousel">
                                                      <!-- Indicators -->
                                                      <ol class="carousel-indicators">
                                                         <li data-target="#carousel-sunscreen3" data-slide-to="0" class="active"></li>
                                                         <li data-target="#carousel-sunscreen3" data-slide-to="1"></li>
                                                         <li data-target="#carousel-sunscreen3" data-slide-to="2"></li>
                                                         <li data-target="#carousel-sunscreen3" data-slide-to="3"></li>
                                                      </ol>
                                                      <!-- Wrapper for slides -->
                                                      <div class="carousel-inner">
                                                         <div class="item active">
                                                            <img src="./img/productos/cortina-sunscreen.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/cortina-sunscreen3.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/cortina-sunscreen4.jpg" alt="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <img class="inline-block img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto">
                                                   <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto">
                                                </div>
                                                <div class="col-md-3">
                                                   <!-- Trigger the modal -->
                                                   <img class="img-center img-responsive" src="./img/productos/sunscreen3/sunscreen3.jpg" alt="" width="" height="">
                                                   <ul class="nav-color">
                                                      <li>
                                                         <a href="#lightbox-sunscreen3" data-toggle="modal" data-slide-to="0">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-1-color.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Blanco</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen3" data-toggle="modal" data-slide-to="1">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-2-color.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Gris</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen3" data-toggle="modal" data-slide-to="2">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-3-color.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Beige</p>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                   <!-- Modal -->
                                                   <div class="modal fade and carousel slide" id="lightbox-sunscreen3">
                                                      <div class="modal-dialog modal-lg">
                                                         <!-- Modal content-->
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">Sunscreen 3%</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class="carousel slide article-slide carousel-fade" id="sunscreen3-carousel" data-ride="carousel">
                                                                  <!-- Wrapper for slides -->
                                                                  <div class="carousel-inner cont-slider">
                                                                     <div class="item active">
                                                                        <img alt="" title="" src="./img/productos/sunscreen3/sunscreen3-1.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen3/sunscreen3-2.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen3/sunscreen3-3.jpg">
                                                                     </div>
                                                                  </div>
                                                                  <!-- Indicators -->
                                                                  <ol class="carousel-indicators col-2">
                                                                     <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen3">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-1-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Blanco</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="1" data-target="#lightbox-sunscreen3">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-2-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Gris</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="2" data-target="#lightbox-sunscreen3">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-3-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Beige</p>
                                                                     </li>
                                                                  </ol>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col-md-3"></div>
                                                                  <div class="col-md-6">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                                  </div>
                                                                  <div class="col-md-3"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- Fin Modal content-->
                                                </div>
                                             </div>
                                             <div id="sunscreen4" class="tab-pane fade">
                                                <div class="col-md-9">
                                                   <div id="carousel-sunscreen4" class="carousel slide" data-ride="carousel">
                                                      <!-- Indicators -->
                                                      <ol class="carousel-indicators">
                                                         <li data-target="#carousel-sunscreen4" data-slide-to="0" class="active"></li>
                                                         <li data-target="#carousel-sunscreen4" data-slide-to="1"></li>
                                                      </ol>
                                                      <!-- Wrapper for slides -->
                                                      <div class="carousel-inner">
                                                         <div class="item active">
                                                            <img src="./img/productos/cortina-sunscreen8.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/cortina-sunscreen11.jpg" alt="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <img class="img-center img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto">
                                                </div>
                                                <div class="col-md-3">
                                                   <!-- Trigger the modal -->
                                                   <ul class="nav-color">
                                                      <li>
                                                         <a href="#lightbox-sunscreen4" data-toggle="modal" data-slide-to="0">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-1-color.jpg');"></div>
                                                            <p class="codigo-color">Porcelain</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen4" data-toggle="modal" data-slide-to="1">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-2-color.jpg');"></div>
                                                            <p class="codigo-color">Papyrus</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen4" data-toggle="modal" data-slide-to="2">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-3-color.jpg');"></div>
                                                            <p class="codigo-color">Patina</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen4" data-toggle="modal" data-slide-to="3">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-4-color.jpg');"></div>
                                                            <p class="codigo-color">Granite</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen4" data-toggle="modal" data-slide-to="4">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-5-color.jpg');"></div>
                                                            <p class="codigo-color">Carbón</p>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                   <!-- Modal -->
                                                   <div class="modal fade and carousel slide" id="lightbox-sunscreen4">
                                                      <div class="modal-dialog modal-lg">
                                                         <!-- Modal content-->
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">Sunscreen 4%</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class="carousel slide article-slide carousel-fade" id="sunscreen4-carousel" data-ride="carousel">
                                                                  <!-- Wrapper for slides -->
                                                                  <div class="carousel-inner cont-slider">
                                                                     <div class="item active">
                                                                        <img alt="" title="" src="./img/productos/sunscreen4/sunscreen4-1.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen4/sunscreen4-2.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen4/sunscreen4-3.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen4/sunscreen4-4.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen4/sunscreen4-5.jpg">
                                                                     </div>
                                                                  </div>
                                                                  <!-- Indicators -->
                                                                  <ol class="carousel-indicators col-2">
                                                                     <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen4">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-1-color.jpg');"></div>
                                                                        <p class="codigo-color">Porcelain</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="1" data-target="#lightbox-sunscreen4">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-2-color.jpg');"></div>
                                                                        <p class="codigo-color">Papyrus</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="2" data-target="#lightbox-sunscreen4">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-3-color.jpg');"></div>
                                                                        <p class="codigo-color">Patina</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="3" data-target="#lightbox-sunscreen4">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-4-color.jpg');"></div>
                                                                        <p class="codigo-color">Granite</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="4" data-target="#lightbox-sunscreen4">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen4/sunscreen4-5-color.jpg');"></div>
                                                                        <p class="codigo-color">Carbón</p>
                                                                     </li>
                                                                  </ol>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col-md-9">
                                                                     <img class="img-center img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                                  </div>
                                                                  <div class="col-md-3"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- Fin Modal content-->
                                                </div>
                                             </div>
                                             <div id="sunscreen5" class="tab-pane fade">
                                                <div class="col-md-9">
                                                   <div id="carousel-sunscreen5" class="carousel slide" data-ride="carousel">
                                                      <!-- Indicators -->
                                                      <ol class="carousel-indicators">
                                                         <li data-target="#carousel-sunscreen5" data-slide-to="0" class="active"></li>
                                                         <li data-target="#carousel-sunscreen5" data-slide-to="1"></li>
                                                         <li data-target="#carousel-sunscreen5" data-slide-to="2"></li>
                                                      </ol>
                                                      <!-- Wrapper for slides -->
                                                      <div class="carousel-inner">
                                                         <div class="item active">
                                                            <img src="./img/productos/cortina-sunscreen5.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/cortina-sunscreen6.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/cortina-sunscreen7.jpg" alt="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <img class="inline-block img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto">
                                                   <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto">
                                                </div>
                                                <div class="col-md-3">
                                                   <!-- Trigger the modal -->
                                                   <ul class="nav-color">
                                                      <li>
                                                         <a href="#lightbox-sunscreen5" data-toggle="modal" data-slide-to="0">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-1-color.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Blanco</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5" data-toggle="modal" data-slide-to="1">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-3-color.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Beige</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5" data-toggle="modal" data-slide-to="2">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-maiz-bg.jpg');"></div>
                                                            <p class="codigo-color">Maíz</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5" data-toggle="modal" data-slide-to="3">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-4-color.jpg');"></div>
                                                            <p class="codigo-color">Beige/Beige</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5" data-toggle="modal" data-slide-to="4">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-2-color.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Gris</p>
                                                         </a>
                                                      </li>
                                                      
                                                      <li>
                                                         <a href="#lightbox-sunscreen5" data-toggle="modal" data-slide-to="5">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-5-color.jpg');"></div>
                                                            <p class="codigo-color">Beige/Negro</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5" data-toggle="modal" data-slide-to="6">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-negro-gris-bg.jpg');"></div>
                                                            <p class="codigo-color">Negro/Gris</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5" data-toggle="modal" data-slide-to="7">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-6-color.jpg');"></div>
                                                            <p class="codigo-color">Negro/Negro</p>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                   <!-- Modal -->
                                                   <div class="modal fade and carousel slide" id="lightbox-sunscreen5">
                                                      <div class="modal-dialog modal-lg">
                                                         <!-- Modal content-->
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">Sunscreen 5%</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class="carousel slide article-slide carousel-fade" id="sunscreen5-carousel" data-ride="carousel">
                                                                  <!-- Wrapper for slides -->
                                                                  <div class="carousel-inner cont-slider">
                                                                     <div class="item active">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-1.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-2.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-maiz.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-4.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-3.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-5.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-negro-gris.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-6.jpg">
                                                                     </div>
                                                                  </div>
                                                                  <!-- Indicators -->
                                                                  <ol class="carousel-indicators col-2">
                                                                     <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-1-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Blanco</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="1" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-3-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Beige</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="2" data-target="#lightbox-sunscreen5">
                                                                           <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-maiz-bg.jpg');"></div>
                                                                           <p class="codigo-color">Maíz</p>
                                                                     </li>
                                                                                                                                        
                                                                     <li class="" data-slide-to="3" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-4-color.jpg');"></div>
                                                                        <p class="codigo-color">Beige/Beige</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="4" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-2-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Gris</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="5" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-5-color.jpg');"></div>
                                                                        <p class="codigo-color">Beige/Negro</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="6" data-target="#lightbox-sunscreen5">
                                                                           <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-negro-gris-bg.jpg');"></div>
                                                                           <p class="codigo-color">Negro/Gris</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="7" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-6-color.jpg');"></div>
                                                                        <p class="codigo-color">Negro/Negro</p>
                                                                     </li>
                                                                  </ol>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col-md-9">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto">
                                                                  </div>
                                                                  <div class="col-md-3"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- Fin Modal content-->
                                                </div>
                                             </div>
                                             <div id="sunscreen5bicolor" class="tab-pane fade">
                                                <div class="col-md-9">
                                                   <div id="carousel-sunscreen5bicolor" class="carousel slide" data-ride="carousel">
                                                      <!-- Indicators -->
                                                      <ol class="carousel-indicators">
                                                         <li data-target="#carousel-sunscreen5bicolor" data-slide-to="0" class="active"></li>
                                                         <li data-target="#carousel-sunscreen5bicolor" data-slide-to="1"></li>
                                                         <li data-target="#carousel-sunscreen5bicolor" data-slide-to="2"></li>
                                                         <li data-target="#carousel-sunscreen5bicolor" data-slide-to="3"></li>
                                                      </ol>
                                                      <!-- Wrapper for slides -->
                                                      <div class="carousel-inner">
                                                         <div class="item active">
                                                            <img src="./img/productos/cortina-sunscreen12.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/sunscreen5-bicolor-1.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/sunscreen5-bicolor-2.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/sunscreen5-bicolor-3.jpg" alt="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <img class="img-center img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto">
                                                </div>
                                                <div class="col-md-3">
                                                   <!-- Trigger the modal -->
                                                   <img class="img-center img-responsive" src="./img/productos/bicolor5/bicolor5.jpg" alt="" width="" height="">
                                                   <ul class="nav-color">
                                                      <li>
                                                         <a href="#lightbox-sunscreen5bicolor" data-toggle="modal" data-slide-to="0">
                                                            <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-1-color.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Arena/Bronce</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5bicolor" data-toggle="modal" data-slide-to="1">
                                                            <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-2-color.jpg');"></div>
                                                            <p class="codigo-color">Blanco/Blanco/Negro</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5bicolor" data-toggle="modal" data-slide-to="2">
                                                            <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-3-color.jpg');"></div>
                                                            <p class="codigo-color">Negro/Arena/Bronce</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5bicolor" data-toggle="modal" data-slide-to="3">
                                                            <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-4-color.jpg');"></div>
                                                            <p class="codigo-color">Negro/Negro/Blanco</p>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                   <!-- Modal -->
                                                   <div class="modal fade and carousel slide" id="lightbox-sunscreen5bicolor">
                                                      <div class="modal-dialog modal-lg">
                                                         <!-- Modal content-->
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">Sunscreen Bicolor 5%</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class="carousel slide article-slide carousel-fade" id="sunscreen5bicolor-carousel" data-ride="carousel">
                                                                  <!-- Wrapper for slides -->
                                                                  <div class="carousel-inner cont-slider">
                                                                     <div class="item active">
                                                                        <img alt="" title="" src="./img/productos/bicolor5/BICOLOR5-1.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/bicolor5/BICOLOR5-2.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/bicolor5/BICOLOR5-3.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/bicolor5/BICOLOR5-4.jpg">
                                                                     </div>
                                                                  </div>
                                                                  <!-- Indicators -->
                                                                  <ol class="carousel-indicators col-2">
                                                                     <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen5bicolor">
                                                                        <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-1-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Arena/Bronce</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="1" data-target="#lightbox-sunscreen5bicolor">
                                                                        <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-2-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Blanco/Negro</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="2" data-target="#lightbox-sunscreen5bicolor">
                                                                        <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-3-color.jpg');"></div>
                                                                        <p class="codigo-color">Negro/Arena/Bronce</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="3" data-target="#lightbox-sunscreen5bicolor">
                                                                        <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-4-color.jpg');"></div>
                                                                        <p class="codigo-color">Negro/Negro/Blanco</p>
                                                                     </li>
                                                                  </ol>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col-md-3"></div>
                                                                  <div class="col-md-6">
                                                                     <img class="img-center img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                                  </div>
                                                                  <div class="col-md-3"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- Fin Modal content-->
                                                </div>
                                             </div>
                                             <div id="sunscreen5-tokyo" class="tab-pane fade">
                                                <div class="col-md-9">
                                                   <div id="carousel-sunscreen5-tokyo" class="carousel slide" data-ride="carousel">
                                                      <!-- Indicators -->
                                                      <ol class="carousel-indicators">
                                                         <li data-target="#carousel-sunscreen5-tokyo" data-slide-to="0" class="active"></li>
                                                         <li data-target="#carousel-sunscreen5-tokyo" data-slide-to="1"></li>
                                                         <li data-target="#carousel-sunscreen5-tokyo" data-slide-to="2"></li>
                                                      </ol>
                                                      <!-- Wrapper for slides -->
                                                      <div class="carousel-inner">
                                                         <div class="item active">
                                                            <img src="./img/productos/cortina-sunscreen5-tokyo1.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/cortina-sunscreen5-tokyo2.jpg" alt="">
                                                         </div>
                                                         <div class="item">
                                                            <img src="./img/productos/cortina-sunscreen5-tokyo3.jpg" alt="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto">
                                                </div>
                                                <div class="col-md-3">
                                                   <!-- Trigger the modal -->
                                                   <ul class="nav-color">
                                                      <li>
                                                         <a href="#lightbox-sunscreen5-tokyo" data-toggle="modal" data-slide-to="0">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5-tokyo/lino-perla-bg.jpg');"></div>
                                                            <p class="codigo-color">Lino Perla</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5-tokyo" data-toggle="modal" data-slide-to="1">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5-tokyo/lino-bronce-bg.jpg');"></div>
                                                            <p class="codigo-color">Lino Bronce</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen5-tokyo" data-toggle="modal" data-slide-to="2">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen5-tokyo/negro-blanco-negro-bg.jpg');"></div>
                                                            <p class="codigo-color">Negro Blanco Negro</p>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                   <!-- Modal -->
                                                   <div class="modal fade and carousel slide" id="lightbox-sunscreen5-tokyo">
                                                      <div class="modal-dialog modal-lg">
                                                         <!-- Modal content-->
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">Sunscreen 5%</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class="carousel slide article-slide carousel-fade" id="sunscreen5-carousel" data-ride="carousel">
                                                                  <!-- Wrapper for slides -->
                                                                  <div class="carousel-inner cont-slider">
                                                                     <div class="item active">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5-tokyo/lino-perla.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5-tokyo/lino-bronce.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5-tokyo/negro-blanco-negro.jpg">
                                                                     </div>
                                                                  </div>
                                                                  <!-- Indicators -->
                                                                  <ol class="carousel-indicators col-2">
                                                                     <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen5-tokyo">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5-tokyo/lino-perla.jpg');"></div>
                                                                        <p class="codigo-color">Lino Blanco</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="1" data-target="#lightbox-sunscreen5-tokyo">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5-tokyo/lino-bronce.jpg');"></div>
                                                                        <p class="codigo-color">Lino Bronce</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="2" data-target="#lightbox-sunscreen5-tokyo">
                                                                           <div class="color" style="background-image: url('./img/productos/sunscreen5-tokyo/negro-blanco-negro.jpg');"></div>
                                                                           <p class="codigo-color">Negro Blanco Negro</p>
                                                                     </li>
                                                                  </ol>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col-md-9">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto">
                                                                  </div>
                                                                  <div class="col-md-3"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- Fin Modal content-->
                                                </div>
                                             </div>
                                             <div id="sunscreen10-rustico" class="tab-pane fade">
                                                <div class="col-md-9">
                                                   <div id="carousel-sunscreen10-rustico" class="carousel slide" data-ride="carousel">
                                                      <!-- Indicators -->
                                                      <ol class="carousel-indicators">
                                                         <li data-target="#carousel-sunscreen10-rustico" data-slide-to="0" class="active"></li>
                                                      </ol>
                                                      <!-- Wrapper for slides -->
                                                      <div class="carousel-inner">
                                                         <div class="item active">
                                                            <img src="./img/productos/cortina-sunscreen10-rustico.jpg" alt="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <!-- Trigger the modal -->
                                                   <ul class="nav-color">
                                                      <li>
                                                         <a href="#lightbox-sunscreen10-rustico" data-toggle="modal" data-slide-to="0">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen10-rustico/blanco-bg.jpg');"></div>
                                                            <p class="codigo-color">Blanco</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen10-rustico" data-toggle="modal" data-slide-to="1">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen10-rustico/natural-bg.jpg');"></div>
                                                            <p class="codigo-color">Natural</p>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#lightbox-sunscreen10-rustico" data-toggle="modal" data-slide-to="2">
                                                            <div class="color" style="background-image: url('./img/productos/sunscreen10-rustico/gris-bg.jpg');"></div>
                                                            <p class="codigo-color">Gris</p>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                   <!-- Modal -->
                                                   <div class="modal fade and carousel slide" id="lightbox-sunscreen10-rustico">
                                                      <div class="modal-dialog modal-lg">
                                                         <!-- Modal content-->
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                               <h4 class="modal-title">Sunscreen 10% Rústico</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class="carousel slide article-slide carousel-fade" id="sunscreen5-carousel" data-ride="carousel">
                                                                  <!-- Wrapper for slides -->
                                                                  <div class="carousel-inner cont-slider">
                                                                     <div class="item active">
                                                                        <img alt="" title="" src="./img/productos/sunscreen10-rustico/blanco.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen10-rustico/natural.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen10-rustico/gris.jpg">
                                                                     </div>
                                                                  </div>
                                                                  <!-- Indicators -->
                                                                  <ol class="carousel-indicators col-2">
                                                                     <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen10-rustico">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen10-rustico/blanco.jpg');"></div>
                                                                        <p class="codigo-color">Blanco</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="1" data-target="#lightbox-sunscreen10-rustico">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen10-rustico/natural.jpg');"></div>
                                                                        <p class="codigo-color">Natural</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="2" data-target="#lightbox-sunscreen10-rustico">
                                                                           <div class="color" style="background-image: url('./img/productos/sunscreen10-rustico/gris.jpg');"></div>
                                                                           <p class="codigo-color">Gris</p>
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
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /.row -->
                              </div>
                              <div class="tab-pane" id="roller-sistema-doble">
                                 <div class="row noMargin pad25">
                                    <div class="col-sm-12 noPadding">
                                       <h2 class="text-center">Roller Sistema Doble</h2>
                                       <p class="pad25">Las Cortinas Roller Sistema Doble combinan una Cortina realizada en tela Blackout con otra cortina de tela Sunscreen logrando así un completo control de la luz solar. Proporciona un oscurecimiento total para el ambientes, donde la privacidad y la oscuridad es sumamente necesaria, dado por el Blackout, y otorga un filtrado en el ingreso de luminosidad necesario dado por el Sunscreen. Estas Cortinas son perfectas para dormitorios, livings, salas de estar, lofts y comedores.
                                       </p>
                                       <div class="col-md-9">
                                          <div id="carousel-roller-sistema-doble" class="carousel slide" data-ride="carousel">
                                             <!-- Indicators -->
                                             <ol class="carousel-indicators">
                                                <li data-target="#carousel-roller-sistema-doble" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-roller-sistema-doble" data-slide-to="1"></li>
                                                <li data-target="#carousel-roller-sistema-doble" data-slide-to="2"></li>
                                                <li data-target="#carousel-roller-sistema-doble" data-slide-to="3"></li>
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/sistema-doble1.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/sistema-doble2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/sistema-doble3.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/sistema-doble4.jpg" alt="">
                                                </div>
                                             </div>
                                          </div>
                                          <img class="inline-block img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                          <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                          <img class="inline-block img-responsive" src="./img/empresa/unitec.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                       </div>
                                       <div class="col-md-3">
                                          <!-- Trigger the modal -->
                                          <img class="img-center img-responsive" src="./img/productos/roller-sistema-doble/roller-sistema-doble.jpg" alt="" width="" height="">
                                          <ul id="sistema-doble" class="nav-color">
                                             <p class="titulo-color">Sunscreen</p>
                                             <li> <a href="#lightbox-sunscreen1-2" data-toggle="modal" data-slide-to="0">
                                                <img class="img-center img-responsive" src="./img/productos/sunscreen5/sunscreen5.jpg">
                                                </a>
                                             </li>
                                             <hr class="top40">
                                             <p class="titulo-color">Blackout</p>
                                             <li>
                                                <a href="#lightbox-blackout-2" data-toggle="modal" data-slide-to="0">
                                                <img class="img-center img-responsive" src="./img/productos/blackout/blackout.jpg">
                                                </a>
                                             </li>
                                          </ul>
                                          <!-- Modal -->
                                          <div class="modal fade and carousel slide" id="lightbox-sunscreen1-2" style="display: none;">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Sunscreen</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                               <div class="carousel slide article-slide carousel-fade" id="sunscreen5-carousel" data-ride="carousel">
                                                                  <!-- Wrapper for slides -->
                                                                  <div class="carousel-inner cont-slider">
                                                                     <div class="item active">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-1.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-2.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-maiz.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-4.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-3.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-5.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-negro-gris.jpg">
                                                                     </div>
                                                                     <div class="item">
                                                                        <img alt="" title="" src="./img/productos/sunscreen5/sunscreen5-6.jpg">
                                                                     </div>
                                                                  </div>
                                                                  <!-- Indicators -->
                                                                  <ol class="carousel-indicators col-2">
                                                                     <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-1-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Blanco</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="1" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-3-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Beige</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="2" data-target="#lightbox-sunscreen5">
                                                                           <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-maiz-bg.jpg');"></div>
                                                                           <p class="codigo-color">Maíz</p>
                                                                     </li>
                                                                                                                                        
                                                                     <li class="" data-slide-to="3" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-4-color.jpg');"></div>
                                                                        <p class="codigo-color">Beige/Beige</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="4" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-2-color.jpg');"></div>
                                                                        <p class="codigo-color">Blanco/Gris</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="5" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-5-color.jpg');"></div>
                                                                        <p class="codigo-color">Beige/Negro</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="6" data-target="#lightbox-sunscreen5">
                                                                           <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-negro-gris-bg.jpg');"></div>
                                                                           <p class="codigo-color">Negro/Gris</p>
                                                                     </li>
                                                                     <li class="" data-slide-to="7" data-target="#lightbox-sunscreen5">
                                                                        <div class="color" style="background-image: url('./img/productos/sunscreen5/sunscreen5-6-color.jpg');"></div>
                                                                        <p class="codigo-color">Negro/Negro</p>
                                                                     </li>
                                                                  </ol>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col-md-9">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/mermet.jpg" alt="" width="200" height="auto">
                                                                     <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto">
                                                                  </div>
                                                                  <div class="col-md-3"></div>
                                                               </div>
                                                            </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                          <!-- Modal -->
                                          <div class="modal fade and carousel slide" id="lightbox-blackout-2">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Blackout</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="roller-blackout-carousel" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0004_1.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0003_2.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0002_3.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0001_4.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/blackout/BLACKOUT_0000_5.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-2">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-blackout-2">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0004_1-color.jpg');"></div>
                                                               <p class="codigo-color">Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-blackout-2">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0003_2-color.jpg');"></div>
                                                               <p class="codigo-color">Natural</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-blackout-2">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0002_3-color.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-blackout-2">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0001_4-color.jpg');"></div>
                                                               <p class="codigo-color">Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-blackout-2">
                                                               <div class="color" style="background-image: url('./img/productos/blackout/BLACKOUT_0000_5-color.jpg');"></div>
                                                               <p class="codigo-color">Negro</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md-9">
                                                            <img class="img-center img-responsive" src="./img/empresa/unitec.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                         </div>
                                                         <div class="col-md-3"></div>
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
                              <div class="tab-pane" id="roller-dual">
                                 <div class="row noMargin pad25">
                                    <div class="col-sm-12 noPadding">
                                       <h2 class="text-center">Roller Dual</h2>
                                       <p class="pad25">La cortina Dual es un sistema innovador confeccionada con un paño de tela que cuenta con franjas transparentes y traslúcidas, colocado doblemente, permitiendo una regulación adecuada de la luz que ingresa al ambiente. Con altos estándares de calidad y diseño, la cortina Dual es uno de los productos que más promete en el ambiente de la protección solar. Combina un diseño contemporáneo y funcional dos elementos importantes para cubrir las necesidades de una cortina, visión a través de ella y privacidad controlable a voluntad.
                                          Estas Cortinas son Ideales para ambientes como Living, Comedor, Salas de Reunión y Oficinas.
                                       </p>
                                       <div class="col-md-9">
                                          <div id="carousel-roller-dual" class="carousel slide" data-ride="carousel">
                                             <!-- Indicators -->
                                             <ol class="carousel-indicators">
                                                <li data-target="#carousel-roller-dual" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-roller-dual" data-slide-to="1"></li>
                                                <li data-target="#carousel-roller-dual" data-slide-to="2"></li>
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/roller-dual.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/roller-dual2.jpeg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/roller-dual3.jpg" alt="">
                                                </div>
                                             </div>
                                          </div>
                                          <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                       </div>
                                       <div class="col-md-3">
                                          <!-- Trigger the modal -->
                                          <img class="img-center img-responsive" src="./img/productos/dual/dual.jpg" alt="" width="" height="">
                                          <ul class="nav-color">
                                             <li>
                                                <a href="#lightbox-roller-dual" data-toggle="modal" data-slide-to="0">
                                                   <div class="color" style="background-image: url('./img/productos/dual/dual1.jpg');"></div>
                                                   <p class="codigo-color">Blanco</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-roller-dual" data-toggle="modal" data-slide-to="1">
                                                   <div class="color" style="background-image: url('./img/productos/dual/dual2.jpg');"></div>
                                                   <p class="codigo-color">Blanco/Beige</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-roller-dual" data-toggle="modal" data-slide-to="2">
                                                   <div class="color" style="background-image: url('./img/productos/dual/dual3.jpg');"></div>
                                                   <p class="codigo-color">Beige Oscuro</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-roller-dual" data-toggle="modal" data-slide-to="3">
                                                   <div class="color" style="background-image: url('./img/productos/dual/dual4.jpg');"></div>
                                                   <p class="codigo-color">Negro</p>
                                                </a>
                                             </li>
                                          </ul>
                                          <!-- Modal -->
                                          <div class="modal fade and carousel slide" id="lightbox-roller-dual">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Roller Dual</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="roller-dual-carousel" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/dual/dual1.gif">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/dual/dual2.gif">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/dual/dual3.gif">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/dual/dual4.gif">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-2">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-roller-dual">
                                                               <div class="color" style="background-image: url('./img/productos/dual/dual1.jpg');"></div>
                                                               <p class="codigo-color">Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-roller-dual">
                                                               <div class="color" style="background-image: url('./img/productos/dual/dual2.jpg');"></div>
                                                               <p class="codigo-color">Blanco/Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-roller-dual">
                                                               <div class="color" style="background-image: url('./img/productos/dual/dual3.jpg');"></div>
                                                               <p class="codigo-color">Beige Oscuro</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-roller-dual">
                                                               <div class="color" style="background-image: url('./img/productos/dual/dual4.jpg');"></div>
                                                               <p class="codigo-color">Negro</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md-3"></div>
                                                         <div class="col-md-6">
                                                            <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                            <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                         </div>
                                                         <div class="col-md-3"></div>
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
                              <div class="tab-pane" id="roller-translucida">
                                 <div class="row noMargin pad25">
                                    <div class="col-sm-12 noPadding">
                                       <h2 class="text-center">Roller Translucida</h2>
                                       <p class="pad25">Este Material, a base de Poliester, permite el ingreso de luminosidad pero sin visión, manteniendo siempre la privacidad en el ambiente y filtrando los rayos UV, protegiendo así los pisos de madera y mobiliario. Es ideal para Ventanas que se ubican en Frentes o ambientes donde necesito privacidad, principalmente de noche. Existe una amplia gama de Colores y tramas disponibles.</p>
                                       <div class="col-md-9">
                                          <div id="carousel-roller-translucida" class="carousel slide" data-ride="carousel">
                                             <!-- Indicators -->
                                             <ol class="carousel-indicators">
                                                <li data-target="#carousel-roller-translucida" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-roller-translucida" data-slide-to="1"></li>
                                                <li data-target="#carousel-roller-translucida" data-slide-to="2"></li>
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/translucida-1.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/translucida-2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/translucida-3.jpg" alt="">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <!-- Trigger the modal -->
                                          <img class="img-center img-responsive" src="./img/productos/translucida/blackout.jpg" alt="" width="" height="">
                                          <ul class="nav-color">
                                             <li>
                                                <a href="#lightbox-patagonia" data-toggle="modal" data-slide-to="3">
                                                   <div class="color" style="background-image: url('./img/productos/patagonia/gris-claro.jpg');"></div>
                                                   <p class="codigo-color">Patagonia</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-translucida" data-toggle="modal" data-slide-to="1">
                                                   <div class="color" style="background-image: url('./img/productos/translucida/crudo.jpg');"></div>
                                                   <p class="codigo-color">Crudo</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-translucida" data-toggle="modal" data-slide-to="2">
                                                   <div class="color" style="background-image: url('./img/productos/translucida/lino.jpg');"></div>
                                                   <p class="codigo-color">Lino</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-translucida" data-toggle="modal" data-slide-to="3">
                                                   <div class="color" style="background-image: url('./img/productos/translucida/beige.jpg');"></div>
                                                   <p class="codigo-color">Beige</p>
                                                </a>
                                             </li>
                                             
                                             <li>
                                                <a href="#lightbox-translucida" data-toggle="modal" data-slide-to="4">
                                                   <div class="color" style="background-image: url('./img/productos/translucida/gris-claro.jpg');"></div>
                                                   <p class="codigo-color">Gris Claro</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-translucida" data-toggle="modal" data-slide-to="5">
                                                   <div class="color" style="background-image: url('./img/productos/translucida/gris-oscuro.jpg');"></div>
                                                   <p class="codigo-color">Gris Oscuro</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-devon" data-toggle="modal" data-slide-to="1">
                                                   <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/chocolate.jpg');"></div>
                                                   <p class="codigo-color">Devon</p>
                                                </a>
                                             </li>
                                          </ul>
                                          <!-- Modal -->
                                          <div class="modal fade and carousel slide" id="lightbox-translucida">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Roller Translucida</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="carousel slide article-slide carousel-fade" id="roller-translucida" data-ride="carousel">
                                                         <!-- Wrapper for slides -->
                                                         <div class="carousel-inner cont-slider">
                                                            <div class="item active">
                                                               <img alt="" title="" src="./img/productos/translucida/crudo.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/translucida/lino.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/translucida/beige.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/translucida/gris-claro.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/translucida/gris-oscuro.jpg">
                                                            </div>
                                                            
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-2">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-translucida">
                                                               <div class="color" style="background-image: url('./img/productos/translucida/crudo.jpg');"></div>
                                                               <p class="codigo-color">Crudo</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-translucida">
                                                               <div class="color" style="background-image: url('./img/productos/translucida/lino.jpg');"></div>
                                                               <p class="codigo-color">Lino</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-translucida">
                                                               <div class="color" style="background-image: url('./img/productos/translucida/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-translucida">
                                                               <div class="color" style="background-image: url('./img/productos/translucida/gris-claro.jpg');"></div>
                                                               <p class="codigo-color">Gris Claro</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-translucida">
                                                               <div class="color" style="background-image: url('./img/productos/translucida/gris-oscuro.jpg');"></div>
                                                               <p class="codigo-color">Gris Oscuro</p>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                            <!-- Patagonia -->
                                            <div class="modal fade and carousel slide" id="lightbox-patagonia">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Roller Translucida - Patagonia</h4>
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
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-patagonia">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/crudo.jpg');"></div>
                                                               <p class="codigo-color">Crudo</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-patagonia">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/lino.jpg');"></div>
                                                               <p class="codigo-color">Lino</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-patagonia">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-patagonia">
                                                               <div class="color" style="background-image: url('./img/productos/patagonia/gris-claro.jpg');"></div>
                                                               <p class="codigo-color">Gris Claro</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-patagonia">
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


                                          <!-- Devon -->
                                          <div class="modal fade and carousel slide" id="lightbox-devon">
                                             <div class="modal-dialog modal-lg">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Roller Translucida - Devon</h4>
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
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-devon">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/beige.jpg');"></div>
                                                               <p class="codigo-color">Beige</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-devon">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/chocolate.jpg');"></div>
                                                               <p class="codigo-color">Chocolate</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-devon">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/gris.jpg');"></div>
                                                               <p class="codigo-color">Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-devon">
                                                               <div class="color" style="background-image: url('./img/productos/bandas-verticales/linea-devon/marfil.jpg');"></div>
                                                               <p class="codigo-color">Marfil</p>
                                                            </li>
                                                            <li class="" data-slide-to="4" data-target="#lightbox-devon">
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
                           <select name="location" class="form-control" id="location" required data-validation-required-message="Por favor selecciona una localidad">
                                             <option value=""></option>
                                             <option>Córdoba Centro</option>
                                             <option>Córdoba Zona Norte</option>
                                             <option>Córdoba Zona Sur</option>
                                             <option>Freyre</option>
                                          </select>
                           <p class="help-block text-danger"></p>
                           </div>
                           <div class="col-lg-12 noPadding" id="divCortinas">
                              <div>
                                 <div class="form-group col-md-4 floating-label-form-group controls">
                                    <label>Tipo de Cortina</label>
                                    <select class="form-control" id="TipoCortina">
                                       <option value=""></option>
                                       <option>Bandas Verticales</option>
                                       <option>Blackout</option>
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
                              <button type="submit" class="btn btn-enviar">Enviar</button>
                           </div>
                        </div>
                        <br>
                        <div id="success"></div>
                     </form>
                  </div>
                  <div class="col-sm-5 text-center" style="font-family: 'BentonSans-Medium'; font-size: 16px;">
                     <img class="img-center" src="./img/home/_0003_icono2.png" width="135px" height="135px"/>
                     <div style="margin: 15px;"><strong>¿CÓMO TOMAR MEDIDAS?</strong><br/> Lee <button type="button"  data-toggle="modal" data-target="#medidas">AQUI</button> el instructivo<br/> para tomar la medida correcta de tu cortina. </div>
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
   </body>
</html>