<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dentista</title>

    @vite('resources/css/app.css')
    <!-- FullCalendar JS -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.10/index.global.min.js'></script>


    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd"
        });
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">

    <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}


    <!-- Tu script de agenda.js -->
    <script src="{{ asset('js/agenda.js') }}"></script>

    <!-- Bootstrap JS (al final del body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <!-- Otros scripts que puedas necesitar -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')
</head>
<body>
    <div class="fixed inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem]"></div>
    
    @include('header')

    <main class="w-full h-full">
        @yield('contenido')
    </main>

    @include('footer')
</body>
</html>
