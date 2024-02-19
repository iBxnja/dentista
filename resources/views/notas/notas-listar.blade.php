@extends('plantilla')
@section('contenido')
<section class="w-full h-full flex items-center justify-center flex-col">
  <div class="w-11/12 h-full flex items-center cel:justify-around">
    <a href="/inicio/notas-nuevo">
      <button class="cel:my-4 cel:w-20 bg-green-400 cel:rounded-2xl cel:h-14
                  md:my-4 md:w-20 md:rounded-2xl md:h-12
                  lg:my-4 lg:w-20 lg:rounded-2xl lg:h-14
                  xl:my-4 xl:w-20 xl:rounded-3xl xl:h-14 xl:text-lg
                  grid place-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 text-white">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
      </button>
    </a>
    <a href="/inicio/cliente-listar">
      <button class="cel:my-4 cel:w-20 bg-green-400 cel:rounded-2xl cel:h-14
                  md:my-4 md:w-20 md:rounded-2xl md:h-12 md:ml-10
                  lg:my-4 lg:w-20 lg:rounded-2xl lg:h-14 lg:ml-10
                  xl:my-4 xl:w-20 xl:rounded-3xl xl:h-14 xl:ml-10 xl:text-lg
                  grid place-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 text-white">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
      </button>
    </a>
  </div>
  <form action="" class="w-full h-full flex items-center flex-col justify-center">
    <div class="w-11/12 h-20 bg-teal-400 flex items-center justify-start cel:justify-center">
      <input type="text" name="buscarpor" id="buscarpor" class="text-center cel:w-7/12 w-1/4 h-10 cel:ml-0 ml-5 rounded-lg border-2 border-black" placeholder="Buscar una nota..." value="{{ $buscarpor }}">
      <button type="submit" class="cel:w-20 w-40 h-10 bg-green-500 text-white ml-5 rounded-lg">Buscar</button>
    </div>
    
    
    
    <div class="w-11/12 h-full flex items-center justify-between mt-3 flex-wrap cel:justify-center cel:flex-col">
      <!--foreach-->
      @foreach ($aNota as $nota)
          <div class="cel:w-11/12 w-80 h-96 bg-teal-200 my-5 relative flex items-center justify-center flex-col border-4 border-teal-500 text-center overflow-hidden">
              <span class="absolute bg-teal-500 border-2 border-teal-400 w-12 h-12 rounded-tl-3xl rounded-br-3xl top-5 left-5 text-white text-2xl font-bold grid place-items-center" >{{ $nota->numeroSesion }}</span>
              <a href="{{ route('notas.eliminar', ['id' => $nota->idNota]) }}" class="absolute bg-teal-500 border-2 border-teal-400 w-12 h-12 rounded-tl-3xl rounded-br-3xl top-5 right-5 text-white text-2xl font-bold grid place-items-center" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white ">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
              </a>
              <h2 class="text-lg font-semibold">#{{ $nota->numeroSesion }} - Sesión</h2>
              <h2 class="text-lg font-semibold">{{ $nota->cliente->nombre }} {{ $nota->cliente->apellido }}</h2>
              <span class="w-11/12 text-lg font-light">{{ $nota->titulo }}</span>
              <a href="/inicio/notas-mostrar/{{ $nota->idNota }}" class="decoration-transparent text-white w-11/12 bg-teal-400 border-2 border-teal-500 grid place-items-center h-12 absolute bottom-4">Leer la nota</a>
            </div>
      @endforeach
      <!--endforeach-->
  </div>
  



  </form>





</section>
@endsection