
function ContainC(date){
    var content = document.querySelector('.recuperar_pass');
    var iniciarS = document.querySelector('#iniciarS');

    if(date=='ver'){
        content.style.display = 'flex';
        iniciarS.style.display = 'none';
    }else{
        content.style.display = 'none';
        iniciarS.style.display = 'flex';
    }

}

function Validar_datos(destino,origen) {
    $.ajax({
        url: ""+destino,
        type: "POST",
        data: $(""+origen).serialize(),
        success: function (respuesta) {
            if(respuesta=="Si"){
                alert(respuesta);
                Good('Si');
                ContainC(respuesta);
            }else{
                alert(respuesta);
                Good('No');
            }
            
        }
    });
}

function Boton_Validacion(remitente){
    $("#"+remitente).click(function () {
        Validar_datos();
    });
}

function Evento_Validacion(destino,origen,remitente){
    Validar_datos(destino,origen);
    Boton_Validacion(remitente);
}