<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    <!-- Styles -->
    <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        .my-top {
            position: absolute;
            top: 20%;
        }
    </style>
</head>

<body>
    <!--  -->
    <div class="d-flex justify-content-center">
        <div class="card my-top mb-5">
            <div class="card-header h1">
                <i class="fas fa-exchange-alt text-primary"></i> Mget.online
            </div>
            <div class="card-body">
                <p class="card-text">
                    @if ($exception->getMessage() == 'mt')
                        Проект находится на стадии запуска и бета тестирования<br>До запуска проекта осталось...
                    @elseif ($exception->getMessage() == 'update')
                        Мы подготовили для вас много нового функционала<br> Сейчас идет обновление системы<br> Это займет всего пару минут...
                    @else
                        Мы подготовили для вас много нового функционала<br> Сейчас идет обновление системы<br> Это займет всего пару минут...
                    @endif
                </p>
            </div>

            @if ($exception->getMessage() == 'mt')
            <div class="card-footer">
                <script src="//megatimer.ru/get/bd29079399ba0be439af9bcb97916841.js"></script>
            </div>
            @endif

        </div>
    </div>
    {{-- Insert metrika only on production system --}}
    @if(config('app.env') == 'production')
        @include('metrika.yandex')
    @endif
</body>

</html>