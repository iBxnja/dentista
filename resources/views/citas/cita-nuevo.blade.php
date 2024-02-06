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
    <form id="" action="" method="POST" enctype="multipart/form-data" class="w-11/12 h-full flex items-center justify-center flex-col mt-10">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="{{ isset($cita) ? $cita->idCita : '0' }}">
        <h2 class="text-4xl">Nueva Cita</h2>
        <div class="w-11/12 h-full flex items-center justify-center flex-col mt-10">
        <div class="w-full h-full  flex items-center justify-around">
            <div class="flex flex-col justify-center items-start w-5/12">
                <label for="lstCliente" class="text-xl mb-4">Cliente</label>
                <select name="fk_idCliente" id="lstCliente" class="w-full h-8 rounded-lg border-2 border-black">
                    @foreach ($aCliente as $cliente)
                        <option value="{{ $cliente->idCliente }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                    @endforeach
                </select>
            </div>            
            <div class="flex flex-col justify-center items-start w-5/12">
                <label for="txtDia" class="text-xl mb-4">Dia</label>
                <select name="txtDia" id="txtDia" class="w-full h-8 rounded-lg border-2 border-black">
                    <option>Lunes</option>
                    <option>Martes</option>
                    <option>Miercoles</option>
                    <option>Jueves</option>
                    <option>Viernes</option>
                    <option>Sabado</option>
                    <option>Domingo</option>
                </select>
            </div>
        </div>
        <div class="w-full h-full  flex items-center justify-around">
            <div class="flex flex-col justify-center items-start w-5/12">
                <label for="txtNumero" class="text-xl mb-4">Fecha</label>
                <select name="txtNumero" id="txtNumero" class="w-full h-8 rounded-lg border-2 border-black">
                    <?php 
                    
                    for($i = 1; $i < 32; $i++) {
                        echo '<option>' . $i . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="flex flex-col justify-center items-start w-5/12">
                <label for="" class="text-xl mb-4">Mes</label>
                <select name="txtMes" id="txtMes" class="w-full h-8 rounded-lg border-2 border-black">
                    <option>Enero</option>
                    <option>Febrero</option>
                    <option>Marzo</option>
                    <option>Junio</option>
                    <option>Julio</option>
                    <option>Agosto</option>
                    <option>Septiembre</option>
                    <option>Ocutubre</option>
                    <option>Noviembre</option>
                    <option>Diciembre</option>
                </select>
            </div>
        </div>
        <div class="w-full h-full  flex items-center justify-around">
            <div class="flex flex-col justify-center items-start w-5/12">
                <label for="lstHora" class="text-xl mb-4">Cliente</label>
                <select name="lstHora" id="lstHora" class="w-full h-8 rounded-lg border-2 border-black">
                    <?php 
                        for($i = 0; $i < 24; $i++) {
                            echo '<option disabled>----------------------------------------</option>';
                            echo '<option value="' . $i . ':00:00">' . $i . ':00 Hs' . '</option>';
                            echo '<option value="' . $i . ':15:00">' . $i . ':15 Hs' . '</option>';
                            echo '<option value="' . $i . ':30:00">' . $i . ':30 Hs' . '</option>';
                            echo '<option value="' . $i . ':45:00">' . $i . ':45 Hs' . '</option>';
                        }
                        ?>
                </select>
            </div>            
            <div class="flex flex-col justify-center items-start w-5/12">
                <label for="lstConsulta" class="text-xl mb-4">Consulta</label>
                <select name="lstConsulta" id="lstConsulta" class="w-full h-8 rounded-lg border-2 border-black">
                    <option>Primer consulta</option>
                    <option>Control</option>
                    <option>Retiro</option>
                    <option>Otro</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" name="btnAgregar" class="bg-purple-700 text-white w-64 h-20 mt-8 rounded-2xl">Agregar</button>
    </form>
</section>
@endsection