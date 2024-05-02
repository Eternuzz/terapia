document.addEventListener('DOMContentLoaded', function() {
    var contenedores = document.querySelectorAll('.ejercicio_card');
    contenedores.forEach(function(contenedor) {
        contenedor.addEventListener('click', function() {
            window.location.href='Vistas/IniciarSesion.html';
        });
    });

});

function dirigir(){
    window.location.href='../Vistas/IniciarSesion.html';
}
