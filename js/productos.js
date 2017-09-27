$(document).ready(function () {
    verPrecio();

    $('#medidas').modal('show');

    $('.carousel').carousel({
        interval: false
    });
    
    //-- Click on CANTIDAD
    $(".btn-minus").on("click",function(){
        var now = $("#CantProd").val();
        if ($.isNumeric(now)){
            if (parseInt(now) -1 > 0){ now--;}
            $("#CantProd").val(now);
        }else{
            $("#CantProd").val("1");
        }
        verPrecio();
    });  

    $(".btn-plus").on("click",function(){
        var now = $("#CantProd").val();
        if ($.isNumeric(now)){
            $("#CantProd").val(parseInt(now)+1);
        }else{
            $("#CantProd").val("1");
        }
        verPrecio();
    });
});

function verPrecio() {
    var precio = $("input[name='NumeProd']:checked").data("precio");

    $("#btnAgregar").removeClass("hide");
    $("#ImpoUnit").html("$ " + (precio * $('#CantProd').val()));
}