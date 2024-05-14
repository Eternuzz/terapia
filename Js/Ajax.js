function enviar_datos(destino,origen,otro) {
    $.ajax({
        url: ""+destino,
        type: "POST",
        data: $(""+origen).serialize(),
        success: function (respuesta) {
            if(respuesta=="Si"){
                Good('Si');
                if(otro!=0){
                    setTimeout(function() {
                        window.location.href = ""+otro;
                       }, 3000);
                }

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

function evento_click(destino,origen,remitente,redireccionar,otro){
    enviar_datos(destino,origen,otro);
    boton_click(remitente);
    if(redireccionar!=0){

    }else{
        window.location.href=""+redireccionar;
    }
}



// ---------------------------------------

function enviar_datos_normal(destino,origen,respo) {
    $.ajax({
        url: ""+destino,
        type: "POST",
        data: $(""+origen).serialize(),
        success: function (respuesta) {
            if(respo!=0){
                $("#"+respo).html(respuesta);
            }

            
        }
    });
}
function boton_click_normal(remitente){
    $("#"+remitente).click(function () {
        enviar_datos_normal();
    });
}

function evento_normal(destino,origen,remitente,respo){
    enviar_datos_normal(destino,origen,respo);
    boton_click_normal(remitente);

}





///--------------------------------------


function enviar_datos_(destino,origen) {
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
function boton_click_(remitente){
    $("#"+remitente).click(function () {
        enviar_datos_();
    });
}

function evento_click_(destino,origen,remitente){
    enviar_datos_(destino,origen);
    boton_click_(remitente);

}


