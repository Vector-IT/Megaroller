// Contact Form Scripts

var $formUsado;

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            $formUsado = $form;

            var name = $form.find("input#name").val();
            var email = $form.find("input#email").val();
            var phone = $form.find("input#phone").val();
            var location = $form.find("input#location").val();            
            var message = $form.find("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "./mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    location: location,
                    message: message
                },
                cache: false,
                success: function(data) {
                    var strSalida;
                    if (data.indexOf('error') == -1) {
                    // Success message
                        strSalida = "<div class='alert alert-success'>";
                        strSalida+= "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                        strSalida+= "<strong>Su mensaje ha sido enviado con éxito. </strong>";
                        strSalida+= "</div>";

                        $formUsado.trigger("reset");
                    } else {
                        // Fail message
                        strSalida = "<div class='alert alert-danger'>";
                        strSalida+= "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                        strSalida+= "<strong>Disculpa " + $formUsado.find("input#name").val() + ", hay un problema con el servidor, intente luego por favor.";
                        strSalida+= "</div>";
                    }

                    $formUsado.find('#success').html(strSalida);
                },
                error: function() {
                    var strSalida;
                    // Fail message
                    strSalida = "<div class='alert alert-danger'>";
                    strSalida+= "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                    strSalida+= "<strong>Disculpa " + $formUsado.find("input#name").val() + ", hay un problema con el servidor, intente luego por favor.";
                    strSalida+= "</div>";

                    $formUsado.find('#success').html(strSalida);
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
