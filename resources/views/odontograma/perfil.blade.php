<div class="w-full h-full bg-teal-300 shadow-neutral-300 shadow-md flex items-center justify-center">
    <div class="w-1/4 h-96 grid place-items-center">
      <img src="{{ asset('imagenes/cliente.png') }}" alt="Cliente" class="cel:w-10 w-10/12 ">
    </div>
    <div class="w-3/4  h-96 flex items-center justify-center flex-col">
      <div class="w-full h-full flex items-center justify-center">
        <div class="w-7/12 h-12 flex items-center justify-center">
          <label for="fk_idCliente" class="text-lg mr-3 cel:text-sm cel:text-center text-white">Cliente asociado</label>
          <select name="fk_idCliente" id="fk_idCliente" class="w-8/12 text-center border-b-2 border-white text-white focus:outline-none appearance-none bg-transparent">
            @foreach ($aCliente as $cliente)
                <option class="text-black" value="{{ $cliente->idCliente }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
            @endforeach
        </select>  
        </div>
        
        <div class="w-5/12 h-12 flex items-center justify-center">
          <label for="piezasPadecientes" class="text-lg mr-3 cel:text-sm cel:text-center text-white">Piezas padecientes</label>
          <input type="text" name="piezasPadecientes" id="piezasPadecientes" placeholder="Ej: 32" class="w-4/12 text-center border-b-2 border-white text-white focus:outline-none bg-transparent">
        </div>
      </div>

      <div class="w-full h-full flex items-center justify-center">
        <div class="w-4/12 h-12 flex items-center justify-center">
          <label for="infantil" class="text-lg mr-3 cel:text-sm cel:text-center text-white">Infantil</label>
          <input type="text" placeholder="Ej: Si/No" name="infantil" id="infantil" class="w-4/12 text-center border-b-2 border-white text-white focus:outline-none bg-transparent">
        </div>
        <div class="w-4/12 h-12 flex items-center justify-center">
          <label for="adulto" class="text-lg mr-3 cel:text-sm cel:text-center text-white">Adulto</label>
          <input type="text" placeholder="Ej: Si/No" name="adulto" id="adulto" class="w-4/12 text-center border-b-2 border-white text-white focus:outline-none bg-transparent">
        </div>
        <div class="w-4/12 h-12 flex items-center justify-center">
          <label for="mayor" class="text-lg mr-3 cel:text-sm cel:text-center text-white">Mayor</label>
          <input type="text" placeholder="Ej: Si/No" name="mayor" id="mayor" class="w-4/12 text-center border-b-2 border-white text-white focus:outline-none bg-transparent">
        </div>
      </div>

      <div class="w-full h-full flex items-center justify-center">
        <div class="w-7/12 h-12 flex items-center justify-center">
          <label for="doctora" class="text-lg mr-3 cel:text-sm cel:text-center text-white">Doctora responsable</label>
          <input type="text" placeholder="Ej: Carolina Dominguez" name="doctora" id="doctora" class="w-7/12 text-center border-b-2 border-white text-white focus:outline-none bg-transparent">
        </div>
        <div class="w-5/12 h-12 flex items-center justify-center">
          <label for="numeroOdontograma" class="text-lg mr-3 cel:text-sm cel:text-center text-white">N° Odontograma</label>
          <input type="text" name="numeroOdontograma" placeholder="Ej: 1" id="numeroOdontograma" class="w-4/12 text-center border-b-2 border-white text-white focus:outline-none bg-transparent">
        </div>
      </div>

    </div>
  </div>