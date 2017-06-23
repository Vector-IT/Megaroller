<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Mi Carrito - MEGAROLLER | Fábrica de Cortinas Roller</title>
      
      <?php include 'php/links-header.php'; ?>
      
   </head>
   <body>
      <div id="wrapper">
         <div class="overlay"></div>
         
         <!-- Page Content -->
         <div id="page-content-wrapper">
         
              <?php include 'php/header.php'; ?>

      <!-- ORDEN DE COMPRA -->
      <div id="mi-carrito" class="container">
         <div class="row">
            <div class="col-lg-6">
               <h1>Mis Compras</h1>
            </div>
            <div class="col-lg-6"><a href="#" class="btn-carrito-negro pushRight">Realizar compra</a></div>
         </div>
         <div class="row">
            <div class="col-lg-2 noPadding">
               <h2>Producto</h2>
               <article>
                  <img class="img-producto-carrito" src="./img/item-producto/destacada.jpg" alt="">
               </article>
            </div>
            <div class="col-lg-2 noPadding">
               <h2>Descripción</h2>
               <article id="1">
                  <p class="titulo-producto">Cortina Blackout</p>
               </article>
            </div>
            <div class="col-lg-2 noPadding">
               <h2>Color</h2>
               <article id="1">
                  <div class="color"><img alt="" src="./img/item-producto/colores_r2_c4.jpg"></div>
               </article>
            </div>
            <div class="col-lg-2 noPadding">
               <h2>Cantidad</h2>
               <article id="1">
                  <p class="info-producto">1</p>
               </article>
            </div>
            <div class="col-lg-2 noPadding">
               <h2>Precio</h2>
               <article id="1">
                  <p class="info-producto">$1104</p>
               </article>
            </div>
            <div class="col-lg-2 noPadding">
               <h2>Total</h2>
               <article id="1">
                  <p class="info-producto">$1104</p>
               </article>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 eliminar-item"> <a href="">ELIMINAR ITEM x</a></div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <h4>Agregar código de bonificación</h4>
               <input class="codigo-bonificacion" value="" placeholder="Ingrese su código aquí"> <a href="#" class="btn-carrito-descuento">Aplicar</a>  
               <div class="row">
                  <div class="col-lg-12">
                     <p class="envios">Envíos a todo el país</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="col-xs-6">
                  <h3>SUBTOTAL</h3>
                  <h3>ENVIO</h3>
                  <h3>TOTAL:</h3>
               </div>
               <div class="col-xs-6">
                  <h3 class="alignRight">$1200</h3>
                  <h3 class="alignRight">$100</h3>
                  <h3 class="alignRight">$1300</h3>
               </div>
            </div>
         </div>
         <br/><br/>
         <div class="row">
            <div class="col-lg-6"> </div>
            <div class="col-lg-6"><a href="#" class="btn-carrito-naranja pushRight">Realizar compra</a></div>
         </div>
         <br/><br/>
         <div class="col-lg-11">
            <div class="row">
               <div class="col-lg-12"><img class="img-center" src="./img/mi-carrito/formas-de-pago.png" alt=""></div>
            </div>
         </div>
         <div class="col-lg-1"></div>
      </div>
      <!-- /.ORDEN DE COMPRA -->
      
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