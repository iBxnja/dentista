<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dentista</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="absolute top-0 -z-10 h-full w-full bg-white"><div class="absolute bottom-auto left-auto right-0 top-0 h-[500px] w-[500px] -translate-x-[30%] translate-y-[20%] rounded-full bg-[rgba(173,109,244,0.5)] opacity-50 blur-[80px]"></div></div>

    @include('header')
    <main class="w-full h-full">
        @yield('contenido')
    </main>
    @include('footer')
</body>
</html>