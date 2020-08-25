<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('images/favicon/site.webmanifest') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $description ?? ''}}">

    <title>{{ $title ?? '' }}</title>

    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    <!-- Styles -->
    <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        @include('def.navbar')

        @yield('main_banner')
        <div class="container-xl">
            @yield('content')
        </div>

        @include('def.footer')
        @include('def.company')
    </div>

    {{-- Insert metrika only on production system --}}
    @if(config('app.env') == 'production')
        @include('metrika.yandex')
    @endif

</body>

</html>