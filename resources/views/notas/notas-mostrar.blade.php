@extends('plantilla')
@section('contenido')
    <section class="w-full h-full grid place-items-center">
        <div class="w-11/12 h-full flex items-center justify-center flex-col">
            <!-- Mostrar detalles de la nota utilizando $nota -->
            <h2>{{ $nota->titulo }}</h2>
            <p>{{ $nota->texto }}</p>
            <!-- Otros detalles de la nota -->
        </div>
    </section>
@endsection
