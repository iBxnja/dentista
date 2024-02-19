@extends('plantilla')
@section('contenido')
    <section class="w-full h-full flex flex-col items-center justify-around">
        @if(isset($mensaje))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-green-500 grid place-items-center mt-4 overflow-hidden">
            <h2 class="cel:text-sm text-sm text-white">{!! $mensaje !!}</h2>
        </div>
        @endif
        @if(isset($mensajeRojo))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-red-500 grid place-items-center mt-4 overflow-hidden">
            <h2 class="cel:text-sm text-white">{!! $mensajeRojo !!}</h2>
        </div>
        @endif
        @if(isset($error))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-red-500 grid place-items-center mt-4 overflow-hidden">
            <h2 class="cel:text-sm text-white">{!! $error !!}</h2>
        </div>
        @endif
        
        @if(isset($bienvenido))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-green-500 grid place-items-center mt-4 overflow-hidden">
            <h2 class="cel:text-base text-white">{{ session('bienvenido') }}</h2>
        </div>
        @endif
        @if(session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif
        <div class="w-full cel:h-full md:h-full lg:h-screen xl:h-screen 2xl:h-screen flex items-center justify-center cel:flex-col cel:text-center md:flex-col md:text-center">
            <div class="cel:w-11/12 w-6/12 flex cel:items-center items-start justify-center flex-col md:items-center">
                <h2 class="cel:ml-0 md:ml-0 ml-10 cel:text-6xl text-9xl cel:mt-5 text-teal-400 font-bold">Dentista</h2>
                <h2 class="cel:ml-0 md:ml-0 ml-12 cel:text-5xl text-7xl text-sky-500 cel:mt-0 lg:mt-5 xl:mt-5 2xl:mt-5 font-semibold">Clinica</h2>
                <p class="cel:ml-0 md:ml-0 ml-12 text-xl font-normal mt-5 italic text-sky-500">La odontología es una profesión que requiere de aquellos que tienen el sentido estético de un artista, la destreza manual de un cirujano, el conocimiento científico de un médico y la paciencia de un monje.</p>
                <a href="#arrancar" class="border-2 border-teal-600 cel:ml-0 md:ml-0 ml-12 mt-5 grid place-items-center w-48 h-14 bg-teal-400 text-white rounded-full lg:hover:bg-teal-500 lg:hover:text-lg xl:hover:bg-teal-500 xl:hover:text-lg 2xl:hover:bg-teal-500 2xl:hover:text-lg duration-100 ease-in-out decoration-transparent">Hora de trabajar</a>
            </div>
            <div class="cel:w-full w-5/12 grid place-items-center">
                <img src="{{ asset('imagenes/dentista-logo.png') }}" alt="Dentista Logo" class="cel:w-48 w-96">
            </div>
        </div>
    </section>
    <section id="arrancar" class="w-full h-full flex items-center flex-wrap justify-around text-white pb-10">
        <a href="{{route('cliente-listar')}}" class="lg:hover:bg-teal-500 xl:hover:bg-teal-500 2xl:hover:bg-teal-500 ease-in-out duration-100 border-4 border-teal-600 bg-teal-400 mt-20 ml-10 mr-10 w-80 h-48 text-xl rounded-xl grid place-items-center cel:w-48 cel:ml-5 cel:mr-5 md:w-72">
            <img src="{{ asset('imagenes/personal.png') }}" alt="" class="w-32">
        </a>
        <a href="{{route('notas-listar')}}" class="lg:hover:bg-teal-500 xl:hover:bg-teal-500 2xl:hover:bg-teal-500 ease-in-out duration-100 border-4 border-teal-600 bg-teal-400 mt-20 ml-10 mr-10 w-80 h-48 text-xl rounded-xl grid place-items-center cel:w-48 cel:ml-5 cel:mr-5 md:w-72">
            <img src="{{ asset('imagenes/notas.png') }}" alt="" class="w-32">           
        </a>
        <a href="{{route('imagenes')}}" class="lg:hover:bg-teal-500 xl:hover:bg-teal-500 2xl:hover:bg-teal-500 ease-in-out duration-100 border-4 border-teal-600 bg-teal-400 mt-20 ml-10 mr-10 w-80 h-48 text-xl rounded-xl grid place-items-center cel:w-48 cel:ml-5 cel:mr-5 md:w-72">
            <img src="{{ asset('imagenes/imagenes.png') }}" alt="" class="w-32">
          </a>
        <a href="{{route('cita-listar')}}" class="lg:hover:bg-teal-500 xl:hover:bg-teal-500 2xl:hover:bg-teal-500 ease-in-out duration-100 border-4 border-teal-600 bg-teal-400 mt-20 ml-10 mr-10 w-80 h-48 text-xl rounded-xl grid place-items-center cel:w-48 cel:ml-5 cel:mr-5 md:w-72">
            <img src="{{ asset('imagenes/calendario.png') }}" alt="" class="w-32">
        </a>
        <a href="{{route('informe-listar')}}" class="lg:hover:bg-teal-500 xl:hover:bg-teal-500 2xl:hover:bg-teal-500 ease-in-out duration-100 border-4 border-teal-600 bg-teal-400 mt-20 ml-10 mr-10 w-80 h-48 text-xl rounded-xl grid place-items-center cel:w-48 cel:ml-5 cel:mr-5 md:w-72">
            <img src="{{ asset('imagenes/informe.png') }}" alt="" class="w-32">
        </a>
        <a href="" class="lg:hover:bg-teal-500 xl:hover:bg-teal-500 2xl:hover:bg-teal-500 ease-in-out duration-100 border-4 border-teal-600 bg-teal-400 mt-20 ml-10 mr-10 w-80 h-48 text-xl rounded-xl grid place-items-center cel:w-48 cel:ml-5 cel:mr-5 md:w-72"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3/12 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
          </svg>
        </a>
    </section>
@endsection