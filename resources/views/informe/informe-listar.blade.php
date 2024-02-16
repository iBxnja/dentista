@extends('plantilla')
@section('contenido')
    <section class="w-full h-full flex items-center justify-center flex-wrap text-white">
        <div class="shadow-neutral-600 shadow-md border-4 border-teal-600 mt-5 mx-10 w-80 h-40 bg-teal-400 rounded-xl flex items-center justify-center flex-col overflow-hidden">
            <h4 class="text-lg">Clientes Totales:</h4>
            <span class="text-6xl">{{ $totalClientes }}</span>
        </div>
        <div class="shadow-neutral-600 shadow-md border-4 border-teal-600 mt-5 mx-10 w-80 h-40 bg-teal-400 rounded-xl flex items-center justify-center flex-col overflow-hidden">
            <h4 class="text-lg">Notas Totales:</h4>
            <span class="text-6xl">{{ $totalNotas }}</span>
        </div>
        <div class="shadow-neutral-600 shadow-md border-4 border-teal-600 mt-5 mx-10 w-80 h-40 bg-teal-400 rounded-xl flex items-center justify-center flex-col overflow-hidden">
            <h4 class="text-lg">Imagenes Totales:</h4>
            <span class="text-6xl">{{ $totalImagenes }}</span>
        </div>
        <div class="shadow-neutral-600 shadow-md border-4 border-teal-600 mt-5 mx-10 w-80 h-40 bg-teal-400 rounded-xl flex items-center justify-center flex-col overflow-hidden">
            <h4 class="text-lg">Citas Totales:</h4>
            <span class="text-6xl">{{ $totalCalendario }}</span>
        </div>
        <div class="shadow-neutral-600 shadow-md border-4 border-teal-600 mt-5 mx-10 w-80 h-40 bg-teal-400 rounded-xl flex items-center justify-center flex-col overflow-hidden">
            <h4 class="text-lg">Usuario:</h4>
            @if(auth()->check())
            <span class="text-2xl">{{ auth()->user()->name }}</span>
            @endif
        </div>
    </section>
@endsection