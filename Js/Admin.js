
$(document).ready(function() {
    // Función que se ejecuta cuando se envía un formulario
   $('.EditarUser').submit(function(event) {
   event.preventDefault(); // Prevenir la acción predeterminada del envío del formulario (redireccionamiento)

   var form_id = $(this).data('form'); // Obtener el identificador único del formulario

   $.ajax({
       url: 'EditarUser.php', // Ruta a tu script PHP que procesará los datos
       type: 'POST', // Método HTTP que se utilizará para enviar la solicitud
       data: $(this).serialize() + '&form_id=' + form_id, // Datos que se enviarán con la solicitud (en este caso, los datos del formulario y el identificador único)
       success: function(respuesta) {
           $('#contain_modal').html(respuesta);
           Modal_("Si"); 
       },
   });
});
});


$(document).ready(function() {
    // Función que se ejecuta cuando se envía un formulario
   $('.eliminarUser').submit(function(event) {
   event.preventDefault(); // Prevenir la acción predeterminada del envío del formulario (redireccionamiento)

   var form_id = $(this).data('form'); // Obtener el identificador único del formulario

   $.ajax({
       url: 'EliminarUser.php', // Ruta a tu script PHP que procesará los datos
       type: 'POST', // Método HTTP que se utilizará para enviar la solicitud
       data: $(this).serialize() + '&form_id=' + form_id, // Datos que se enviarán con la solicitud (en este caso, los datos del formulario y el identificador único)
       success: function(respuesta) {
           $('#panel_usuarios').html(respuesta);
       },
   });
});
});


$(document).ready(function () {
    // Función que se ejecuta cuando se envía un formulario
    $('.mandar_editar').submit(function (event) {
        event.preventDefault(); // Prevenir la acción predeterminada del envío del formulario (redireccionamiento)

         // Obtener el identificador único del formulario

        $.ajax({
            url: 'Actualizar_User.php', // Ruta a tu script PHP que procesará los datos
            type: 'POST', // Método HTTP que se utilizará para enviar la solicitud
            data: $(this).serialize(), // Datos que se enviarán con la solicitud (en este caso, los datos del formulario y el identificador único)
            success: function (respuesta) {

                if (respuesta == "Si") {
                    Good('Si');
                    Modal_("No");
                }
                else {
                    Good('No');
                }// Actualizar el contenido de la página web con la respuesta del servidor

                
            },
        });
    });
});


$(document).ready(function() {
    // Función que se ejecuta cuando se envía un formulario
   $('.eliminarRol').submit(function(event) {
   event.preventDefault(); // Prevenir la acción predeterminada del envío del formulario (redireccionamiento)

   var form_id = $(this).data('form'); // Obtener el identificador único del formulario

   $.ajax({
       url: 'EliminarRol.php', // Ruta a tu script PHP que procesará los datos
       type: 'POST', // Método HTTP que se utilizará para enviar la solicitud
       data: $(this).serialize() + '&form_id=' + form_id, // Datos que se enviarán con la solicitud (en este caso, los datos del formulario y el identificador único)
       success: function(respuesta) {
           $('#panel_rol').html(respuesta);
       },
   });
});
});

$(document).ready(function() {
    // Función que se ejecuta cuando se envía un formulario
   $('.eliminarTerapia').submit(function(event) {
   event.preventDefault(); // Prevenir la acción predeterminada del envío del formulario (redireccionamiento)

   var form_id = $(this).data('form'); // Obtener el identificador único del formulario

   $.ajax({
       url: 'EliminarTerapia.php', // Ruta a tu script PHP que procesará los datos
       type: 'POST', // Método HTTP que se utilizará para enviar la solicitud
       data: $(this).serialize() + '&form_id=' + form_id, // Datos que se enviarán con la solicitud (en este caso, los datos del formulario y el identificador único)
       success: function(respuesta) {
           $('#panel_terapias').html(respuesta);
       },
   });
});
});


$(document).ready(function() {
    // Función que se ejecuta cuando se envía un formulario
   $('.eliminarEspecialidad').submit(function(event) {
   event.preventDefault(); // Prevenir la acción predeterminada del envío del formulario (redireccionamiento)

   var form_id = $(this).data('form'); // Obtener el identificador único del formulario

   $.ajax({
       url: 'EliminarEspecialidad.php', // Ruta a tu script PHP que procesará los datos
       type: 'POST', // Método HTTP que se utilizará para enviar la solicitud
       data: $(this).serialize() + '&form_id=' + form_id, // Datos que se enviarán con la solicitud (en este caso, los datos del formulario y el identificador único)
       success: function(respuesta) {
           $('#Panel_Especialidad').html(respuesta);
       },
   });
});
});