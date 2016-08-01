$(function() {

    function getValue(selector) {
        return $.trim($(selector).val());
    };

    $("#btn_3").click(function() {
        var data = {
            "nombre":getValue("#in_0"),
            "telefono":getValue("#in_1"),
            "email":getValue("#in_2"),
            "asunto":getValue("#in_3"),
            "mensaje":getValue("#in_4")
        };
        var params = {
            url:"../include/enviarCorreo.php",
            method:"POST",
            data:data,
            dataType: "json"
        };
        var request = $.ajax(params);
        request.done(function( msg ) {
            console.log(msg);
            alert("Mail enviado!");
        });
        request.fail(function( jqXHR, textStatus ) {
            console.log( "Request failed: " + textStatus );
        });

    });

})