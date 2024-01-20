@extends('plantilla')
@section('contenido')
    <section class="w-full h-full bg-blue-500">
        <div class="w-full h-28 flex items-center justify-center">
            <div class="cel:w-1/4 cel:h-28 bg-orange-500 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>                  
            </div>
            <div class="cel:w-3/4 cel:h-28 bg-green-500 flex items-start justify-center cel:flex-col">
                @if(auth()->check())
                <li class="overflow-auto cel:text-sm cel:ml-5">¡Hola {{ auth()->user()->name }}!.</li>
                <span class="cel:text-sm cel:ml-5">Hoy es un nuevo gran día.</span>
                @else
                    <span class="cel:ml-5 cel:text-sm">¡Hola invitado!.</span>
                    <a class="cel:ml-5 cel:mt-5 bg-blue-500 cel:w-24 cel:h-10 cel:grid cel:place-items-center cel:rounded-full cel:text-sm cursor-pointer" href="">Ingresar</a>
                @endif
            </div>
        </div>
    </section>
    <section class="w-full h-screen flex flex-col items-center justify-around">
        <div class="flex items-center justify-around w-full">
            <a href="#" class="cel:w-24 cel:h-24 cel:border-4 cel:border-black cel:bg-red-500 cel:flex cel:items-center cel:justify-center cel:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg></a>
            <a href="#" class="cel:w-24 cel:h-24 cel:border-4 cel:border-black cel:bg-red-500 cel:flex cel:items-center cel:justify-center cel:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg></a>
        </div>
        <div class="flex items-center justify-around w-full">
            <a href="#" class="cel:w-24 cel:h-24 cel:border-4 cel:border-black cel:bg-red-500 cel:flex cel:items-center cel:justify-center cel:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg></a>
            <a href="#" class="cel:w-24 cel:h-24 cel:border-4 cel:border-black cel:bg-red-500 cel:flex cel:items-center cel:justify-center cel:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg></a>
        </div>
        <div class="flex items-center justify-around w-full">
            <a href="#" class="cel:w-24 cel:h-24 cel:border-4 cel:border-black cel:bg-red-500 cel:flex cel:items-center cel:justify-center cel:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg></a>
            <a href="#" class="cel:w-24 cel:h-24 cel:border-4 cel:border-black cel:bg-red-500 cel:flex cel:items-center cel:justify-center cel:rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg></a>
        </div>
        
    </section>
@endsection