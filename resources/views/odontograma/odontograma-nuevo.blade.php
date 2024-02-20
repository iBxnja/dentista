@extends('plantilla')
@section('contenido')
  <section class="w-full h-full flex items-center justify-center flex-col">
    <div class="w-11/12 h-full flex items-center justify-center">
      <form action="" method="POST" class="w-full h-full flex items-center justify-center flex-col">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="id" value="{{ isset($odontograma) ? $odontograma->idOdontograma : '0' }}">

      <h2 class="my-4">Crear odontograma</h2>
      <div class="w-full h-full bg-neutral-200 flex items-center justify-center">
        <div class="w-1/4 h-96 grid place-items-center">
          <img src="{{ asset('imagenes/cliente.png') }}" alt="Cliente" class="cel:w-10 w-full ">
        </div>
        <div class="w-3/4  h-96 flex items-center justify-center flex-col">
          <div class="w-full h-full flex items-center justify-center">
            <div class="w-7/12 h-12 flex items-center justify-center">
              <label for="fk_idCliente" class="text-lg mr-3 cel:text-sm cel:text-center">Cliente asociado</label>
              <select name="fk_idCliente" id="fk_idCliente" class="w-8/12 text-center border-b-2 border-black bg-transparent">
                @foreach ($aCliente as $cliente)
                    <option value="{{ $cliente->idCliente }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                @endforeach
            </select>  
            </div>
            
            <div class="w-5/12 h-12 flex items-center justify-center">
              <label for="piezasPadecientes" class="text-lg mr-3 cel:text-sm cel:text-center">Piezas padecientes</label>
              <input type="text" name="piezasPadecientes" id="piezasPadecientes" class="w-4/12 text-center border-b-2 border-black bg-transparent">
            </div>
          </div>

          <div class="w-full h-full flex items-center justify-center">
            <div class="w-4/12 h-12 flex items-center justify-center">
              <label for="infantil" class="text-lg mr-3 cel:text-sm cel:text-center">Infantil</label>
              <input type="text" name="infantil" id="infantil" class="w-4/12 text-center border-b-2 border-black bg-transparent">
            </div>
            <div class="w-4/12 h-12 flex items-center justify-center">
              <label for="adulto" class="text-lg mr-3 cel:text-sm cel:text-center">Adulto</label>
              <input type="text" name="adulto" id="adulto" class="w-4/12 text-center border-b-2 border-black bg-transparent">
            </div>
            <div class="w-4/12 h-12 flex items-center justify-center">
              <label for="mayor" class="text-lg mr-3 cel:text-sm cel:text-center">Mayor</label>
              <input type="text" name="mayor" id="mayor" class="w-4/12 text-center border-b-2 border-black bg-transparent">
            </div>
          </div>

          <div class="w-full h-full flex items-center justify-center">
            <div class="w-7/12 h-12 flex items-center justify-center">
              <label for="doctora" class="text-lg mr-3 cel:text-sm cel:text-center">Doctora responsable</label>
              <input type="text" name="doctora" id="doctora" class="w-7/12 text-center border-b-2 border-black bg-transparent">
            </div>
            <div class="w-5/12 h-12 flex items-center justify-center">
              <label for="" class="text-lg mr-3 cel:text-sm cel:text-center">Otro campo</label>
              <input type="text" name="" id="" class="w-4/12 text-center border-b-2 border-black bg-transparent">
            </div>
          </div>

        </div>
      </div>

      <div class="w-full h-full bg-neutral-200 flex items-center justify-center my-5 py-10">
        <div class="w-1/4 h-96 flex items-center justify-center flex-col">
          <h4 class="text-lg">Informe general de dientes</h4>
          <div class="w-full h-full  flex items-center justify-center flex-col">
            
            <div class="w-full flex items-center justify-center mb-4 mt-4">
              <label for="cariado" class="w-2/4 text-center">Cariado</label>
              <input type="text" name="cariado" class="w-2/4 border-b-2 border-black bg-transparent">
            </div>
            
            <div class="w-full flex items-center justify-center mt-4 mb-4">
              <label for="obturado" class="w-2/4 text-center">Obturado</label>
              <input type="text" name="obturado" class="w-2/4 border-b-2 border-black bg-transparent">
            </div>
            
            <div class="w-full flex items-center justify-center mt-4 mb-4">
              <label for="perdida" class="w-2/4 text-center">Perdida por caries</label>
              <input type="text" name="perdida" class="w-2/4 border-b-2 border-black bg-transparent">
            </div>

            <div class="w-full flex items-center justify-center mt-4 mb-4">
              <label for="extraccion" class="w-2/4 text-center">Extraccion indicada</label>
              <input type="text" name="extraccion" class="w-2/4 border-b-2 border-black bg-transparent">
            </div>

            <div class="w-full flex items-center justify-center mt-4 mb-4">
              <label for="sano" class="w-2/4 text-center">Sano</label>
              <input type="text" name="sano" class="w-2/4 border-b-2 border-black bg-transparent">
            </div>

          </div>
        </div>

        <div class="ml-5 w-8/12 h-96 flex items-start justify-center flex-col">
          <h4 class="text-lg">Observaciones:</h4>
          <textarea name="observacion" id="observacion" class="resize-none h-full w-full overflow-x-hidden"></textarea>
        </div>

      </div>




      <button type="submit" name="btnAgregar" class="bg-purple-700 text-white w-56 h-14 my-2 rounded-2xl">Agregar</button>
    </form>
    </div>
  </section>
@endsection