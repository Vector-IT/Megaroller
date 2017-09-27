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
                     <h1 class="gris alignCenter bottom40 top40">Cortinas</h1>
                     <div id="tabs-materiales" class="top40">
                        <div class="tabbable">
                           <ul  class="nav nav-pills">
                              <li class="active"><a  href="#roller-blackout" data-toggle="tab">Roller Blackout</a>
                              </li>
                              <li><a href="#roller-sunscreen" data-toggle="tab">Roller Sunscreen</a>
                              </li>
                              <li><a href="#roller-sistema-doble" data-toggle="tab">Roller Sistema Doble</a>
                              </li>
                              <li><a href="#roller-dual" data-toggle="tab">Roller Dual</a>
                              </li>
                           </ul>
                           <div class="tab-content clearfix">
                              <div class="tab-pane active" id="roller-blackout">
                                 <div class="row noMargin pad25">
                                    <div class="col-sm-12 noPadding">
                                       <h1 class="nombre-producto">Roller Blackout</h1>
                                       <div class="col-md-9">
                                          <div id="carousel-roller-blackout" class="carousel slide" data-ride="carousel">
                                             <p class="overlay-desc">Nuestras Cortinas Roller Blackout están fabricadas con los mejores componentes del mercado. Este tejido, de origen USA o CHINA, está constituido a base de fibra de vidrio y recubierto con 3 láminas de PVC.
                                                Su factor de oscurecimiento es prácticamente del 100%, ya que la tela logra evitar completamente la filtración de luz al tiempo que resiste las altas temperaturas.
                                             </p>
                                             <!-- Indicators -->
                                             <ol class="carousel-indicators">
                                                <li data-target="#carousel-roller-blackout" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-roller-blackout" data-slide-to="1"></li>
                                                <li data-target="#carousel-roller-blackout" data-slide-to="2"></li>
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/blackout2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/blackout2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/blackout2.jpg" alt="">
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
                                                            </div></div>
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
                                       <h1 class="nombre-producto">Roller Sunscreen</h1>
                                       <p class="pad25">Nuestras Cortinas Roller Sunscreen son fabricadas con la más alta calidad, este material es importado de EEUU o Europa y ofrece ventajas con respecto a otras telas, dado que filtra y modera la entrada de luz natural protegiendo el ambiente y su mobiliario de los rayos UV, ayuda a regular la temperatura ambiente y otorga una agradable decoración y estética.
                                          Su tela de apariencia microperforada también brinda la posibilidad de disfrutar de espacios más frescos e íntimos, permitiendo ver a través de ella y contemplar el paisaje exterior.
                                       </p>
                                       <div class="tabbable">
                                          <ul class="nav nav-tabs">
                                             <li class="active"><a data-toggle="tab" href="#sunscreen1">Sunscreen 1%</a></li>
                                             <li><a data-toggle="tab" href="#sunscreen3">Sunscreen 3%</a></li>
                                             <li><a data-toggle="tab" href="#sunscreen4">Sunscreen 4%</a></li>
                                             <li><a data-toggle="tab" href="#sunscreen5">Sunscreen 5%</a></li>
                                             <li><a data-toggle="tab" href="#sunscreen5bicolor">Sunscreen Bicolor 5%</a></li>
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
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
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

                                          <img class="img-center img-responsive" src="./img/productos/sunscreen1/sunscreen.jpg" alt="" width="" height="">
                                          <ul class="nav-color">
                                             <li>
                                                <a href="#lightbox-sunscreen1" data-toggle="modal" data-slide-to="0">
                                                   <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen1.jpg');"></div>
                                                   <p class="codigo-color">Blanco / Blanco</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-sunscreen1" data-toggle="modal" data-slide-to="1">
                                                   <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen2.jpg');"></div>
                                                   <p class="codigo-color">Blanco / Gris</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-sunscreen1" data-toggle="modal" data-slide-to="2">
                                                   <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen3.jpg');"></div>
                                                   <p class="codigo-color">Blanco / Beige</p>
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
                                                               <img alt="" title="" src="./img/productos/sunscreen1/sunscreen1-1.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/sunscreen1/sunscreen1-2.jpg">
                                                            </div>
                                                            <div class="item">
                                                               <img alt="" title="" src="./img/productos/sunscreen1/sunscreen1-3.jpg">
                                                            </div>
                                                         </div>
                                                         <!-- Indicators -->
                                                         <ol class="carousel-indicators col-2">
                                                            <li class="active" data-slide-to="0" data-target="#lightbox-sunscreen1">
                                                               <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen1.jpg');"></div>
                                                               <p class="codigo-color">Blanco / Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-sunscreen1">
                                                               <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen2.jpg');"></div>
                                                               <p class="codigo-color">Blanco / Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-sunscreen1">
                                                               <div class="color" style="background-image: url('./img/productos/sunscreen1/sunscreen3.jpg');"></div>
                                                               <p class="codigo-color">Blanco / Beige</p>
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
                                                            </div></div>
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
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
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

                                          <img class="img-center img-responsive" src="./img/productos/sunscreen3/sunscreen3.jpg" alt="" width="" height="">
                                          <ul class="nav-color">
                                             <li>
                                                <a href="#lightbox-sunscreen3" data-toggle="modal" data-slide-to="0">
                                                   <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-1-color.jpg');"></div>
                                                   <p class="codigo-color">Blanco / Blanco</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-sunscreen3" data-toggle="modal" data-slide-to="1">
                                                   <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-2-color.jpg');"></div>
                                                   <p class="codigo-color">Blanco / Gris</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-sunscreen3" data-toggle="modal" data-slide-to="2">
                                                   <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-3-color.jpg');"></div>
                                                   <p class="codigo-color">Blanco / Beige</p>
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
                                                               <p class="codigo-color">Blanco / Blanco</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-sunscreen3">
                                                               <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-2-color.jpg');"></div>
                                                               <p class="codigo-color">Blanco / Gris</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-sunscreen3">
                                                               <div class="color" style="background-image: url('./img/productos/sunscreen3/sunscreen3-3-color.jpg');"></div>
                                                               <p class="codigo-color">Blanco / Beige</p>
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
                                                            </div></div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Fin Modal content-->
                                       </div>                         
                                             </div>
                                             <div id="sunscreen4" class="tab-pane fade">
                                                <div class="carousel slide article-slide carousel-fade" id="sunscreen4-carousel" data-ride="carousel">
                                                   <!-- Wrapper for slides -->
                                                   <div class="carousel-inner cont-slider">
                                                      <div class="item active">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                   </div>
                                                   <!-- Indicators -->
                                                   <ol class="carousel-indicators col-2">
                                                      <li class="active" data-slide-to="0" data-target="#sunscreen4-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="1" data-target="#sunscreen4-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="2" data-target="#sunscreen4-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="3" data-target="#sunscreen4-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="4" data-target="#sunscreen4-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="5" data-target="#sunscreen4-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                   </ol>
                                                </div>
                                             </div>
                                             <div id="sunscreen5" class="tab-pane fade">
                                                <div class="carousel slide article-slide carousel-fade" id="sunscreen5-carousel" data-ride="carousel">
                                                   <!-- Wrapper for slides -->
                                                   <div class="carousel-inner cont-slider">
                                                      <div class="item active">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                      <div class="item">
                                                         <img alt="" title="" src="./img/productos/cortina-sunscreen2.jpg">
                                                      </div>
                                                   </div>
                                                   <!-- Indicators -->
                                                   <ol class="carousel-indicators col-2">
                                                      <li class="active" data-slide-to="0" data-target="#sunscreen5-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="1" data-target="#sunscreen5-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="2" data-target="#sunscreen5-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="3" data-target="#sunscreen5-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="4" data-target="#sunscreen5-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                      <li class="" data-slide-to="5" data-target="#sunscreen5-carousel">
                                                         <div class="color" style="background-color: #f0ebd8;"></div>
                                                         <p class="codigo-color">Beige #123456</p>
                                                      </li>
                                                   </ol>
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
                                             </ol>
                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">
                                                <div class="item active">
                                                   <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/cortina-sunscreen2.jpg" alt="">
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
                                                   <p class="codigo-color">COLOR</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-sunscreen5bicolor" data-toggle="modal" data-slide-to="1">
                                                   <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-2-color.jpg');"></div>
                                                   <p class="codigo-color">COLOR</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-sunscreen5bicolor" data-toggle="modal" data-slide-to="2">
                                                   <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-3-color.jpg');"></div>
                                                   <p class="codigo-color">COLOR</p>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#lightbox-sunscreen5bicolor" data-toggle="modal" data-slide-to="3">
                                                   <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-4-color.jpg');"></div>
                                                   <p class="codigo-color">COLOR</p>
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
                                                               <p class="codigo-color">COLOR</p>
                                                            </li>
                                                            <li class="" data-slide-to="1" data-target="#lightbox-sunscreen5bicolor">
                                                               <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-2-color.jpg');"></div>
                                                               <p class="codigo-color">COLOR</p>
                                                            </li>
                                                            <li class="" data-slide-to="2" data-target="#lightbox-sunscreen5bicolor">
                                                               <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-3-color.jpg');"></div>
                                                               <p class="codigo-color">COLOR</p>
                                                            </li>
                                                            <li class="" data-slide-to="3" data-target="#lightbox-sunscreen5bicolor">
                                                               <div class="color" style="background-image: url('./img/productos/bicolor5/BICOLOR5-4-color.jpg');"></div>
                                                               <p class="codigo-color">COLOR</p>
                                                            </li>                                                            
                                                         </ol>
                                                      </div>
                                                            <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-6">
                    
                                                            <img class="img-center img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
                                                            </div>
                                                            <div class="col-md-3"></div>
                                                            </div></div>
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
                                       <h1 class="nombre-producto">Roller Sistema Doble</h1>
                                       

                                    </div>
                                 </div>
                                 <!-- /.row -->
                              </div>
                              <div class="tab-pane" id="roller-dual">
                                 <div class="row noMargin pad25">
                                    <div class="col-sm-12 noPadding">
                                       <h1 class="nombre-producto">Roller Dual</h1>

                                     <div class="col-md-9">
                                        <div id="carousel-roller-dual" class="carousel slide" data-ride="carousel">
                                                                                   <p class="overlay-desc">La cortina Dual es un sistema innovador confeccionada con un paño de tela que cuenta con franjas transparentes y traslúcidas, colocado doblemente, permitiendo una regulación adecuada de la luz que ingresa al ambiente. Con altos estándares de calidad y diseño, la cortina Dual es uno de los productos que más promete en el ambiente de la protección solar. Combina un diseño contemporáneo y funcional dos elementos importantes para cubrir las necesidades de una cortina, visión a través de ella y privacidad controlable a voluntad.
                                          Estas Cortinas son Ideales para ambientes como Living, Comedor, Salas de Reunión y Oficinas.
                                       </p> 
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
                                                   <img src="./img/productos/roller-dual.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                   <img src="./img/productos/roller-dual.jpg" alt="">
                                                </div>
                                             </div>
                                          </div>
                                                <img class="inline-block img-responsive" src="./img/empresa/copaco.jpg" alt="" width="200" height="auto"  style="margin-top: 25px; margin-bottom: 25px;">
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
                                                               <p class="codigo-color">Blanco / Beige</p>
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
                                                            </div></div>
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
            <!-- TABS MATERIALES TOLDOS -->
            <div id="materiales-toldos" class="container-full">
               <div class="row noMargin">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10">
                     <h1 class="gris alignCenter bottom40 top40">Toldos</h1>
                     <div id="tabs-materiales" class="top40">
                        <ul  class="nav nav-pills">
                           <li class="active"><a  href="#toldo-brazo-invisible" data-toggle="tab">Toldos Brazos Invisibles o Extensibles</a>
                           </li>
                           <li><a href="#toldo-brazo-punto-fijo" data-toggle="tab">Toldos Brazos Punto Fijo</a>
                           </li>
                           <li><a href="#toldo-vertical" data-toggle="tab">Toldos Verticales</a>
                           </li>
                        </ul>
                        <div class="tab-content clearfix">
                           <div class="tab-pane active" id="toldo-brazo-invisible">
                              <div class="row noMargin pad25">
                                 <div class="col-sm-12 noPadding">
                                    <h1 class="nombre-producto">Toldos Brazos Invisibles o Extensibles</h1>
                                    <p class="overlay-desc">El toldo de brazos invisibles, es sumamente versátil, ajustándose absolutamente a todas las necesidades y lugares de instalación, su uso es muy variado, y si bien, es el toldo ideal para generar espacios habitables de sombra al aire libre, también se lo puede utilizar para controlar el impacto del sol sobre ventanas.
                                       Con brazos de poco desarrollo, 1.60mts o 2.10mts, se puede utilizar para evitar el impacto del el sol sobre ventanas o ventanales, controlando la temperatura del ambiente, evitando el calor excesivo sobre la abertura, e impidiendo que el sol ingrese al interior de la casa.
                                       Con brazos de gran desarrollo, como los de 2.60mts / 3.10mts / 3.60mts / 4.10mts, se pueden lograr perfectos espacios de sombra en el exteriores, creando un agradable ambiente de sombra al aire libre.
                                    </p>
                                    <div class="carousel slide article-slide carousel-fade" id="toldo-brazo-invisible-carousel" data-ride="carousel">
                                       <!-- Wrapper for slides -->
                                       <div class="carousel-inner cont-slider">
                                          <div class="item active">
                                             <img alt="" title="" src="./img/productos/toldo-brazo-invisible.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/lonas1.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/lonas2.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/lonas3.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldos/.jpg">
                                          </div>
                                       </div>
                                       <!-- Indicators -->
                                       <ol class="carousel-indicators col-3">
                                          <li class="active" data-slide-to="0" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="1" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/lonas1-color.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="2" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="1" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="2" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="1" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="2" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="1" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="2" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="1" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="2" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="1" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="2" data-target="#toldo-brazo-invisible-carousel">
                                             <div class="color" style="background-image: url('./img/productos/toldos/.jpg');"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                       </ol>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->
                           </div>
                           <div class="tab-pane" id="toldo-brazo-punto-fijo">
                              <div class="row noMargin pad25">
                                 <div class="col-sm-12 noPadding">
                                    <h1 class="nombre-producto">Toldos Brazos Punto Fijo</h1>
                                    <p class="overlay-desc">La función principal de este tipo de toldos, es controlar las altas temperaturas sobre la propia abertura, impidiendo que el sol ingrese al interior del ambiente. Su Inclinación o Caída esta determinada por el movimiento tipo pívot del brazo, permitiendo la posibilidad de variar su inclinación de forma progresiva hasta el punto deseado, quedando en 45 , 90 o 180 grados con el toldo totalmente extendido.</p>
                                    <div class="carousel slide article-slide carousel-fade" id="toldo-brazo-punto-fijo-carousel" data-ride="carousel">
                                       <!-- Wrapper for slides -->
                                       <div class="carousel-inner cont-slider">
                                          <div class="item active">
                                             <img alt="" title="" src="./img/productos/toldo-brazo-punto-fijo.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldo-brazo-punto-fijo.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldo-brazo-punto-fijo.jpg">
                                          </div>
                                       </div>
                                       <!-- Indicators -->
                                       <ol class="carousel-indicators col-1">
                                          <li class="active" data-slide-to="0" data-target="#toldo-brazo-punto-fijo-carousel">
                                             <div class="color" style="background-color: #f0ebd8;"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="1" data-target="#toldo-brazo-punto-fijo-carousel">
                                             <div class="color" style="background-color: #f0ebd8;"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="2" data-target="#toldo-brazo-punto-fijo-carousel">
                                             <div class="color" style="background-color: #f0ebd8;"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                       </ol>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->
                           </div>
                           <div class="tab-pane" id="toldo-vertical">
                              <div class="row noMargin pad25">
                                 <div class="col-sm-12 noPadding">
                                    <h1 class="nombre-producto">Toldos Verticales</h1>
                                    <p class="overlay-desc">Estos Toldos permiten crear ambientes mas frescos debido al filtrado de los rayos UV que se realiza antes que lleguen al interior del ambiente y brindan la posibilidad de cerrar espacios exteriores integrando y generando un nuevo ambiente funcional a la casa. Su sencillo accionamiento en sentido vertical y enrollable permite controlar los rayos solares manteniendo la visibilidad y otorgando agradables condiciones de temperatura.
                                       Este tipo de Toldos es ideal para cerrar una galería o quincho abierto y protegerse así del frio y viento, creando un nuevo ambiente funcional para su casa.
                                    </p>
                                    <div class="carousel slide article-slide carousel-fade" id="toldo-vertical-carousel" data-ride="carousel">
                                       <!-- Wrapper for slides -->
                                       <div class="carousel-inner cont-slider">
                                          <div class="item active">
                                             <img alt="" title="" src="./img/productos/toldo-vertical.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldo-vertical.jpg">
                                          </div>
                                          <div class="item">
                                             <img alt="" title="" src="./img/productos/toldo-vertical.jpg">
                                          </div>
                                       </div>
                                       <!-- Indicators -->
                                       <ol class="carousel-indicators col-1">
                                          <li class="active" data-slide-to="0" data-target="#toldo-vertical-carousel">
                                             <div class="color" style="background-color: #f0ebd8;"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="1" data-target="#toldo-vertical-carousel">
                                             <div class="color" style="background-color: #f0ebd8;"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                          <li class="" data-slide-to="2" data-target="#toldo-vertical-carousel">
                                             <div class="color" style="background-color: #f0ebd8;"></div>
                                             <p class="codigo-color">Beige #123456</p>
                                          </li>
                                       </ol>
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
         <?php include 'php/footer.php'; ?>
      </div>
      <!-- /#page-content-wrapper --> 
      <?php include 'php/sidebar.php'; ?>
      </div>
      <!-- /#wrapper --> 
      <?php include 'php/scripts-footer.php'; ?>
   </body>
</html>