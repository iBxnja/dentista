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
        <form id="" method="POST" enctype="multipart/form-data" class="w-11/12 h-full flex items-center justify-center flex-col mt-10">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="id" value="{{ isset($cliente) ? $cliente->idCliente : '0' }}">
            <h2 class="text-4xl mt-10">Nuevo cliente</h2>
            <div class="w-11/12 h-full flex items-center justify-center flex-col mt-10">
                <div class="w-full h-full flex items-center justify-around">
                    <div class="flex flex-col justify-center items-start w-5/12">
                        <label for="txtNombre" class="text-xl mb-4">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="w-full h-8 rounded-lg border-2 border-black" placeholder="Escribe el nombre del cliente. Ej: Benjamin">
                    </div>            
                    <div class="flex flex-col justify-center items-start w-5/12">
                        <label for="txtApellido" class="text-xl mb-4">Apellido</label>
                        <input type="text" name="txtApellido" id="txtApellido" class="w-full h-8 rounded-lg border-2 border-black" placeholder="Escribe el apellido del cliente. Ej: Gonzalez">
                    </div>
                </div>
                <div class="w-full h-full  flex items-center justify-around">
                    <div class="flex flex-col justify-center items-start w-5/12">
                        <label for="txtDni" class="text-xl mb-4">Dni</label>
                        <input type="text" name="txtDni" id="txtDni" class="w-full h-8 rounded-lg border-2 border-black" placeholder="Escribe el dni del cliente. Ej: 11222333">
                    </div>            
                    <div class="flex flex-col justify-center items-start w-5/12">
                        <label for="txtEdad" class="text-xl mb-4">Edad</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="w-full h-8 rounded-lg border-2 border-black" placeholder="Escribe la edad del cliente. Ej: 20">
                    </div>
                </div>
            <button type="submit" name="btnAgregar" class="bg-purple-700 text-white w-64 h-40 mt-8 rounded-2xl">Agregar</button>
        </form>







        {{-- <form method="POST" class="flex items-center justify-center flex-col cel:w-11/12 h-full mt-5">
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
        </form> --}}
    </section>
@endsection