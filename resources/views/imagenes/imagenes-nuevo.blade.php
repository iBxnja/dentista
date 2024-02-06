@extends('plantilla')
@section('contenido')
<section class="w-full h-full grid place-items-center pb-10">
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
    <input type="hidden" name="id" value="{{ isset($imagenes) ? $imagenes->idImagen : '0' }}">
        <h2 class="text-4xl">Nueva Imagen</h2>
        <div class="w-11/12 h-full flex items-center justify-center flex-col mt-10">
            <div class="w-full h-full flex flex-col items-center justify-around">
                <div class="flex flex-col justify-center items-center w-5/12 cel:w-full">
                    <label for="lstfk_idCliente" class="text-xl mb-4">Cliente</label>
                    <select name="lstfk_idCliente" id="lstfk_idCliente" class="w-full h-8 rounded-lg border-2 border-black text-center">
                        @foreach ($aCliente as $cliente)
                            <option value="{{ $cliente->idCliente }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                        @endforeach
                    </select>   
                </div>
                <div class="flex flex-col justify-center items-center w-5/12 mt-7 cel:w-full">
                    <label for="txtTitulo" class="text-xl mb-4">Titulo</label>
                    <input type="text" name="txtTitulo" id="txtTitulo" class="w-full h-8 rounded-lg border-2 border-black text-center">
                </div>
                <div class="flex flex-col justify-center items-center w-5/12 mt-7 cel:w-full">
                    <label for="txtTexto" class="text-xl mb-4">Observación</label>
                    <textarea type="text" name="txtTexto" id="txtTexto" class="w-full h-40 resize-none rounded-lg border-2 border-black text-center"></textarea>
                </div>
                <div class="flex flex-col justify-center items-center w-5/12 mt-7 cel:w-full">
                    <label for="imagen" class="text-xl mb-4">Imagen</label>
                    <input type="file" name="imagen" id="imagen" accept=".jpg, .png, .jpeg" required class="w-full h-8">
                </div>
            </div>            
        </div>
    </div>
    <button type="submit" name="btnAgregar" class="bg-purple-700 text-white w-64 h-20 mt-8 rounded-2xl">Agregar</button>
    </form>
</section>
@endsection