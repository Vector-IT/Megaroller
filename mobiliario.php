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
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10">
                     <h1 class="alignCenter">Mobiliario  <img src="./img/iconos_0000_mobiliario.png" style="height: 30px; margin-top: -5px;"></h1>
                     <div class="gal bottom40">
                        <img src="./img/mobiliario/mobiliario-3.jpg">
                        <img src="./img/mobiliario/mobiliario-5.jpg">
                        <img src="./img/mobiliario/mobiliario-15.jpg">
                        <img src="./img/mobiliario/mobiliario-14.jpeg">
                        <img src="./img/mobiliario/mobiliario-7.jpg">
                        <img src="./img/mobiliario/mobiliario-4.jpg">

                        <img src="./img/mobiliario/mobiliario-6.jpg">
                        <img src="./img/mobiliario/mobiliario-9.jpg">     
                        <img src="./img/mobiliario/mobiliario-10.jpg">
                        <img src="./img/mobiliario/mobiliario-1.jpg">
                        
                        <img src="./img/mobiliario/mobiliario-12.jpeg">
                        <img src="./img/mobiliario/mobiliario-11.jpg">
                        <img src="./img/mobiliario/mobiliario-2.jpg">
                        <img src="./img/mobiliario/mobiliario-8.jpg">
                        
                        
                     </div>
                  </div>
               </div>
               <div class="col-sm-1"></div>
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