@extends('plantilla')
@section('contenido')
    <section class="w-full h-full grid place-items-center">
        @if(isset($error))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-red-500 grid place-items-center">
            <h2 class="cel:text-base text-white">{{ $error }}</h2>
        </div>
        @endif
        <form method="POST" class="flex items-center justify-center flex-col cel:w-11/12 h-full mt-5">
            @csrf
            <h2 class="cel:text-4xl cel:font-semibold text-purple-700 cel:my-5">Nuevo cliente</h2>
            <div class="flex items-center justify-center flex-col w-full">
                <label for="txtNombreCompleto" class="text-black cel:mt-10 cel:text-lg cel:mb-2 font-light">Nombre completo</label>
                <input type="text" name="txtNombreCompleto" class="text-center w-10/12 h-10 border-b-2 border-black bg-transparent focus:border-blue-500 outline-none" id="txtNombreCompleto">                        
                <input type="hidden" name="id" value="{{ isset($cliente) ? $cliente->idCliente : '0' }}">
            </div>
            <div class="flex items-center justify-center flex-col w-full">
                <label for="txtApellido" class="text-black cel:text-lg cel:mb-2 font-light cel:mt-10">Apellido</label>
                <input type="text" name="txtApellido" class="text-center w-10/12 h-10 border-b-2 border-black bg-transparent focus:border-blue-500 outline-none" id="txtApellido">                        
            </div>
            <div class="flex items-center justify-center flex-col w-full">
                <label for="txtEdad" class="text-black cel:text-lg cel:mb-2 font-light cel:mt-10">Edad</label>
                <input type="number" name="txtEdad" class="text-center w-10/12 h-10 border-b-2 border-black bg-transparent focus:border-blue-500 outline-none" id="txtEdad">           
            </div>
            <button type="submit" name="btnAgregar" class="bg-purple-700 text-white w-32 h-12 mt-8 rounded-2xl">Agregar</button>
        </form>
    </section>
@endsection