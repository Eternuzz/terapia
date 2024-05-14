function llamar_mensajes() {
    $.ajax({
        url: "allMensajes.php",
        type: "POST",
        success: function (respuesta_server) {
            $("#bandeja_recibidos").html(respuesta_server);
        }
    });
}

function llamar_mensajesE() {
    $.ajax({
        url: "Enviados.php",
        type: "POST",
        success: function (respuesta_server1) {
            $("#bandeja_enviados").html(respuesta_server1);
        }
    });
}

function Llamar_Users(){
    $.ajax({
        url: "ConsultarUsuarios.php",
        type: "POST",
        success: function (respuesta_server1) {
            $("#panel_usuarios").html(respuesta_server1);
        }
    });
}

