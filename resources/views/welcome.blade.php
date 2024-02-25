@extends('plantilla')

@section('contenido')
<section class="w-full h-full flex items-center justify-center">
    <form class="w-full h-full flex flex-col items-center justify-center">
        @csrf
        <h2 class="mt-5">Crear odontograma</h2>
        <div class="w-11/12 h-full flex items-center justify-center mt-5">
            <div class="w-1/4 h-full bg-yellow-500 grid place-items-center">
                <img src="{{ asset('imagenes/cliente.png') }}" alt="Cliente" class="cel:w-10 w-10/12">
            </div>
            <div class="w-3/4 h-full bg-blue-500 flex items-center justify-around flex-wrap">
                <!-- ... (Continuación en la próxima parte) -->
                <!-- ... (Continuación de la primera parte) -->
                <div class="bg-red-500 w-2/6 mt-4 mr-6">
                    <label for="tipoDiente1">Diente</label>
                    <select name="tipoDiente1" id="tipoDiente1" class="w-8/12 text-center border-b-2 border-black bg-transparent">
                        <option value="Colmillo">Colmillo</option>
                        <option value="Muela">Muela</option>
                        <option value="Paleta">Paleta</option>
                    </select>
                </div>
                <div class="bg-red-500 w-3/12 mt-4 mr-6">
                    <label for="estadoDiente1">Estado</label>
                    <select name="estadoDiente1" id="estadoDiente1" class="w-9/12 text-center border-b-2 border-black bg-transparent">
                        <option value="Sano">Sano</option>
                        <option value="Extraccion">Extracción</option>
                        <option value="Careado">Careado</option>
                    </select>
                </div>
                <div class="bg-green-500 w-4/12 mt-4 mr-6">
                    <label for="coronaSuperior">Corona Superior</label>
                    <select name="coronaSuperior" id="coronaSuperior" class="w-6/12 text-center border-b-2 border-black bg-transparent">
                        <option value="Sano">Sano</option>
                        <option value="Extraccion">Extracción</option>
                        <option value="Careado">Careado</option>
                    </select>
                </div>
                <div class="bg-red-500 w-4/12 mt-4 mr-6">
                    <label for="coronaInferior">Corona Inferior</label>
                    <select name="coronaInferior" id="coronaInferior" class="w-6/12 text-center border-b-2 border-black bg-transparent">
                        <option value="Sano">Sano</option>
                        <option value="Extraccion">Extracción</option>
                        <option value="Careado">Careado</option>
                    </select>
                </div>
                <div class="bg-red-500 w-4/12 mt-4 mr-6">
                    <label for="coronaIzquierda">Corona Izquierda</label>
                    <select name="coronaIzquierda" id="coronaIzquierda" class="w-6/12 text-center border-b-2 border-black bg-transparent">
                        <option value="Sano">Sano</option>
                        <option value="Extraccion">Extracción</option>
                        <option value="Careado">Careado</option>
                    </select>
                </div>
                <div class="bg-red-500 w-4/12 mt-4 mr-6">
                    <label for="coronaCentral">Corona Central</label>
                    <select name="coronaCentral" id="coronaCentral" class="w-6/12 text-center border-b-2 border-black bg-transparent">
                        <option value="Sano">Sano</option>
                        <option value="Extraccion">Extracción</option>
                        <option value="Careado">Careado</option>
                    </select>
                </div>
                <div class="bg-red-500 w-4/12 mt-4 mr-6">
                    <label for="coronaDerecha">Corona Derecha</label>
                    <select name="coronaDerecha" id="coronaDerecha" class="w-6/12 text-center border-b-2 border-black bg-transparent">
                        <option value="Sano">Sano</option>
                        <option value="Extraccion">Extracción</option>
                        <option value="Careado">Careado</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- ... (Continuación en la próxima parte) -->
        <!-- ... (Continuación de la tercera parte) -->
        </div>
        <div>
            <button type="button" class="w-24 h-10 bg-pink-500 rounded-full mt-4"
                onclick="guardarDientes()">Guardar</button>
        </div>
        <div class="w-11/12 mt-5 mb-5 h-full flex items-center justify-center flex-col ">
            <label for="" class="w-full h-20 bg-teal-400 grid place-items-center">Odontograma JSON:</label>
            <table class="w-full h-full flex items-center justify-center flex-col">
                <tbody id="odontogramaJSON" class="w-full h-full flex items-center justify-center flex-col">

                </tbody>
            </table>
        </div>
    </form>
</section>

{{-- Variable para la ruta de las imágenes --}}
<script>
    var assetBaseUrl = "{{ asset('') }}";
</script>

{{-- Incluir script de JavaScript --}}
<script>
    // Array para almacenar los datos de los dientes
    var odontograma = [];

    // Función para guardar los datos de los dientes
// Función para guardar los datos de los dientes
function guardarDientes() {
    var tipoDiente1 = document.getElementById('tipoDiente1').value;
    var estadoDiente1 = document.getElementById('estadoDiente1').value;
    var coronaSuperior = document.getElementById('coronaSuperior').value;
    var coronaInferior = document.getElementById('coronaInferior').value;
    var coronaIzquierda = document.getElementById('coronaIzquierda').value;
    var coronaCentral = document.getElementById('coronaCentral').value;
    var coronaDerecha = document.getElementById('coronaDerecha').value;

    // Agregar datos al array
    var nuevoDiente = [
        { tipo: tipoDiente1, estado: estadoDiente1 },
        { tipo: "Corona Superior", estado: coronaSuperior },
        { tipo: "Corona Inferior", estado: coronaInferior },
        { tipo: "Corona Izquierda", estado: coronaIzquierda },
        { tipo: "Corona Central", estado: coronaCentral },
        { tipo: "Corona Derecha", estado: coronaDerecha }
    ];

    // Agregar la nueva fila al array
    odontograma.push(nuevoDiente);

    // Mostrar el JSON actualizado de forma más legible
    var formattedJSON = odontograma.map(function(fila, index) {
        var datosFila = fila.map(function(diente) {
            return `<td class="w-1/6 h-20 grid place-items-center text-center font-bold bg-teal-300">${diente.tipo}:</td>
                    <td class="w-1/6 h-20 grid place-items-center text-center bg-teal-200">${diente.estado}</td>`;
        }).join('\n');

        return `<tr class="w-full h-full flex items-center justify-center border-b-2 border-black mt-2 bg-blue-500">${datosFila}</tr>`;
    }).join('\n');

    document.getElementById('odontogramaJSON').innerHTML = formattedJSON;
}

</script>
@endsection