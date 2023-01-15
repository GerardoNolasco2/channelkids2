$(document).ready(function () {
    // Al hacer submit en el formulario
    $('#gpt3-form').submit(function (e) {
        // Previene el comportamiento por defecto del formulario
        e.preventDefault();

        // Recupera el valor del campo de texto
        var prompt = $('#prompt').val();

        // Valida que el campo de texto no esté vacío
        if (!prompt) {
            alert('Por favor, introduce una pregunta válida.');
            return;
        }

        // Muestra un mensaje de espera antes de hacer la solicitud AJAX al servidor
        $('#gpt3-response').html('<p>Espere mientras procesamos su pregunta...</p>');
        
        // Hace una solicitud AJAX al servidor
        $.ajax({
            type: 'POST',
            url: 'controller.php',
            data: {prompt: prompt},
            success: function (response) {
                // Muestra la respuesta del servidor en el elemento con ID gpt3-response
                $('#gpt3-response').html(response);
                // Limpia el campo de texto
                $('#prompt').val('');
            },
            error: function (error) {
                // Muestra un mensaje de error en caso de que ocurra algún problema
                $('#gpt3-response').html('<p>Error al procesar su pregunta, por favor intente de nuevo.</p>');
            }
        });
    });
});