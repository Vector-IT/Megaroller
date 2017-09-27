     <!-- FOOTER -->
      <div class="container-full">
         <a href="#0" class="cd-top"><img style="img-center" src="./img/go-to-top.png" alt=""></a>
         <footer>
            <div class="row noMargin">
               <div class="col-sm-1">
               </div>
               <div class="col-sm-10">
                  <div class="row">
                     <div class="col-sm-3">
                        <div class="titulo-footer">megaroller</div>
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><a href="empresa.php">Empresa</a></li>
                           <li><a href="productos.php">Productos</a></li>
                           <li><a href="#">Tienda Online Medidas Estandar</a>
                           <li><a type="button" href="#presupuestar" data-toggle="modal" data-target="#presupuestar">Presupuestar cortinas a medida</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <div class="titulo-footer">Contacto</div>
                        <div class="row">
                         <div class="col-sm-6 top20">
                        <p><span>FÁBRICA Y SHOWROOM</span><br/>
                           Urquiza 1204, Barrio Cofico, Córdoba<br/>
                           0351 4 713048 / 0351 155 228 460<br/>
                           <a href="mailto:ventas@megarollercortinas.com" target="_top">Email: ventas@megarollercortinas.com</a><br/>
                           Lunes a viernes de 9hs a 15 hs,  sábados de 9hs a 13 hs<br/>
                           +54 (0351) 446-1931
                        </p>
                         </div>
                         <div class="col-sm-6 top20">
                        <p><span>OFICINA COMERCIAL</span><br/>
                           Paseo del Jockey, Elias Yofre 1050 Barrio Jardín, Córdoba<br/>
                           0351 4 64 66 60 /  0351 157 319 051<br/>
                           <a href="mailto:ventas@megarollercortinas.com" target="_top">Email: ventas@megarollercortinas.com</a><br/>
                           Atención de lunes a domingo de 10hs a 22 hs
                        </p>
                         </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="titulo-footer">Seguinos</div>
                        <div class="redes-sociales">
                        <?php 
                              if ($face != '') echo $crlf.'<a href="'. $face .'" target="_blank"><img class="" src="./img/footer-social_fb.png" alt=""> Facebook</a>';
                              if ($twit != '') echo $crlf.'<a href="'. $twit .'" target="_blank"><img class="" src="./img/footer-social_tw.png" alt=""> Twitter</a>';
                              if ($inst != '') echo $crlf.'<a href="'. $inst .'" target="_blank"><img class="" src="./img/footer-social_inst.png" alt=""> Instagram</a>';
                              if ($goog != '') echo $crlf.'<a href="'. $goog .'" target="_blank"><img class="" src="./img/footer-social_g+.png" alt=""> Google+</a>';
                        ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-1">
               </div>
            </div>
            <!-- /.row -->
         </footer>
      </div>
      <!-- /.FOOTER -->