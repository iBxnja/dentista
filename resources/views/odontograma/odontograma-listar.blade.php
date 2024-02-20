@extends('plantilla')
@section('contenido')
    <div class="w-full h-full flex items-center justify-center">
       <form action="" method="" class="">


       </form>
    </div>

























    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Contador para asignar IDs únicos a los nuevos campos
            let contadorCampos = 1;

            // Función para agregar un nuevo campo al formulario
            function agregarCampo() {
                const contenedorCampos = document.getElementById('contenedor-campos');

                // Crear un nuevo campo de texto
                const nuevoCampo = document.createElement('input');
                nuevoCampo.type = 'text';
                nuevoCampo.name = `campo${contadorCampos}`;
                nuevoCampo.placeholder = `Campo ${contadorCampos}`;
                nuevoCampo.className = 'w-full p-2 mt-2 border border-gray-300 rounded';

                // Agregar el nuevo campo al contenedor
                contenedorCampos.appendChild(nuevoCampo);

                // Incrementar el contador
                contadorCampos++;
            }

            // Evento click para agregar un nuevo campo al hacer clic en el botón
            document.getElementById('btn-agregar-campo').addEventListener('click', agregarCampo);
        });
    </script>
@endsection

{{-- <form id="formulario-dinamico" class="w-1/2 bg-gray-100 p-8 rounded shadow-md">
    <h1 class="text-2xl font-bold mb-4">Formulario Dinámico</h1>

    <div id="contenedor-campos">
        <!-- Aquí se agregarán los campos dinámicamente -->
    </div>

    <button type="button" id="btn-agregar-campo" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Agregar Campo</button>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Enviar</button>
</form> --}}