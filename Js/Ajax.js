function enviar_datos(destino,origen) {
    $.ajax({
        url: ""+destino,
        type: "POST",
        data: $(""+origen).serialize(),
        success: function (respuesta) {
            if(respuesta=="Si"){
                Good('Si');
            }
            else{
                Good('No');
            }
            
        }
    });
}
function boton_click(remitente){
    $("#"+remitente).click(function () {
        enviar_datos();
    });
}

function evento_click(destino,origen,remitente,redireccionar){
    enviar_datos(destino,origen);
    boton_click(remitente);
    if(redireccionar!="0"){

    }else{
        window.location.href=""+redireccionar;
    }
}

