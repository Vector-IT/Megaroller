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
            <div id="materiales-toldos" class="container-full">
               <div class="row noMargin">
                  <div class="col-md-1"></div>
                  <div class="col-md-10 top40">
                     <h1 class="alignCenter bottom40">Franquicias</h1>
                     <div class="row noMargin">
                        <div class="col-lg-8">
                           <h2 class="txt-naranja">¿PORQUÉ ADQUIRIR UNA FRANQUICIA MEGAROLLER?</h2>

                           <h3>PRODUCTOS DIRECTO DE FÁBRICA</h3> 
                           <ul class="bottom40">
                           <li class="bigtxt">Porque somos fabricantes de un producto de excelente calidad y reputación en el mercado.</li>
                           <li class="bigtxt">En el proceso de provisión el franquiciado no tiene intermediarios, lo que nos permite ase- gurarle mayor rentabilidad 
                           <li class="bigtxt">Ofrecemos productos de la mas alta calidad al mejor precio.</li> 
                           <li class="bigtxt">Contamos con diversas opciones para personalizar los productos de acuerdo a los reque- rimientos especiales de cada cliente.</li> 
                           </ul>
                           <h3>TIEMPOS COMPETITIVOS</h3>
                           <ul class="bottom40"> 
                           <li class="bigtxt">Nuestros procedimientos reflejan eficiencia en la cotización enviada al cliente (enviamos presupuestos en no mas de 24 hs)</li> 
                           <li class="bigtxt">Además contamos con los tiempos de entrega más ágiles del mercado (MÁXIMO 10 DÍAS HÁBILES), lo que genera una ventaja competitiva respecto a nuestros competidores.</li> 
                           </ul>
                           <h3>MARCA REFERENTE EN EL MERCADO</h3> 
                           <ul class="bottom40">
                           <li class="bigtxt">Somos una empresa joven que hemos logrado posicionar nuestra marca por el excelente producto y servicio que brindamos.</li> 
                           <li class="bigtxt">Tenemos excelente reputación en el mercado local y trabajamos mucho con referidos de clientes, lo que demuestra que han quedado satisfechos con el producto y el asesoramiento obtenido por la empresa.</li> 
                           </ul>
                           <h3>OPERATIVIDAD SENCILLA</h3> 
                           <ul class="bottom40">
                           <li class="bigtxt">Porque la operatividad del negocio es simple, al contar con un único proveedor.</li> 
                           <li class="bigtxt">La gestión administrativa del negocio no requiere mayor complejidad.</li> 
                           <li class="bigtxt">Brindamos asistencia inicial tanto en la capacitación interna de productos como en el pro- ceso de instalación, acompañando desde la marca poniendo a disposición a nuestros insta- ladores en franquicias de la Ciudad de Córdoba y alrededores.</li> 
                           </ul>
                           <h3>CAPACITACIÓN Y APOYO AL FRANQUICIADO</h3> 
                           <ul class="bottom40">
                           <li class="bigtxt">Porque brindamos capacitación inicial a todo el personal de las nuevas franquicias previo a la apertura.</li> 
                           <li class="bigtxt">Porque te brindamos todo nuestro KNOW HOW (Saber hacer), a través de nuestros manuales de franquicia.</li> 
                           <li class="bigtxt">Ponemos a tu disposición un equipo de profesionales que estarán acompañándote en tu actividad y resolviendo tus dudas y consultas.</li> 
                           </ul>
                           <h3>INVERSIÓN INICIAL ACCESIBLE</h3>
                           <ul class="bottom40">
                           <li class="bigtxt">Porque el monto de la inversión inicial es accesible comparada con otras alternativas de inversión.</li> 
                           <li class="bigtxt">Los requerimientos para el armado de local son sencillos.</li> 
                           <li class="bigtxt">No requiere stock de productos en local (solo para exhibición)</li>
                           </ul>
                        </div>
                        <div class="col-lg-4">
                           <h3 class="text-center top40">¿Estas interesado?</h3>
                           <h3 class="text-center">¡SOLICITÁ MÁS INFORMACIÓN!</h3>
                           <form id="contactForm bottom40">
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
                           <img class="img-center" src="./img/franquicias.jpg" width="100%" height="auto">
                        </div>
                     </div>
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