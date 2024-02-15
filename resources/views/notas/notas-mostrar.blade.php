@extends('plantilla')
@section('contenido')
<section class="w-full h-full grid place-items-center">
    <div class="w-11/12 h-full grid place-items-center py-10">
        <div class="w-10/12 mt-5 h-full flex flex-col items-center justify-center bg-teal-400 pb-4 mb-5">
            <div class="w-11/12 h-20 flex items-center justify-start mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-20 h-20">
                    <path d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z" />
                    <path d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z" />
                  </svg>
                  
            </div>
            <div class="w-11/12 h-20 flex items-center justify-start mt-4">
                <h4 class="text-3xl">Nota correspondiente al cliente seleccionado.</h4>
            </div>
            <div class="w-11/12 bg-teal-300 h-20 flex items-center justify-start mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-3">
                    <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                  </svg>                  
                <h2 class="text-xl mt-1">Nota asociada al cliente: {{ $nota->cliente->nombre }} {{ $nota->cliente->apellido }}</h2>
            </div>
            <div class="w-11/12 h-44 flex flex-col items-start justify-center ">
                <h4 class="text-xl">Datos:</h4>
                <h4 class="text-lg font-light">Numero de sesión: {{ $nota->numeroSesion }}</h4>
                <h4 class="text-lg font-light">Titulo de la nota: {{ $nota->titulo }}</h4>
            </div>
            <div class="w-11/12 bg-teal-300 h-20 flex items-center justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-3">
                    <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                  </svg>                  
                <h2 class="text-xl mt-1">Texto correspondiente a la nota seleccionada</h2>
            </div>
            <div class="w-11/12 bg-teal-300 h-96 overflow-auto flex items-start justify-start mt-2">                 
                <h2 class="text-lg font-normal mt-1">{{ $nota->texto }}</h2>
            </div>
        </div>
    </div>
</section>
@endsection
{{-- <h2>{{ $nota->titulo }}</h2>
<h2>{{ $nota->numeroSesion }}</h2>
<h2>{{ $nota->cliente->nombre }} {{ $nota->cliente->apellido }}</h2>
<p>{{ $nota->texto }}</p> --}}