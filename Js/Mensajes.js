function llamar_mensajes() {
    $.ajax({
        url: "allMensajes.php",
        type: "POST",
        success: function (respuesta_server) {
            $("#bandeja_recibidos").html(respuesta_server);
        }
    });
}