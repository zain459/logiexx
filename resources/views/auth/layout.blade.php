<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Logixs</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
</head>

<body class="text-center">
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
