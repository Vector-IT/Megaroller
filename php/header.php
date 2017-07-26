      <!-- HEADER -->
      <!-- Links Header -->
      <div class="links-header">
         <div class="row noMargin">
            <div class="col-lg-6">
               <div class="redes-sociales">
                  <a href=""><img class="img-center" src="./img/social_fb.png" alt=""></a>
                  <a href=""><img class="img-center" src="./img/social_inst.png" alt=""></a>
               </div>
            </div>
            <div class="col-lg-6">
                           <a href="#" type="button" class="hamburger animated fadeInLeft pull-right" data-toggle="offcanvas" style="margin-right: 20px;"><img class="img-center" src="./img/item-producto/mi-carrito.png" alt="" style="width: 25px;margin-top: 5px;"><span class="cantidad-productos">1</span></a> 
                           <a class="pull-right" href="#" > <img class="img-center" src="./img/user.png" alt="" style="width: 20px;margin-top: 8px;margin-right: 10px;"></a>
                           <p class="telefonos pull-right">0351 464 66 60 | 0351 155 228 460</p>
               <a class="mail pull-right" href="mailto:ventas@megarollercortinas.com" target="_top">ventas@megarollercortinas.com</a>


            </div>
         </div>
      </div>
      <div class="navbar navbar-default yamm">
         <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php"><img class="img-responsive img-center" src="./img/logo.jpg" alt=""></a>
         </div>
         <div id="navbar-collapse-grid" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">


                             <li>
                  <a class="presupuesto" type="button" href="#presupuestar" data-toggle="modal" data-target="#presupuestar"><span style="">Presupuestar 
                  <br/>cortinas a medida</span> </a>
               </li>
               <li>
                   <div class="btn-group">
		      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
		       Tienda Online <br/>
                  Medidas Estandar 
		        <span class="caret"></span>
		      </a>
		      <ul class="dropdown-menu">
                                 <li><a href="blackout.php">Blackout</a></li>
                                 <li><a href="sunscreen.php">Sunscreen</a></li>
		      </ul>
		   </div>
               </li>
               <li class="btn-round sola-linea">
                  <a href="productos.php">Productos</a>
               </li>
               <li  class="btn-round sola-linea">
                  <a href="empresa.php">Empresa</a>
               </li>
               <li  class="btn-round sola-linea">
                  <a href="index.php">Home</a>
               </li>
            </ul>
         </div>
        </div>
      <!-- /.HEADER -->
      
                            <!-- Modal Presupuestar -->
                        <div class="modal fade" id="presupuestar" tabindex="-1" role="dialog" aria-labelledby="presupuestarModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="presupuestarModalLabel">Presupuestar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
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
                        				<label class="top20">Tipo de Cortina</label>
							 <select class="form-control" id="sel1">
							    <option>Blackout</option>
							    <option>Sunscreen</option>
							    <option>Roller Dual</option>
							  </select>
                                                        <label class="top20">Ancho</label>
				                        <input type="number" required name="ancho" min="0" placeholder="Mts." step=".01" style="display: block;" > 
				                        <label class="top20">Alto</label>
				                        <input type="number" required name="alto" min="0" placeholder="Mts." step=".01" style="display: block;" >

                                                   </div>
                                                   <div class="form-group col-lg-6 floating-label-form-group controls">
                                                      <label>Email</label>
                                                      <input type="email" class="form-control" placeholder="" id="email" required data-validation-required-message="Por favor ingresa tu email.">
                                                      <p class="help-block text-danger"></p>
                                                      <label>Teléfono</label>
                                                      <input type="tel" class="form-control" placeholder="" id="phone" required data-validation-required-message="Por favor ingresa tu tel�fono.">
                                                      <p class="help-block text-danger"></p>
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
                                 <div class="col-lg-12">     
                                <img class="img-responsive img-center" alt="" src="./img/item-producto/medidas-1.jpg">
			        <img class="img-responsive img-center"  alt="" src="./img/item-producto/medidas-2.jpg">
			        <img class="img-responsive img-center"  alt="" src="./img/item-producto/medidas-3.jpg">
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