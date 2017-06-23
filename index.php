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
               
      <!-- Fotorama -->
      <link href="fotorama.css" rel="stylesheet">
      <script src="fotorama.js"></script>

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
                  <div class="fotorama" data-fit="cover" data-width="100%"  data-height="450" data-nav="false" data-arrow="always" data-transition="crossfade">
                     <div data-img="./img/home/portada.jpg">
                        <p class="tituloSlider">Cortina Sunscreen</p>
                        <p class="subtituloSlider">Filtra el ingreso de luz</p>
                     </div>
                     <div data-img="./img/home/portada2.jpg">
                        <p class="tituloSlider">Roller Dual</p>
                        <p class="subtituloSlider">Filtra el ingreso de luz</p>
                     </div>
                     <div data-img="./img/home/portada3.jpg">
                        <p class="tituloSlider">Toldo Vertical</p>
                        <p class="subtituloSlider">Filtra el ingreso de luz</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- /.SLIDER -->

      <!-- CONTENIDO -->
 	      <div class="container-full top40">
			<h1>COMPRA TU CORTINA ONLINE</h1>  
	         <div class="row noMargin">
	            <div class="col-md-1"></div>
	            <div id="grid-productos" class="col-lg-10">    
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
                        <a href="item-productos.php" class="btn btn-primary">Comprar</a>
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
                        <a href="item-productos.php" class="btn btn-primary">Comprar</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
	           </div>
	       <div class="col-md-1"></div>
	        </div>
	     </div>

 	      <div class="container-full top40">
			<h1>OTROS PRODUCTOS</h1>  
	         <div class="row noMargin">
	            <div class="col-md-1"></div>
	            <div id="grid-productos" class="col-lg-10"> 
	                               <div class="row">
                    <div class="col-sm-3">
                      <div class="producto">
                        <a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/roller-dual.jpg);"></a>
                        <a href="otros-productos.php" class="titulo-producto">Cortina Roller Dual</a>
                        <p class="descripcion-producto">1.4 mts x 1.5 mts</p>
                        <p class="precio-producto">$1140</p>
                        <a href="otros-productos.php#roller-dual" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="producto">
                        <a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/doble-sistema.jpg);"></a>
                        <a href="otros-productos.php" class="titulo-producto">Cortina Doble Sistema</a>
                        <p class="descripcion-producto">1.4 mts x 1.5 mts</p>
                        <p class="precio-producto">$1140</p>
                        <a href="otros-productos.php#roller-sistema-doble" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="producto">
                        <a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/toldo-brazo-invisible.jpg);"></a>
                        <a href="otros-productos.php" class="titulo-producto">Toldo Brazo Invisible</a>
                        <p class="descripcion-producto">1.4 mts x 1.5 mts</p>
                        <p class="precio-producto">$1140</p>
                        <a href="otros-productos.php#toldo-brazo-invisible" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="producto">
                        <a href="otros-productos.php" class="imagen-producto" style="background-image:url(./img/productos/toldo-vertical.jpg);"></a>
                        <a href="otros-productos.php" class="titulo-producto">Toldo Vertical</a>
                        <p class="descripcion-producto">1.4 mts x 1.5 mts</p>
                        <p class="precio-producto">$1140</p>
                         <a href="otros-productos.php#toldo-vertical" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
	           </div>
	       <div class="col-md-1"></div>
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
            
   </body>
</html>