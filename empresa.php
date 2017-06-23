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

      <!-- Google Map -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7N26a5O4bjW16yv4xW-w7hvWKzERCPME&callback=initMap" async defer></script>


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
               <h1 class="bigTitle">Megaroller</h1>
               <p class="bigSubtitle">Tenemos lo que buscás</p>
               <p class="bigtxt">Somos una Fabrica Cordobesa con 5 años en el mercado local y nacional, dedicada exclusivamente a la Producción Integral de Cortinas Roller a medida con telas Blackout y Sunscreen, contamos con el mejor asesoramiento a domicilio y trabajamos con materiales importados.</p>
            </div>
            <div class="col-lg-5">  
               <img class="img-center" src="./img/empresa/empresa-1.jpg" alt="">
            </div>
            <div class="col-lg-1"></div>
         </div>
         <div class="row noMargin  top40 bottom40">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">  
               <img class="img-center" src="./img/empresa/100.jpg" alt="">
            </div>
            <div class="col-lg-5">
               <p class="bigtxt">Nuestros productos son indicados para casas, departamentos, locales comerciales, oficinas y todo ambiente que requiera moderar o anular el ingreso de luminosidad al ambiente, favoreciendo a una mejor estética y decoración.</p>
            </div>
            <div class="col-lg-1"></div>
         </div>
         <div class="row noMargin">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <div class="row noMargin top40 bottom40">
                  <div class="col-lg-4 noPadding"">  
                     <img class="img-center" width="100%" height="auto" src="./img/empresa/empresa-2.jpg" alt="">
                  </div>
                  <div class="col-lg-4 noPadding"">  
                     <img class="img-center" width="100%" height="auto"  src="./img/empresa/empresa-3.jpg" alt="">
                  </div>
                  <div class="col-lg-4 noPadding"">  
                     <img class="img-center" width="100%" height="auto"  src="./img/empresa/empresa-4.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-1"></div>
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
                        <div class="seguinos">
                           <p><span style="font-size: 13px;">Seguinos</span></p>
                           <div class="redes-sociales">
                              <a href=""><img class="img-center" src="./img/contacto/social_fb.png" alt=""></a>
                              <a href=""><img class="img-center" src="./img/contacto/social_tw.png" alt=""></a>
                              <a href=""><img class="img-center" src="./img/contacto/social_inst.png" alt=""></a>
                              <a href=""><img class="img-center" src="./img/contacto/social_g+.png" alt=""></a>
                           </div>
                        </div>
                     </div>
                     <!-- Formulario de Contacto -->
                     <div class="col-lg-6 top40">
                        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                        <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                        <form name="sentMessage" id="contactForm" novalidate>
                           <div class="row control-group">
                              <div class="form-group col-lg-6 floating-label-form-group controls">
                                 <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                                 <p class="help-block text-danger"></p>
                                 <input type="tel" class="form-control" placeholder="Teléfono" id="phone" required data-validation-required-message="Por favor ingresa tu teléfono.">
                                 <p class="help-block text-danger"></p>
                              </div>
                              <div class="form-group col-lg-6 floating-label-form-group controls">
                                 <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Por favor ingresa tu email.">
                                 <p class="help-block text-danger"></p>
                                 <input type="text" class="form-control" placeholder="Localidad" id="localidad" required data-validation-required-message="Por favor ingresa tu localidad.">
                                 <p class="help-block text-danger"></p>
                              </div>
                           </div>
                           <div class="row control-group">
                              <div class="form-group col-lg-12 floating-label-form-group controls">
                                 <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor ingresa tu consulta."></textarea>
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
         <!-- Sidebar -->
         <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
               <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-bottom"></span> </button>
               <h1>Carrito de Compras</h1>
               <article>
                  <div class="row">
                     <p class="titulo">Roller Blackout</p>
                     <div class="col-lg-5">
                        <img class="img-center" alt="" src="./img/item-producto/thumb.jpg">
                     </div>
                     <div class="col-lg-6">
                        <p class="cantidad">Cantidad: <span>1</span></p>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <p class="precio">$ <span>1200</span></p>
                           <a href="#" class="quitar">Quitar</a>
                        </div>
                     </div>
                  </div>
               </article>
               <p class="subtotal">Subtotal: $ <span>1200</span></p>
               <p class="bonificacion">Envío: $<span>100</span></p>
               <p class="total">Total: $ <span>1300</span></p>
               <a href="mi-carrito.php" class="btn-carrito-negro">Comprar</a>  
            </ul>
         </nav>
         <!-- /#sidebar-wrapper --> 
      </div>
      <!-- /#wrapper --> 

     <?php include 'php/scripts-footer.php'; ?>
            
	<script type="text/javascript">
 var map;
 function initMap() {

	    var locations = [
	      ['FÁBRICA Y SHOWROOM', -31.451066, -64.179614, 4],
	      ['OFICINA COMERCIAL', -31.400725, -64.189254, 5]
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
   </body>
</html>