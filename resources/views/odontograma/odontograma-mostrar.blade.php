@extends('plantilla')
@section('breadcrumb')
    <a href="/inicio" class="decoration-transparent">Inicio</a>
    <span class="ml-5">/</span>
    <span class="ml-5">Mostrar odontograma seleccionado</span>
@endsection
@section('contenido')


{{-- @php
dd($odontograma, $datosJson);
@endphp --}}
    <section clasS="w-full h-full flex-col flex items-center justify-center text-white">
        <h2 class="my-5 text-black">Odontograma digital</h2>

        <div class="flex bg-teal-300 shadow-md shadow-neutral-500 items-center justify-center w-11/12 h-full">
            <div class="w-1/4 h-96 grid place-items-center">
                <img src="{{ asset('imagenes/cliente.png') }}" alt="Cliente" class="cel:w-10 w-11/12">
            </div>
            <div class="w-3/4 h-96 flex items-start justify-center flex-col">
                <h4 class="text-base font-bold ml-10">Nombre del paciente:</h4>
                <span class="text-lg ml-10 ">{{ $odontograma->cliente->nombre }} {{ $odontograma->cliente->apellido }}</span>
                <h4 class="text-base font-bold ml-10 mt-3">Doctora responsable:</h4>
                <span class="text-lg ml-10 ">{{ $odontograma->doctora }}</span>
                <h4 class="text-base font-bold ml-10 mt-3">Numero de odontograma:</h4>
                <span class="text-lg ml-10 ">{{ $odontograma->numeroOdontograma }}</span>
                <h4 class="text-base font-bold ml-10 mt-3">Piezas padecientes:</h4>
                <span class="text-lg ml-10 ">{{ $odontograma->piezasPadecientes }}</span>
            </div>
        </div>

        <div class="w-11/12 h-full bg-teal-300 shadow-md shadow-neutral-500 flex items-center justify-center my-5 py-10">
            <div class="w-1/4 h-96 flex items-center justify-center flex-col">
              <h4 class="text-lg">Informe general de dientes</h4>
              <div class="w-full h-full  flex items-center justify-center flex-col">
                
                <div class="w-full flex items-center justify-center mb-4 mt-4">
                  <label for="cariado" class="w-2/4 text-center">Cariados</label>
                  <span class="w-2/4 border-b-2 border-white bg-transparent text-center" style="color: blawhiteck;">{{ $odontograma->cariado }}</span>
                </div>
                
                <div class="w-full flex items-center justify-center mt-4 mb-4">
                  <label for="obturado" class="w-2/4 text-center">Obturados</label>
                  <span type="text" name="obturado" class="w-2/4 border-b-2 border-white bg-transparent text-center" style="color: white;">{{ $odontograma->obturado }}</span>
                </div>
                
                <div class="w-full flex items-center justify-center mt-4 mb-4">
                  <label for="perdida" class="w-2/4 text-center">Perdida por caries</label>
                  <span type="text" name="perdida" class="w-2/4 border-b-2 border-white bg-transparent text-center" style="color: white;">{{ $odontograma->perdida }}</span>
                </div>
        
                <div class="w-full flex items-center justify-center mt-4 mb-4">
                  <label for="extraccion" class="w-2/4 text-center">Extracciones</label>
                  <span type="text" name="extraccion" class="w-2/4 border-b-2 border-white bg-transparent text-center" style="color: white;">{{ $odontograma->extraccion }}</span>
                </div>
        
                <div class="w-full flex items-center justify-center mt-4 mb-4">
                  <label for="sano" class="w-2/4 text-center">Sanos</label>
                  <span type="text" name="sano" class="w-2/4 border-b-2 border-white bg-transparent text-center" style="">{{ $odontograma->sano }}</span>
                </div>
        
              </div>
            </div>
        
            <div class="ml-5 w-8/12 h-full flex items-start justify-center flex-col">
              <div class="shadow-neutral-400 bg-white shadow-md resize-none h-96 w-full overflow-auto text-black">
                
                <textarea class="w-full h-96 bg-white resize-none" disabled>{{ $odontograma->observacion }}</textarea>
              </div>
            </div>
        
          </div>
          <div class="w-11/12 h-full flex items-center justify-center mb-5">
            <table class="w-full bg-white border border-gray-300 shadow-md shadow-neutral-500 rounded-md">
                <thead class="w-full h-14 bg-teal-300  flex items-center justify-center">
                    <tr class="w-full h-full flex items-center justify-center">
                        <th class="w-2/12 grid place-items-center h-14">Tipo de Diente</th>
                        <th class="w-2/12 grid place-items-center h-14">Estado de Diente</th>
                        <th class="w-2/12 grid place-items-center h-14">Corona Superior</th>
                        <th class="w-2/12 grid place-items-center h-14">Corona Inferior</th>
                        <th class="w-2/12 grid place-items-center h-14">Corona Izquierda</th>
                        <th class="w-2/12 grid place-items-center h-14">Corona Central</th>
                        <th class="w-2/12 grid place-items-center h-14">Corona Derecha</th>
                    </tr>
                </thead>
                <tbody id="odontogramaJSON" class="w-11/12 h-full text-center">
                    {{-- Foreach --}}
                    @foreach ($datosJson as $diente)
                    <tr class="w-full h-full flex items-center justify-center text-black">
                        <td class="w-2/12 grid place-items-center h-14">{{ $diente['tipoDiente'] }}</td>
                        <td class="w-2/12 grid place-items-center h-14">{{ $diente['estadoDiente'] }}</td>
                        <td class="w-2/12 grid place-items-center h-14">{{ $diente['coronaSuperior'] }}</td>
                        <td class="w-2/12 grid place-items-center h-14">{{ $diente['coronaInferior'] }}</td>
                        <td class="w-2/12 grid place-items-center h-14">{{ $diente['coronaIzquierda'] }}</td>
                        <td class="w-2/12 grid place-items-center h-14">{{ $diente['coronaCentral'] }}</td>
                        <td class="w-2/12 grid place-items-center h-14">{{ $diente['coronaDerecha'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>

    </section>
@endsection