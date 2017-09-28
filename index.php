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
   <body id="home">
      <div id="wrapper">
         <div class="overlay"></div>
         <!-- Page Content -->
         <div id="page-content-wrapper">
     <?php include 'php/header.php'; ?>

      <!-- SLIDER -->
      <header class="home">
         <div class="container-full">
            <div class="row noMargin">
               <div class="col-lg-12 noPadding">
                  <div class="fotorama" data-fit="cover" data-width="100%"  data-height="450" data-nav="false" data-arrows="always" data-transition="crossfade" data-autoplay="true" data-loop="true">
                     <div data-img="./img/home/portada3.jpg">
                        <p class="tituloSlider">Para cada espacio, una solución</p>
                        <p class="subtituloSlider">Blackout · Sunscreen · Toldos · Medidas Especiales</p>
                     </div>
                     <div data-img="./img/home/portada.jpg">
                        <p class="tituloSlider">Cortina Sunscreen</p>
                        <p class="subtituloSlider">Filtra el ingreso de luz</p>
                     </div>
                     <div data-img="./img/home/portada2.jpg">
                        <p class="tituloSlider">Roller Dual</p>
                        <p class="subtituloSlider">Filtra el ingreso de luz</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- /.SLIDER -->

      <!-- CONTENIDO -->
 	      <div class="container-full top40 fondoTextura">
			<h1 style="background: #fff;padding-bottom: 50px;line-height: 50px;">Comprá tu  Cortina Roller <br><span style="color: #ff7a00;">Blackout o Sunscreen</span> <strong>Online</strong></h1>  
	         <div class="row noMargin">
	            <div class="col-md-1"></div>
	            <div id="grid-productos" class="col-lg-10 fondoBlanco bottom40">    
                   <div class="row">
                    <div class="col-sm-6">
                          <!-- SLIDER BLACKOUT -->
			      <div class="container-full">
			         <div class="row noMargin">
			            <div class="col-sm-12 noPadding top40">
			               <div id="blackout" class="carousel slide bottom0" data-ride="carousel">
			                  <!-- Indicators -->
			                  <ol class="carousel-indicators">
			                     <li data-target="#blackout" data-slide-to="0" class="active"></li>
			                     <li data-target="#blackout" data-slide-to="1"></li>
			                     <li data-target="#blackout" data-slide-to="2"></li>
			                  </ol>
			                  <!-- Wrapper for slides -->
			                  <div class="carousel-inner">
			                     <div class="item active">
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
			            </div>
			         </div>
			      </div>
			      <!-- /.SLIDER BLACKOUT -->
                      <div class="producto">
                        <a href="item-productos.php" class="titulo-producto-grande">Blackout</a>
                        <p class="descripcion-producto">ELEGI TU MEDIDA MAS CONVENIENTE </p>
                        <p class="precio-producto">Desde $1200</p>
                        <a href="blackout.php" class="btn btn-primary">Comprar</a>
                      </div>
                    </div>
                    <div class="col-sm-6">
                           <!-- SLIDER SUNSCREEN -->
			      <div class="container-full">
			         <div class="row noMargin">
			            <div class="col-sm-12 noPadding top40">
			               <div id="sunscreen" class="carousel slide bottom0" data-ride="carousel">
			                  <!-- Indicators -->
			                  <ol class="carousel-indicators">
			                     <li data-target="#sunscreen" data-slide-to="0" class="active"></li>
			                     <li data-target="#sunscreen" data-slide-to="1"></li>
			                     <li data-target="#sunscreen" data-slide-to="2"></li>
			                  </ol>
			                  <!-- Wrapper for slides -->
			                  <div class="carousel-inner">
			                     <div class="item active">
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
			            </div>
			         </div>
			      </div>
			   <!-- /.SLIDER SUNSCREEN -->
                      <div class="producto">
                        <a href="item-productos.php" class="titulo-producto-grande">Sunscreen</a>
                        <p class="descripcion-producto">ELEGI TU MEDIDA MAS CONVENIENTE </p>
                        <p class="precio-producto">Desde $1200</p>
                        <a href="sunscreen.php" class="btn btn-primary">Comprar</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
	           </div>
	       <div class="col-md-1"></div>
	        </div>
	     </div>

 	      <div class="container-full top40">
			<h1 style="border-bottom: 1px solid #ccc;max-width: 80%;margin: 20px auto;padding-bottom: 20px;"><span style="color: #ff7a00;">OTROS</span> <strong> PRODUCTOS</strong></h1> 
	         <div class="row noMargin">
	            <div id="grid-productos" class="col-lg-12"> 
	                               <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                      <div class="producto">
                        <div class="imgBox"><a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/roller-dual.jpg);"></a></div>
                        <a href="otros-productos.php" class="titulo-producto">Cortina Roller Dual</a>
                        <a href="otros-productos.php#roller-dual" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="producto">
                        <div class="imgBox"><a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/doble-sistema.jpg);"></a></div>
                        <a href="otros-productos.php" class="titulo-producto">Cortina Doble Sistema</a>
                        <a href="otros-productos.php#roller-sistema-doble" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="producto">
                        <div class="imgBox"><a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/toldo-brazo-invisible.jpg);"></a></div>
                        <a href="otros-productos.php" class="titulo-producto">Toldo Brazo Invisible</a>
                        <a href="otros-productos.php#toldo-brazo-invisible" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="producto">
                        <div class="imgBox"><a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/toldo-vertical.jpg);"></a></div>
                        <a href="otros-productos.php" class="titulo-producto">Toldo Vertical</a>
                         <a href="otros-productos.php#toldo-vertical" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="producto">
                        <div class="imgBox"><a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/toldo-brazo-punto-fijo.jpg);"></a></div>
                        <a href="otros-productos.php" class="titulo-producto">Toldo Brazo Punto Fijo</a>
                         <a href="otros-productos.php#toldo-vertical" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                    <div class="col-lg-1"></div>
                  </div>
                  <!-- /.row -->
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
            
   </body>
</html>