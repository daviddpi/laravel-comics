<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dc Page | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header', ["header_link" => config('header_navbar')])

    <main>
        @yield('contenuto')
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>