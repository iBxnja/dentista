<header class="w-full h-20 bg-teal-400 flex items-center justify-between">
    <button id="menuAbrir" class="text-white sm:hidden absolute cel:left-0 top-5 left-5 lg:hidden xl:hidden 2xl:hidden">
        <svg class="h-10 w-10 cel:ml-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="6" x2="20" y2="6" />  <line x1="4" y1="12" x2="20" y2="12" />  <line x1="4" y1="18" x2="20" y2="18" /></svg>
    </button>
    <nav id="navbar" class="hidden flex cel:flex-col sm:flex-col md:flex-col items-center justify-center w-full h-full gap-12 lg:flex xl:flex 2xl:flex">
        <button id="menuCerrar" class="text-white hidden sm:block absolute top-5 left-5 cel:text-4xl lg:hidden xl:hidden 2xl:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>  
        </button>     

        <a href="/inicio" class="lg:ml-5 lg:mr-5 xl:ml-5 xl:mr-5 2xl:mr-5 2xl:ml-5 text-white cel:text-lg lg:font-thin xl:font-thin 2xl:font-thin decoration-transparent">Inicio</a>
        <a href="/inicio/cliente-listar" class="lg:ml-5 lg:mr-5 xl:ml-5 xl:mr-5 2xl:mr-5 2xl:ml-5 text-white cel:text-lg lg:font-thin xl:font-thin 2xl:font-thin decoration-transparent">Cliente</a>
        <a href="/inicio/notas-listar" class="lg:ml-5 lg:mr-5 xl:ml-5 xl:mr-5 2xl:mr-5 2xl:ml-5 text-white cel:text-lg lg:font-thin xl:font-thin 2xl:font-thin decoration-transparent">Notas</a>
        <a href="/inicio/imagenes-listar" class="lg:ml-5 lg:mr-5 xl:ml-5 xl:mr-5 2xl:mr-5 2xl:ml-5 text-white cel:text-lg lg:font-thin xl:font-thin 2xl:font-thin decoration-transparent">Imagenes</a>
        <a href="/inicio/cita-listar" class="lg:ml-5 lg:mr-5 xl:ml-5 xl:mr-5 2xl:mr-5 2xl:ml-5 text-white cel:text-lg lg:font-thin xl:font-thin 2xl:font-thin decoration-transparent">Citas</a>
        <a href="/inicio/informe-listar" class="lg:ml-5 lg:mr-5 xl:ml-5 xl:mr-5 2xl:mr-5 2xl:ml-5 text-white cel:text-lg lg:font-thin xl:font-thin 2xl:font-thin decoration-transparent">Informe</a>
        @if(auth()->check())
        <li class="list-none lg:ml-5 lg:mr-5 xl:ml-5 xl:mr-5 2xl:mr-5 2xl:ml-5 text-white cel:text-lg lg:font-thin xl:font-thin 2xl:font-thin ">Hola {{ auth()->user()->name }}</li>
        <li class="list-none mr-6 ml-6 text-2xl"><a href="{{route('login.destroy')}}">Salir</a></li>
        @endif
    </nav>
</header>