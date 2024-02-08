@extends('plantilla')
@section('contenido')
    <section class="w-full h-full grid place-items-center">
        <div class="w-11/12 h-full flex items-center justify-center flex-col ">
            <div class="w-full h-full flex items-center cel:justify-around">
                <a href="/inicio/imagenes-nuevo">
                    <button class="cel:my-4 cel:w-32 bg-green-400 text-white font-semibold cel:rounded-2xl cel:h-14
                    md:my-4 md:w-36 md:rounded-2xl md:h-12 
                    lg:my-4 lg:w-36 lg:rounded-2xl lg:h-14 
                    xl:my-4 xl:w-40 xl:rounded-3xl xl:h-14 xl:text-lg">Nueva imagen</button>
                </a>
                <a href="/inicio/imagenes-listar">
                    <button class="cel:my-4 cel:w-20 bg-green-400 cel:rounded-2xl cel:h-14
                    md:my-4 md:w-20 md:rounded-2xl md:h-12 md:ml-10
                    lg:my-4 lg:w-20 lg:rounded-2xl lg:h-14 lg:ml-10
                    xl:my-4 xl:w-20 xl:rounded-3xl xl:h-14 xl:ml-10 xl:text-lg
                    grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                      </svg>
                    </button>
                </a>
            </div>
            <!--foreach-->
            @foreach ($aImagenes as $imagen)
                <div class="relative cel:w-11/12 w-5/12 h-4/12 flex items-center justify-center flex-col my-10 border-b-2 border-black ">
                    <h2 class="mb-4 mt-2 text-xl font-medium text-white bg-teal-400 w-full border-2 border-black tracking-widest rounded-lg h-16 grid place-items-center">{{ $imagen->cliente->nombre }} {{ $imagen->cliente->apellido }}</h2>
                    <h2 class="mb-2 font-semibold text-3xl text-sky-500 text-center ">{{ $imagen->titulo }}</h2>
                    <p class="text-center w-full mb-2 font-thin">{{ $imagen->texto }}</p>
                    <img src="{{ asset($imagen->imagen) }}" class="border-8 border-white w-full h-full">
                    <a href="{{ route('imagenes.eliminar', ['id' => $imagen->idImagen]) }}" class="absolute cel:bottom-4 cel:right-4 bottom-10 right-10 cel:text-base text-3xl cel:w-10 cel:h-10 w-14 h-14 ease-in-out duration-100 lg:hover:bg-red-500 lg:hover:text-white xl:hover:bg-red-500 xl:hover:text-white 2xl:hover:bg-red-500 2xl:hover:text-white rounded-full bg-white grid place-items-center " name="btnEliminarCliente">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </a>
                </div>
            @endforeach
            <!--endforeach-->
        </div>
    </section>
@endsection
