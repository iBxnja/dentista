<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body> 
    @if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif
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
    <div class="absolute top-0 -z-10 h-full w-full bg-white"><div class="absolute bottom-auto left-auto right-0 top-0 h-[500px] w-[500px] -translate-x-[30%] translate-y-[20%] rounded-full bg-[rgba(173,109,244,0.5)] opacity-50 blur-[80px]"></div></div>
    <main class="w-full h-screen flex items-center justify-center">
        <section class="w-full h-screen grid place-items-center">
            <div class="
            cel:w-5/6
            md:h-11/12
            w-4/6 h-5/6 flex flex-col items-center justify-center ">
                <form action="{{ route('login.store') }}" method="POST" class="
                cel:w-11/12
                w-2/4 h-4/5 flex items-center justify-center flex-col">
                    @csrf
                    <h2 class="text-5xl font-bold text-purple-500 mb-5
                    cel:text-3xl
                    md:text-4xl
                    ">Login</h2>
                    <div class="
                    cel:m-0
                    md:m-3
                    m-5 flex flex-col items-center justify-center w-5/6">
                        <label for="email" class="text-xl cel:text-base">Email</label>
                        <input type="email" class="
                        cel:h-8
                        text-center border-2 border-gray-200 rounded-md bg-white w-full
                         placeholder-gray-900 p-2 my-2 focus:bg-white text-xs" placeholder="Email"
                        id="email" name="email">
                    </div>
                    <div class="
                    cel:m-0
                    md:m-3
                    m-5 flex flex-col items-center justify-center w-5/6">
                        <label for="password" class="text-xl cel:text-base">Contraseña</label>
                        <input type="password" class="
                        cel:h-8
                        text-center border-2 border-gray-200 rounded-md bg-white w-full
                         placeholder-gray-900 p-2 my-2 focus:bg-white text-xs" placeholder="Contraseña"
                        id="password" name="password">
                    </div>
                    <button type="submit" class="
                    cel:w-32 cel:text-sm
                    md:w-28 md:py-1
                    rounded-md bg-purple-500 w-40 text-lg
                    text-white font-semibold p-2 my-3">Entrar</button>
                    <div class="
                    cel:m-0 text-center
                    md:mb-2
                    mb-5">
                        <span class="text-sm">¿Todavia no tienes cuenta? </span><a href="/register/register" class="text-green-900 cel:text-sm">Registrate aca.</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
    
</body>
</html>