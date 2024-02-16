@extends('plantilla')
@section('contenido')
    <section class="w-full h-full flex items-center justify-center flex-col">
        <!-- formulario en la vista 'cita-nuevo' -->
        <form id="formulario-cita" action="{{ route('cita-nuevo-crear') }}" method="POST" class="w-11/12 h-full flex items-center justify-center flex-col">
            @csrf
            <h2 class="text-4xl mt-10">Nueva cita</h2>
            <div class="w-full h-full flex items-center justify-center flex-col my-5">
                <label for="nombre" class="text-xl cel:text-sm cel:text-center">Nombre completo</label>
                <input type="text" name="nombre" required placeholder="Escribe el nombre del cliente. Ej: Daniela Mercedes" class="mt-4 text-center w-5/12 h-8 rounded-lg border-2 border-black cel:text-center">
            </div>
            <div class="w-full h-full flex items-center justify-center flex-col">
                <label for="fecha" class="text-xl cel:text-sm cel:text-center">Fecha de la cita</label>
                <input type="datetime-local" name="fecha" required class="mt-4 text-center w-5/12 mb-5 h-8 rounded-lg border-2 border-black cel:text-center">
            </div>
            <button type="submit" onclick="crearCita()" class="bg-teal-500 text-white w-64 h-14 rounded-2xl">Agendar Cita</button>
        </form>
    </section>
@endsection

