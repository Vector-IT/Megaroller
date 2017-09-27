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