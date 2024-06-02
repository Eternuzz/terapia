
$(document).ready(function() {
    // Función que se ejecuta cuando se envía un formulario
   $('.eliminarRecordatorio').submit(function(event) {
   event.preventDefault(); // Prevenir la acción predeterminada del envío del formulario (redireccionamiento)

   var form_id = $(this).data('form'); // Obtener el identificador único del formulario

   $.ajax({
       url: 'eliminar_recordatorio.php', // Ruta a tu script PHP que procesará los datos
       type: 'POST', // Método HTTP que se utilizará para enviar la solicitud
       data: $(this).serialize() + '&form_id=' + form_id, // Datos que se enviarán con la solicitud (en este caso, los datos del formulario y el identificador único)
       success: function(respuesta) {
           $('#bandeja_recordatorio').html(respuesta);
           //Modal_("Si"); 
       },
   });
});
});


$(document).ready(function() {
    // Función que se ejecuta cuando se envía un formulario, el .editarrecordatorio es la clase del formulario que se va enviar
    //si es id va con # en vez de .
   $('.editarRecordatorio').submit(function(event) {
   event.preventDefault(); // Prevenir la acción predeterminada del envío del formulario (redireccionamiento)

   var form_id = $(this).data('form'); // Obtener el identificador único del formulario. esto es por si hay varios formularios con la misma clase, saber a cual se le dio click

   $.ajax({
       url: 'EditarRecordatorio.php', // Ruta a tu script PHP que procesará los datos
       type: 'POST', // Método HTTP que se utilizará para enviar la solicitud
       data: $(this).serialize() + '&form_id=' + form_id, // Datos que se enviarán con la solicitud (en este caso, los datos del formulario y el identificador único)
       success: function(respuesta) {
           $('#c_enviar_mensaje').html(respuesta);// aqui especifica el contenedor donde se van a mostrar los datos. solo se cambio el '#c_enviar_mensaje' por el id del contenedor
           //donde se mostraran los datos
           Modal_("Si"); 
       },
   });
});
});