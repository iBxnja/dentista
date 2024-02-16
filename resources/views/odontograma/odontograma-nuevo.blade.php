@extends('plantilla')
@section('contenido')
  <section class="w-full h-full flex items-center justify-center flex-col">
    <h2 class="my-4">Crear odontograma</h2>
    <div class="w-11/12 h-80 flex items-center justify-center bg-blue-500">

      <div class="w-1/4 h-full flex items-center justify-center flex-col bg-red-500">
        <div id="arriba" class="w-20 h-10 border-2 border-black"></div>
        <div class="flex items-center justify-center my-5">
          <div id="izquierda" class="h-20 w-10 border-2 border-black"></div>
          <div id="centro" class="w-20 h-20 border-2 mx-5 border-black"></div>
          <div id="derecha" class="h-20 w-10 border-2 border-black"></div>
        </div>
        <div id="abajo" class="w-20 h-10 border-2 border-black"></div>
      </div>
      <div class="w-3/4 h-full bg-yellow-500 flex items-center justify-center">
        <div class="w-2/4 h-full bg-blue-500 flex items-start justify-center flex-col">
          <h2 class="ml-5">Datos del cliente:</h2>
          <div class="flex items-start justify-center flex-col ml-5">
            <label for="">Cliente</label>
            <input type="text" name="" id="">
          </div>
          <div class="flex items-start justify-center flex-col ml-5 mt-3">
            <label for="">Numero de dientes</label>
            <input type="text" name="" id="">
          </div>
        </div>
        <div class="w-2/4 h-full bg-blue-400 flex items-center justify-center flex-col">
          <div class="flex items-start justify-center flex-col ml-5">
            <a href="" class="w-64 bg-red-500 h-10 my-2 grid place-items-center rounded-lg decoration-transparent text-white">Ver notas del cliente</a>
            <a href="" class="w-64 bg-red-500 h-10 my-2 grid place-items-center rounded-lg decoration-transparent text-white">Ver notas del cliente</a>
          </div>
        </div>
        
      </div>

    </div>
  </section>
@endsection