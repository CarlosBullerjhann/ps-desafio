<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="shortcut icon" href="{{ asset('site/img/faviconl.ico') }}" type="image/x-icon">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('site/css/site.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.site.header')

    @include('components.alerts')

    @yield('conteudo')

    @include('layouts.site.footer')

    <script src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>
