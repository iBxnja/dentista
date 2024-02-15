@extends('plantilla')

<!-- formulario en la vista 'cita-nuevo' -->
<form id="formulario-cita" action="{{ route('cita-nuevo-crear') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>

    <label for="fecha">Fecha:</label>
    <input type="datetime-local" name="fecha" required>

    <button type="submit" onclick="crearCita()">Agendar Cita</button>

</form>

<script>
//     function crearCita() {
//     // Obtén los datos del formulario
//     var nombre = document.querySelector('input[name="nombre"]').value;
//     var fecha = document.querySelector('input[name="fecha"]').value;

//     // Obtén el token CSRF
//     var csrfToken = document.querySelector('input[name="_token"]').value;

//     // Envia los datos al servidor utilizando AJAX
//     $.ajax({
//         url: '/inicio/cita-listar/crear',
//         type: 'POST',
//         data: {
//             _token: csrfToken,
//             nombre: nombre,
//             fecha: fecha
//         },
//         success: function (data) {
//             // Éxito: Actualiza el calendario con la nueva cita
//             actualizarCalendario(data);
//         },
//         error: function (error) {
//             console.error('Error al crear la cita:', error);
//             alert('Error al crear la cita. Consulta la consola para más detalles.');
//         }
//     });
// }

// function actualizarCalendario(nuevaCita) {
//     console.log('Llamada a actualizarCalendario');

//     var calendarEl = document.getElementById('calendar');

//     if (calendarEl) {
//         var calendar = new FullCalendar.Calendar(calendarEl);
//         calendar.addEvent({
//             title: nuevaCita.title,
//             start: nuevaCita.start
//         });

//         // Refleja visualmente la nueva cita en el calendario
//         calendar.render();

//         alert('Cita agendada correctamente');

//         // Limpia el formulario
//         document.querySelector('input[name="nombre"]').value = '';
//         document.querySelector('input[name="fecha"]').value = '';
//     } else {
//         console.error('Elemento del calendario no encontrado.');
//     }
// }



</script>
