@extends('plantilla')

@section('contenido')
    <section class="w-full h-full grid place-items-center">
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

        
    </section>
@endsection
