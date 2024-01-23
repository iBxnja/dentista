@extends('plantilla')
@section('contenido')
    <section class="w-full h-full flex items-center justify-center flex-col">
        <div class="w-full cel:h-20 bg-blue-500 cel:flex cel:items-center cel:justify-around">
            <a href="/inicio/cliente-nuevo"><button class="cel:w-36 bg-green-500 cel:rounded-2xl cel:h-14">Nuevo cliente</button></a>
            <a href="#"><button class="cel:w-36 bg-green-500 cel:rounded-2xl cel:h-14">Nuevo cliente</button></a>
        </div>
        @if(isset($mensaje))
            <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-green-500 grid place-items-center">
                <h2 class="cel:text-base text-white">{{ $mensaje }}</h2>
            </div>
        @endif
        @if(isset($error))
            <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-green-500 grid place-items-center">
                <h2 class="cel:text-base text-white">{{ $error }}</h2>
            </div>
        @endif

        @foreach ($aClientes as $clientes)
        <div class="w-11/12 cel:h-20cel:mt-4 cel:mb-2 flex items-center justify-center my-5">
            <div class="cel:w-3/4 cel:h-full cel:flex cel:justify-center cel:items-start bg-red-500 flex items-center justify-center">
                <div class="flex items-start justify-center flex-col w-3/4 h-full">
                <h2 class="cel:ml-5 cel:text-white cel:text-sm">{{ $clientes->nombre }}</h2>
                <h2 class="cel:ml-5 cel:text-white cel:text-2xl cel:font-bold">{{ $clientes->apellido }}</h2>
                </div>
                <div class="flex items-center justify-center w-3/4 h-full">
                <h2 class="cel:ml-5 cel:text-white cel:text-2xl cel:font-bold">{{ $clientes->edad }}</h2>
                </div>
            </div>
            <div class="cel:w-1/4 cel:h-full cel:bg-blue-500 grid place-items-center">
                <a href="{{ isset($clientes->idCliente) ? route('cliente.eliminar', ['id' => $clientes->idCliente]) : '' }}" class="cel:text-base text-3xl" name="btnEliminarCliente">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                  </svg>
                  </i>
            </div>
        </div>
        @endforeach
    </section>
    @endsection