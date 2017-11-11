<?php
	$face = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'FACEBOOK'");
	$twit = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'TWITTER'");
	$inst = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'INSTAGRAM'");
	$goog = buscarDato("SELECT ValoConf FROM configuraciones WHERE NombConf = 'GOOGLE+'");

	$numeUser = isset($_COOKIE["v-commerce_numeUser"])? $_COOKIE["v-commerce_numeUser"]: '';
	if ($numeUser != '') {
		cargarUsuario($numeUser);
	} else {
		if(isset($_COOKIE["v-commerce_numeInvi"])) {
			$_SESSION["NumeInvi"] = $_COOKIE["v-commerce_numeInvi"];
			$_SESSION["NumeCarr"] = buscarDato("SELECT NumeCarr FROM carritos WHERE NumeEstaCarr = 1 AND NumeInvi = ". $_SESSION["NumeInvi"]);
		}
	}

	if (isset($_SESSION["NumeCarr"])) {
		$cantCarrito = buscarDato("SELECT COUNT(*) FROM carritosdetalles WHERE NumeCarr = ". $_SESSION["NumeCarr"]);
	}
	else {
		$cantCarrito = 0;
	}
?>

<!-- HEADER -->
<nav>
<!-- Links Header -->
<div class="links-header">
<div class="row noMargin">
  <div class="col-lg-4">
    <div class="redes-sociales">
    <?php
      if ($face != '') echo $crlf.'<a href="'. $face .'" target="_blank"><img class="img-center" src="./img/social_fb.png" alt=""></a>';
      if ($twit != '') echo $crlf.'<a href="'. $twit .'" target="_blank"><img class="img-center" src="./img/social_tw.png" alt=""></a>';
      if ($inst != '') echo $crlf.'<a href="'. $inst .'" target="_blank"><img class="img-center" src="./img/social_inst.png" alt=""></a>';
      if ($goog != '') echo $crlf.'<a href="'. $goog .'" target="_blank"><img class="img-center" src="./img/social_g+.png" alt=""></a>';
		?>
    </div>
  </div>
  <div class="col-lg-8">
        <a href="javascript:void(0);" onclick="abrirCarrito();" class="mis-compras pull-right" style="margin-right: 20px;"><img class="img-center" src="./img/item-producto/mi-carrito.png"  alt="Mi Carrito" title="Mi Carrito" style="width: 25px;margin-top: 5px;"><span class="cantidad-productos cantProds"><?php echo $cantCarrito?></span></a>
		<div id="divLogin" class="logueo pull-right" <?php echo (isset($_SESSION['NumeUser'])? 'style="display: none;"': '')?>><a href="#login-modal" data-toggle="modal" class="navbar-link" role="button"><img class="" src="./img/user.png" alt="" style="width: 20px;margin-top: 8px;margin-right: 5px;" alt="Ingresar" title="Ingresar"> <div class="pull-right" style="margin: 8px 15px 0 0;">Ingresar</div></a></div>
		<div id="divLogout" class="logueo pull-right" <?php echo (!isset($_SESSION['NumeUser'])? 'style="display: none;"': '')?>><a href="php/logout.php" class="navbar-link clickable" title="Cerrar sesión"><img class="" src="./img/user.png" alt="" style="width: 20px;margin-top: 8px;margin-right: 5px;"> <div class="pull-right" style="margin: 8px 15px 0 0;"><?php echo (isset($_SESSION['NumeUser'])? $_SESSION["NombPers"]: '')?></div></a></div>
		<p class="telefonos pull-right">0351 464 66 60 | 0351 155 228 460</p>
    <a class="mail pull-right" href="mailto:ventas@megarollercortinas.com" target="_top">ventas@megarollercortinas.com</a>
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
    <li  class="btn-round sola-linea">
      <a href="empresa.php#contacto">Contacto</a>
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
</nav>

<!-- MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" align="center">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			</button>
		</div>
		<!-- Begin # DIV Form -->
		<div id="div-forms">
			<!-- Begin # Login Form -->
			<form id="login-form" method="post">
				<h4 class="modal-title">Iniciar Sesión</h4>
				<div class="modal-body">
					<input class="form-control" id="nombUser" type="text" placeholder="Usuario" required style="text-transform: none !important;">
					<input class="form-control" id="nombPass" type="password" placeholder="Contraseña" required style="text-transform: none !important;">
					<div class="checkbox">
						<label>
						<input type="checkbox" id="chkRemember"> Recordarme
						</label>
					</div>
					<div id="divLoginMsg" class="alert noMargin" role="alert">
						<span id="iconLogin" class="" aria-hidden="true"></span>&nbsp;<span id="txtLoginMsg"></span>
					</div>
				</div>
				<div class="modal-footer" style="border-top: none !important;">
					<div>
						<button type="submit" class="btn btn-small pull-left">Iniciar Sesión</button>
					</div>
					<div>
						<button id="login_lost_btn" type="button" class="btn btn-link">Recuperar contraseña</button>
						<button id="login_register_btn" type="button" class="btn btn-link" style="color: #BCAA66 !important;">Registrarse</button>
					</div>
				</div>
			</form>
			<!-- End # Login Form -->
			<!-- Begin | Lost Password Form -->
			<form id="lost-form" method="post" style="display:none;">
				<h4 class="modal-title">Recuperar Contraseña</h4>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div id="div-lost-msg">
								<span id="text-lost-msg">Ingrese su e-mail</span>
							</div>
							<input id="lost_email" class="form-control" type="text" placeholder="E-Mail" style="text-transform: none !important;" required>
							<div id="recaptcha1"></div>
						</div>
					</div>
					<div id="divLostMsg" class="alert noMargin" role="alert">
						<span id="iconLost" class="" aria-hidden="true"></span>&nbsp;<span id="txtLostMsg"></span>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-md-4">
							<button type="submit" id="btnRecuperar" class="btn btn-small pull-left">Enviar</button>
						</div>
						<div class="col-md-8 text-right">
							<button id="lost_login_btn" type="button" class="btn btn-link">Iniciar Sesión</button>
							<button id="lost_register_btn" type="button" class="btn btn-link">Registrarse</button>
						</div>
					</div>
				</div>
			</form>
			<!-- End | Lost Password Form -->
			<!-- Begin | Register Form -->
			<form id="register-form" style="display:none;">
				<h4 class="modal-title" style="">Registrarse</h4>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<label for="NombPers">Nombre completo *</label>
							<input type="text" class="form-control form-custom" id="NombPers" placeholder="Nombre Completo *" required>
							<label for="TeleUser">Teléfono *</label>
							<input type="text" class="form-control form-custom" id="TeleUser" placeholder="Teléfono *" required>
							<label for="MailUser">Mail *</label>
							<input type="email" class="form-control form-custom" id="MailUser" placeholder="Correo Electrónico *" required>
							<div class="row">
								<div class="col-md-8">
									<label for="DireUser">Dirección *</label>
									<input type="text" class="form-control form-custom" id="DireUser" placeholder="Dirección *" required>
								</div>
								<div class="col-md-4">
									<label for="CodiPost">Código Postal *</label>
									<input type="text" class="form-control form-custom" id="CodiPost" placeholder="Código Postal" required>
								</div>
							</div>
							<label from="NombLoca">Localidad *</label>
							<input type="text" class="form-control form-custom" id="NombLoca" placeholder="Localidad *" required>
							<label for="NumeProv">Provincia *</label>
							<select class="form-control form-custom" id="NumeProv" required>
							<?php echo cargarCombo("SELECT NumeProv, NombProv FROM provincias ORDER BY NombProv", "NumeProv", "NombProv");?>
							</select>
							<label for="NombUser">Usuario *</label>
							<input type="text" class="form-control form-custom" id="NombUser" placeholder="Usuario *" required>
							<label for="NombPass">Contraseña *</label>
							<input type="password" class="form-control form-custom" id="NombPass" placeholder="Contraseña *" required>
							<input type="password" class="form-control form-custom" id="NombPass2" placeholder="Repetir Contraseña *" required>
							<div id="recaptcha2"></div>
						</div>
					</div>
					<div id="divRegisterMsg" class="alert noMargin" role="alert">
						<span id="iconRegister" class="" aria-hidden="true"></span>&nbsp;<span id="txtRegisterMsg"></span>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-md-4">
							<button type="submit" class="btn btn-small pull-left">Registrarse</button>
						</div>
						<div class="col-md-8 text-right">
							<p>Ya eres un usuario registrado? <button id="register_login_btn" type="button" class="btn btn-link">Iniciar sesión</button>    </p>
						</div>
					</div>
				</div>
			</form>
			<!-- End | Register Form -->
		</div>
		<!-- End # DIV Form -->
	</div>
</div>
</div>
<!-- /.MODAL LOGIN -->

<!-- Modal Presupuestar -->
<div class="modal fade" id="presupuestar" tabindex="-1" role="dialog" aria-labelledby="presupuestarModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
    </div>
    <h4 class="modal-title" id="presupuestarModalLabel">Presupuestar</h4>
    <div class="modal-body">
      <div class="container-fluid formulario">
        <!-- Formulario de Contacto -->
        <div class="row">
          <div class="col-lg-12">
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form id="presupuesto">
              <div class="row control-group">
                <div class="form-group col-lg-6 floating-label-form-group controls">
                  <label>Nombre</label>
                  <input type="text" class="form-control" placeholder="" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                  <p class="help-block text-danger"></p>
                  <label class="top20">Tipo de Cortina</label>
                  <select class="form-control" id="TipoCortina">
                    <option>Blackout</option>
                    <option>Sunscreen</option>
                    <option>Roller Dual</option>
                  </select>
                  <label class="top20">Ancho</label>
                  <input type="number" required id="ancho" min="0" placeholder="Mts." step=".01" style="display: block;" >
                  <label class="top20">Alto</label>
                  <input type="number" required id="alto" min="0" placeholder="Mts." step=".01" style="display: block;" >
                </div>
                <div class="form-group col-lg-6 floating-label-form-group controls">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="" id="email" required data-validation-required-message="Por favor ingresa tu email.">
                  <p class="help-block text-danger"></p>
                  <label>Teléfono</label>
                  <input type="tel" class="form-control" placeholder="" id="phone" required data-validation-required-message="Por favor ingresa tu teléfono.">
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
                          Bedoya 178, Barrio Cofico, Córdoba<br/>
                           0351 4 713048 / 0351 155 228 460<br/>
                           <a href="mailto:ventas@megarollercortinas.com" target="_top">Email: ventas@megarollercortinas.com</a><br/>
                           Lunes a viernes de 9hs a 18 hs,  sábados de 9hs a 13 hs<br/>
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
