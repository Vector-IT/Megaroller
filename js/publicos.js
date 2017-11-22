$(document).ready(function () {
    $(".clickable").click(function () {
		var url = $(this).data("url");

		var js = $(this).data("js");

		var result;
		//Ejecuto primero el js

		if (js != undefined) {
			result = eval(js);
		}

		if ((url != undefined) && ((result == undefined) || (result == true))) {
			location.href = url;
		}

	});

	$('#bsqTexto1').keypress(function(e) {
        if (e.keyCode == 13) {
            busqSimple();
            return false; // prevent the button click from happening
        }
	});

	$.post("php/carritosProcesar.php", {
		"operacion": "6",
		},
		function (data) {
			if (data.estado === true) {
				$("#divCarrito").html(data.html);
				$("#subtotal").html(data.subtotal);
				$("#bonificacion").html(data.bonificacion);
				$("#total").html(data.total);

				$(".cantProds").html(data.cantProds);
			}
		}
	);

});

function busqSimple() {
	$("#bsqTexto").val($("#bsqTexto1").val());
	$("#bsqSubcat").val("");

	$("#frmBusqueda").submit();
}

function busqAvanzada() {
	$("#bsqSubcat").val("");
}


//Sidebar - Carrito
var isClosed = false;
var trigger;

$(document).ready(function () {
	trigger = $('.hamburger');

	trigger.click(function () {
		hamburger_cross();
	});

	$('[data-toggle="offcanvas"]').click(function () {
		$('#wrapper').toggleClass('toggled');
	});

	$(".overlay").click(function() {
		$('#wrapper').toggleClass('toggled');
		hamburger_cross();
	});
});

function hamburger_cross() {
	var overlay = $('.overlay');

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

function agregarProd() {
	$.post("php/carritosProcesar.php", {
		"operacion": "1",
		"NumeProd": $("input[name='NumeProd']:checked").val(),
		"Color": $(".inpColor.active").data("value"),
		"Montaje": $("input[name='Montaje']:checked").val(),
		"Control": $("input[name='Control']:checked").val(),
		"CantProd": $('#CantProd').val()
		},
		function (data) {
			if (data.estado === true) {
				$("#divCarrito").html(data.html);
				$("#subtotal").html(data.subtotal);
				$("#bonificacion").html(data.bonificacion);
				$("#total").html(data.total);

				$(".cantProds").html(data.cantProds);

				$('#wrapper').toggleClass('toggled');
				hamburger_cross();
			}
		}
	);
}

function quitarProd(strID) {
	$.post("php/carritosProcesar.php", {
		"operacion": "2",
		"CodiIden": strID,
		},
		function (data) {
			if (data.estado === true) {
				$("#divCarrito").html(data.html);
				$("#subtotal").html(data.subtotal);
				$("#bonificacion").html(data.bonificacion);
				$("#total").html(data.total);
				$(".cantProds").html(data.cantProds);
			}
		}
	);
}

function abrirCarrito() {
	$('#wrapper').toggleClass('toggled');
	hamburger_cross();
}

//reCAPTCHA
var recaptcha1;
var recaptcha2;
var myCallBackCaptcha = function() {
	//Render the recaptcha1 on the element with ID "recaptcha1"
	recaptcha1 = grecaptcha.render('recaptcha1', {
		'sitekey' : '6Lc3QTIUAAAAAFm5jcy1KGgVjXVPpE3uC-CUQurk', //Replace this with your Site key
		'theme' : 'light'
	});

	//Render the recaptcha2 on the element with ID "recaptcha2"
	recaptcha2 = grecaptcha.render('recaptcha2', {
		'sitekey' : '6Lc3QTIUAAAAAFm5jcy1KGgVjXVPpE3uC-CUQurk', //Replace this with your Site key
		'theme' : 'light'
	});
};

function agregarCortinaPres() {
	var $cortina = $($("form#presupuesto #divCortinas").children()[0]).clone();

	$cortina.appendTo("form#presupuesto #divCortinas");
}