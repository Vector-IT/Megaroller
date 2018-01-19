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

      <!-- SLIDER EMPRESA -->
      <div class="container-full">
         <div class="row noMargin">
            <div class="col-sm-12 noPadding">
               <div id="empresa" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#empresa" data-slide-to="0" class="active"></li>
                     <li data-target="#empresa" data-slide-to="1"></li>
                     <li data-target="#empresa" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                     <div class="item active">
                        <img src="./img/empresa/portada3.jpg" alt="">
                     </div>
                     <div class="item">
                        <img src="./img/empresa/portada2.jpg" alt="">
                     </div>
                     <div class="item">
                        <img src="./img/empresa/portada.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.SLIDER EMPRESA -->
      <!-- CONTENIDO -->
      <div class="container-full">
         <div class="row noMargin  top40 bottom40">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
               <h1 class="bigTitle">megaroller</h1>
               <p class="bigSubtitle">Tu Próxima Cortina</p>
               <p class="bigtxt top20">Somos una Fabrica Cordobesa con 8 años en el mercado local y nacional, dedicado exclusivamente a la Fabricación Integral de Cortinas Roller a medida.
Con Marca propia, la firma se dedica a comercializar sus productos en todo el país, garantizando como valor agregado, rapidez en la entrega del producto terminado y una excelente calidad con materiales importados, destacándo una excelente relación Precio – calidad.
</p>
<img class="img-center img-responsive" src="./img/empresa/100.jpg" alt="">
            </div>
            <div class="col-lg-5">
            <br/>
               <img class="img-center img-responsive" src="./img/empresa/empresa-1.jpg" alt="">
            </div>
            <div class="col-lg-1"></div>
         </div>
         <div class="row noMargin  top40 bottom40">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 top20">

  <p class="bigtxt top40">Las cortinas con sistema roller se destacan por su mecanismo de ascenso y descenso rotativo. Consisten en un panel de tela con un rodillo giratorio en la parte superior que permite enrollar o desenrollar la cortina manualmente a través de una cadena, o de manera mecanizada con motor eléctrico.
</p>

<p class="bigtxt">Nuestros productos son indicados para casas, departamentos, locales comerciales, oficinas y todo ambiente que requiera moderar o anular el ingreso de luminosidad al ambiente, favoreciendo a una mejor estética y decoración.  Las Cortinas Roller forman parte del estilo moderno en viviendas y oficinas y  son recomendadas para ventanas fijas o corredizas.</p>

               <br/>
            </div>
            <div class="col-lg-5">
                               <p class="bigSubtitle top40">Qué ventajas tienen las Cortinas Roller?</p>
               <p class="bigtxt2">• Contribuyen a evitar la decoloración del mobiliario  <br/>
• Regulan la intensidad de luz deseada  <br/>
• Regulan y filtran la temperatura ambiente  <br/>
• Otorgan mayor privacidad al ambiente  <br/>
• Acompañan la decoración y estética de los ambientes  <br/>
• Larga durabilidad y resistencia
</p>
            </div>
            <div class="col-lg-1"></div>
         </div>
           <div class="row noMargin  top40 bottom40">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">

            </div>
            <div class="col-lg-1"></div>
           </div>

          <div class="row noMargin  top40 bottom40">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">
                                      <div class="col-lg-4"><img class="img-center img-responsive" src="./img/empresa/mermet.jpg" alt=""></div>
                 <div class="col-lg-4"><img class="img-center img-responsive" src="./img/empresa/copaco.jpg" alt=""></div>

                   <div class="col-lg-4"><img class="img-center img-responsive" src="./img/empresa/unitec.jpg" alt=""></div>
                 </div>
                   <div class="col-lg-2"></div>
          </div>
         <div class="row noMargin">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <div class="row noMargin top40 bottom40">
                  <div class="col-lg-4 noPadding"">
                     <img class="img-center" width="100%" height="auto" src="./img/empresa/empresa-2.jpg" alt="">
                  </div>
                  <div class="col-lg-4 noPadding">
                     <img class="img-center" width="100%" height="auto"  src="./img/empresa/empresa-3.jpg" alt="">
                  </div>
                  <div class="col-lg-4 noPadding"">
                     <img class="img-center" width="100%" height="auto"  src="./img/empresa/empresa-4.jpg" alt="">
                  </div>
               </div>

            <div class="col-lg-1"></div>
         </div>
         </div>
      </div>


     <div id="contacto">
         <div class="container-full">
           <h1 class="titulo-contacto">Contacto</h1>
            <div class="row noMargin">
               <div class="col-lg-12 noPadding top40">
               <div id="map" style="height: 380px; width: 100%;">
               </div>
            </div>
         </div>
         <div class="container-full formulario top40">
            <div class="row noMargin">
               <div class="col-lg-2">
               </div>
               <div class="col-lg-8  bottom40">
                  <div class="row">
                     <div class="col-lg-6 bottom40">
					 	<p class="vContacto"><span>FÁBRICA Y SHOWROOM</span><br/>
							Bedoya 178, Barrio Cofico, Córdoba<br/>
							0351 471 51 55 / 0351 157 315 091<br/>
							<a href="mailto:fabrica@megarollercortinas.com" target="_top">Email: fabrica@megarollercortinas.com</a><br/>
							Lunes a viernes de 9hs a 18 hs, sábados de 9hs a 13 hs<br/>
						</p>
						<p class="vContacto"><span>LOCAL COMERCIAL</span><br/>
            Paseo Acaece, Valle Escondido Local 11<br/>
							0351 156 135 314<br/>
							<a href="mailto:info@megarollercortinas.com" target="_top">Email: info@megarollercortinas.com</a><br/>
							Lunes a sábados de 9 a 14hs y 17 a 22hs<br/>
						</p>
                        <div class="seguinos">
                           <p><span style="font-size: 13px;">Seguinos</span></p>
                           <div class="redes-sociales">
                           <?php
                           if ($face != '') echo $crlf.'<a href="'. $face .'" target="_blank"><img class="img-center" src="./img/social_fb.png" alt=""></a>';
                           if ($twit != '') echo $crlf.'<a href="'. $twit .'" target="_blank"><img class="img-center" src="./img/social_tw.png" alt=""></a>';
                           if ($inst != '') echo $crlf.'<a href="'. $inst .'" target="_blank"><img class="img-center" src="./img/social_inst.png" alt=""></a>';
                           if ($goog != '') echo $crlf.'<a href="'. $goog .'" target="_blank"><img class="img-center" src="./img/social_g+.png" alt=""></a>';
                          ?>
                           </div>
                        </div>
                     </div>
                     <!-- Formulario de Contacto -->
                     <div class="col-lg-6 top40">
                        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                        <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
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
                  </div>
               </div>
               <div class="col-lg-2">
               </div>
            </div>
         </div>
      </div>
</div>
      <!-- /.CONTENIDO -->

           <?php include 'php/footer.php'; ?>

                    </div>
         <!-- /#page-content-wrapper -->
         <?php include 'php/sidebar.php'; ?>
      </div>
      <!-- /#wrapper -->

     <?php include 'php/scripts-footer.php'; ?>

  <!-- Contact Form JavaScript -->
  <!-- <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>    -->

  <script>
  $(function () { $("input,textarea").not("[type=submit]").jqBootstrapValidation(); } );
  </script>

	<script type="text/javascript">
 var map;
 function initMap() {

	    var locations = [
	      ['FÁBRICA Y SHOWROOM', -31.4003831, -64.1793193, 4]
	      ,['LOCAL COMERCIAL', -31.372780, -64.276840, 5]
	    ];

	    map = new google.maps.Map(document.getElementById('map'), {
	      zoom: 12,
	      center: new google.maps.LatLng(-31.40, -64.17),
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    });

	    var infowindow = new google.maps.InfoWindow();

	    var marker, i;

	    for (i = 0; i < locations.length; i++) {
	      marker = new google.maps.Marker({
	        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	        map: map
	      });

	      google.maps.event.addListener(marker, 'click', (function(marker, i) {
	        return function() {
	          infowindow.setContent(locations[i][0]);
	          infowindow.open(map, marker);
	        }
	      })(marker, i));
	    }
 }

	</script>
        <!-- Google Map -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7N26a5O4bjW16yv4xW-w7hvWKzERCPME&callback=initMap" async defer></script>
   </body>
</html>