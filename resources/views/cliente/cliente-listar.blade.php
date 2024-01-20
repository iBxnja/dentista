@extends('plantilla')
@section('contenido')
    <section class="w-full h-full flex items-center justify-center flex-col">
        <div class="w-full cel:h-20 bg-blue-500 cel:flex cel:items-center cel:justify-around">
            <a href="{{route('cliente-nuevo')}}"><button class="cel:w-36 bg-green-500 cel:rounded-2xl cel:h-14">Nuevo cliente</button></a>
            <a href=""><button class="cel:w-36 bg-green-500 cel:rounded-2xl cel:h-14">Nuevo cliente</button></a>
        </div>
        <div class="w-11/12 cel:h-20 bg-yellow-500 cel:mt-4 cel:mb-2 flex items-center justify-center">
            <div class="w-1/4 h-full cel:grid cel:place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
            <div class="w-3/4 h-full cel:flex cel:items-start cel:justify-center cel:flex-col overflow-x-clip overflow-y-hidden">
                <h2>Nombre Persona</h2>
                @php
                    $texto = "Ultimo mensaje enviado por la otra persona";
        
                    if (strlen($texto) > 20) {
                        $texto = substr($texto, 0, 20) . ' . . .';
                    }
                @endphp
                <p class="">{{ $texto }}</p>
            </div>
        </div>
        <div class="w-11/12 cel:h-20 bg-yellow-500 cel:mt-2 cel:mb-2 flex items-center justify-center">
            <div class="w-1/4 h-full cel:grid cel:place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
            <div class="w-3/4 h-full cel:flex cel:items-start cel:justify-center cel:flex-col overflow-x-clip overflow-y-hidden">
                <h2>Nombre Persona</h2>
                @php
                    $texto = "Ultimo mensaje enviado por la otra persona";
        
                    if (strlen($texto) > 20) {
                        $texto = substr($texto, 0, 20) . ' . . .';
                    }
                @endphp
                <p class="">{{ $texto }}</p>
            </div>
        </div>
        <div class="w-11/12 cel:h-20 bg-yellow-500 cel:mt-2 cel:mb-2 flex items-center justify-center">
            <div class="w-1/4 h-full cel:grid cel:place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
            <div class="w-3/4 h-full cel:flex cel:items-start cel:justify-center cel:flex-col overflow-x-clip overflow-y-hidden">
                <h2>Nombre Persona</h2>
                @php
                    $texto = "Ultimo mensaje enviado por la otra persona";
        
                    if (strlen($texto) > 20) {
                        $texto = substr($texto, 0, 20) . ' . . .';
                    }
                @endphp
                <p class="">{{ $texto }}</p>
            </div>
        </div>
        <div class="w-11/12 cel:h-20 bg-yellow-500 cel:mt-2 cel:mb-2 flex items-center justify-center">
            <div class="w-1/4 h-full cel:grid cel:place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
            <div class="w-3/4 h-full cel:flex cel:items-start cel:justify-center cel:flex-col overflow-x-clip overflow-y-hidden">
                <h2>Nombre Persona</h2>
                @php
                    $texto = "Ultimo mensaje enviado por la otra persona";
        
                    if (strlen($texto) > 20) {
                        $texto = substr($texto, 0, 20) . ' . . .';
                    }
                @endphp
                <p class="">{{ $texto }}</p>
            </div>
        </div>
        <div class="w-11/12 cel:h-20 bg-yellow-500 cel:mt-2 cel:mb-4 flex items-center justify-center">
            <div class="w-1/4 h-full cel:grid cel:place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
            <div class="w-3/4 h-full cel:flex cel:items-start cel:justify-center cel:flex-col overflow-x-clip overflow-y-hidden">
                <h2>Nombre Persona</h2>
                @php
                    $texto = "Ultimo mensaje enviado por la otra persona";
        
                    if (strlen($texto) > 20) {
                        $texto = substr($texto, 0, 20) . ' . . .';
                    }
                @endphp
                <p class="">{{ $texto }}</p>
            </div>
        </div>
    </section>
@endsection