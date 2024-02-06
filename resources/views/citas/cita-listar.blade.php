@extends('plantilla')

@section('contenido')
    <section id="citas" class="w-full h-full grid place-items-center">
        @if(isset($error))
            <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-red-500 grid place-items-center">
                <h2 class="cel:text-base text-white">{{ $error }}</h2>
            </div>
        @endif
        @if(isset($mensaje))
            <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-green-500 grid place-items-center">
                <h2 class="cel:text-base text-white">{{ $mensaje }}</h2>
            </div>
        @endif
        {{-- <div class="w-11/12 h-20 mt-5 flex items-center justify-start">
            <a href="/inicio/cita-nuevo" class="">
                <button class="cel:my-4 cel:w-32 bg-green-500 cel:rounded-2xl cel:h-14
                    md:my-4 md:w-16 md:rounded-2xl md:h-12 
                    lg:my-4 lg:w-16 lg:rounded-2xl lg:h-12 
                    xl:my-4 xl:w-16 xl:rounded-md xl:h-12 grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </a>
        </div>
        
        @php
            $meses = [];
        @endphp

        <table class="w-11/12 h-full" id="tabla">
            <thead class="w-full h-full">
                <tr class="w-full h-16 bg-rose-400 flex items-center justify-center text-black">
                    <th class="text-xl font-semibold w-4/12 bg-rose-400">Cliente</th>
                    <th class="text-xl font-semibold w-2/12">Dia</th>
                    <th class="text-xl font-semibold w-1/12">Numero</th>
                    <th class="text-xl font-semibold w-2/12">Mes</th>
                    <th class="text-xl font-semibold w-2/12">Hora</th>
                    <th class="text-xl font-semibold w-2/12">Control</th>
                    <th class="text-xl font-semibold w-3/12">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aaCita as $cita)
                    <tr class="persona-item flex items-center justify-center bg-rose-200 w-full h-24 my-5 text-black">
                        <td class="text-base overflow-auto w-4/12 grid place-items-center h-full">{{ $cita->cliente->nombre }} {{ $cita->cliente->apellido }}</td>
                        <td class="text-base overflow-auto w-2/12 grid place-items-center">{{ $cita->dia }}</td>
                        <td class="text-base overflow-auto w-1/12 grid place-items-center h-full">{{ $cita->numero }}</td>
                        <td class="text-base overflow-auto w-2/12 grid place-items-center">{{ $cita->mes }}</td>
                        <td class="text-base overflow-auto w-2/12 grid place-items-center h-full">{{ $cita->hora }} Hs</td>
                        <td class="overflow-auto w-2/12 grid place-items-center">{{ $cita->consulta }}</td>
                        <td class="w-3/12 flex items-center justify-around h-full">
                            <a href="{{ isset($cita->idCita) ? route('cita.eliminar', ['id' => $cita->idCita]) : '' }}" class="cel:text-base text-3xl" name="btnEliminarCita">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </a>
                            <a href="#" class="cel:text-base text-3xl" name="btnEditarCita">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody> --}}
        </table>
    </section>
@endsection
