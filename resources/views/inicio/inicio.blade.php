@extends('plantilla')
@section('contenido')
    <section class="w-full h-full">
        <div class="w-full h-28 flex items-center justify-center bg-purple-500">
            <div class="cel:w-1/4 md:w-1/4 md:h-28 lg:w-1/4 lg:h-28 xl:w-1/4 xl:h-28 cel:h-28 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:w-20 md:h-20 w-16 h-16 lg:w-24 lg:h-24 xl:w-24 xl:h-24 text-purple-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>                  
            </div>
            <div class="cel:w-3/4 md:w-3/4 md:h-28 cel:h-28 lg:w-3/4 lg:h-28 xl:w-3/4 xl:h-28 lg:items-start lg:justify-center lg:flex-col xl:items-start xl:justify-center xl:flex-col flex items-start justify-center cel:flex-col md:flex-col">
                @if(auth()->check())
                <li class="overflow-auto cel:text-sm cel:ml-5 lg:ml-5 xl:ml-5 text-purple-100">¡Hola {{ auth()->user()->name }}!.</li>
                <span class="cel:text-sm cel:ml-5 lg:ml-5 xl:ml-5 text-white">Hoy es un nuevo gran día.</span>
                @else
                    <span class="cel:ml-5 cel:text-sm lg:ml-5 lg:text-xl xl:text-xl text-purple-100">¡Hola invitado!.</span>
                    <a class="cel:ml-5 cel:mt-5 bg-purple-700 text-white cel:w-24 cel:h-10 md:w-24 md:h-10 md:mt-5 lg:ml-5 lg:w-24 lg:h-10 lg:mt-3 xl:w-24 xl:h-10 xl:mt-3 xl:ml-0 grid place-items-center rounded-full cel:text-sm cursor-pointer" href="">Ingresar</a>
                @endif
            </div>
        </div>
    </section>
    <section class="w-full h-screen flex flex-col items-center justify-around">
        <div class="flex items-center justify-around w-full">
            <a href="{{route('cliente-listar')}}" class="cel:flex-col cel:w-24 cel:h-24 cel:border-4 border-purple-500 bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-fuchsia-900 via-purple-300 to-purple-900 cel:flex cel:items-center cel:justify-center cel:rounded-2xl
            md:flex-col md:w-72 md:h-36 md:border-4 md:flex md:items-center md:justify-center md:rounded-2xl
            lg:flex-col lg:w-80 lg:h-40 lg:border-4 lg:flex lg:items-center lg:justify-center lg:rounded-2xl
            xl:flex-col xl:w-80 xl:h-40 xl:border-4 xl:flex xl:items-center xl:justify-center xl:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8 lg:w-16 lg:h-16 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                <span class="lg:text-xl xl:text-xl">Clientes</span>
            </a>
            <a href="#" class="cel:flex-col cel:w-24 cel:h-24 cel:border-4 border-purple-500 bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-fuchsia-900 via-purple-300 to-purple-900 cel:flex cel:items-center cel:justify-center cel:rounded-2xl
            md:flex-col md:w-72 md:h-36 md:border-4 md:flex md:items-center md:justify-center md:rounded-2xl
            lg:flex-col lg:w-80 lg:h-40 lg:border-4 lg:flex lg:items-center lg:justify-center lg:rounded-2xl
            xl:flex-col xl:w-80 xl:h-40 xl:border-4 xl:flex xl:items-center xl:justify-center xl:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8 lg:w-16 lg:h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>              
                <span class="lg:text-xl xl:text-xl">Notas</span>
            </a>
        </div>
        <div class="flex items-center justify-around w-full">
            <a href="#" class="cel:flex-col cel:w-24 cel:h-24 cel:border-4 border-purple-500 bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-fuchsia-900 via-purple-300 to-purple-900 cel:flex cel:items-center cel:justify-center cel:rounded-2xl
            md:flex-col md:w-72 md:h-36 md:border-4 md:flex md:items-center md:justify-center md:rounded-2xl
            lg:flex-col lg:w-80 lg:h-40 lg:border-4 lg:flex lg:items-center lg:justify-center lg:rounded-2xl
            xl:flex-col xl:w-80 xl:h-40 xl:border-4 xl:flex xl:items-center xl:justify-center xl:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8 lg:w-16 lg:h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>              
                <span class="lg:text-xl xl:text-xl">Imagenes</span>
            </a>
            <a href="#" class="cel:flex-col cel:w-24 cel:h-24 cel:border-4 border-purple-500 bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-fuchsia-900 via-purple-300 to-purple-900 cel:flex cel:items-center cel:justify-center cel:rounded-2xl
            md:flex-col md:w-72 md:h-36 md:border-4 md:flex md:items-center md:justify-center md:rounded-2xl
            lg:flex-col lg:w-80 lg:h-40 lg:border-4 lg:flex lg:items-center lg:justify-center lg:rounded-2xl
            xl:flex-col xl:w-80 xl:h-40 xl:border-4 xl:flex xl:items-center xl:justify-center xl:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8 lg:w-16 lg:h-16 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                <span class="lg:text-xl xl:text-xl">Citas</span>
            </a>
        </div>
        <div class="flex items-center justify-around w-full">
            <a href="#" class="cel:flex-col cel:w-24 cel:h-24 cel:border-4 border-purple-500 bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-fuchsia-900 via-purple-300 to-purple-900 cel:flex cel:items-center cel:justify-center cel:rounded-2xl
            md:flex-col md:w-72 md:h-36 md:border-4 md:flex md:items-center md:justify-center md:rounded-2xl
            lg:flex-col lg:w-80 lg:h-40 lg:border-4 lg:flex lg:items-center lg:justify-center lg:rounded-2xl
            xl:flex-col xl:w-80 xl:h-40 xl:border-4 xl:flex xl:items-center xl:justify-center xl:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:w-12 md:h-12 w-8 h-8 lg:w-16 lg:h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>              
                <span class="lg:text-xl xl:text-xl">Otra cosa</span>
            </a>
            
        </div>
    </section>
@endsection