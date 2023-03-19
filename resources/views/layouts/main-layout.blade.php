<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app() -> getLocate() ) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset(css/app.css) }}">
    <link rel="stylesheet" href="{{ asset(css/styles.css) }}">
    <script scr="{{ asset('js/app.js)}}"></script>
</head>
<body>
    <div class="container-fluid">
        @yield('content-area')
    </div>
</body>
</html>