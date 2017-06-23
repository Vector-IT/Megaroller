       <script>
         $(document).ready(function () {
           var trigger = $('.hamburger'),
               overlay = $('.overlay'),
              isClosed = false;
         
             trigger.click(function () {
               hamburger_cross();      
             });
         
             function hamburger_cross() {
         
               if (isClosed == true) {          
                 overlay.hide();
                 trigger.removeClass('is-open');
                 trigger.addClass('is-closed');
                 isClosed = false;
               } else {   
                 overlay.show();
                 trigger.removeClass('is-closed');
                 trigger.addClass('is-open');
                 isClosed = true;
               }
           }
           
           $('[data-toggle="offcanvas"]').click(function () {
                 $('#wrapper').toggleClass('toggled');
           });  
         });
      </script>
      <!-- Menu Handler JavaScript -->    
      <script>
         $(document).ready(function () {
         var url = window.location;
         // Will only work if string in href matches with location
         $('ul.nav a[href="' + url + '"]').parent().addClass('active');
         // Will also work for relative and absolute hrefs
         $('ul.nav a').filter(function() {
             return this.href == url;
         }).parent().addClass('active');
             });
            
      </script>
      <script>
         $(document).ready(function () {
         var url = window.location;
         // Will only work if string in href matches with location
         $('ul.nav2 a[href="' + url + '"]').parent().addClass('active');
         // Will also work for relative and absolute hrefs
         $('ul.nav2 a').filter(function() {
             return this.href == url;
         }).parent().addClass('active');
             });
            
      </script>