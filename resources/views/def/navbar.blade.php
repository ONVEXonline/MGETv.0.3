<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="h2 font-weight-bold text-muted">
                {{ config('app.name', 'MGET') }}
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">


                @if( Request::is('general-info/kak-eto-rabotaet') )
                <li class="nav-item">
                    <a class="nav-link lead font-weight-bold active" href="{{ url('general-info/kak-eto-rabotaet') }}">Как это работает</a>
                </li>
                @else
                <li class="nav-item lead font-weight-normal">
                    <a class="nav-link lead font-weight-normal" href="{{ url('general-info/kak-eto-rabotaet') }}">Как это работает</a>
                </li>
                @endif

                @if( Route::current()->getName() == 'projects' )
                <li class="nav-item">
                    <a class="nav-link lead font-weight-bold active" href="{{ route('projects') }}">Проекты</a>
                </li>
                @else
                <li class="nav-item lead font-weight-normal">
                    <a class="nav-link" href="{{ route('projects') }}">Проекты</a>
                </li>
                @endif

                @if( Route::current()->getName() == 'activities' )
                <li class="nav-item">
                    <a class="nav-link lead font-weight-bold active" href="{{ route('activities') }}">Новости</a>
                </li>
                @else
                <li class="nav-item lead font-weight-normal">
                    <a class="nav-link" href="{{ route('activities') }}">
                        Новости
                    </a>
                </li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->

            <!-- <div class="dropdown mr-3">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ App::isLocale('ru') ? 'Ru' : 'En' }}
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 10px !important;">
                    <a class="dropdown-item {{ App::isLocale('ru') ? 'active' : '' }}" href="{{ route('set_locale', ['locale' => 'ru']) }}">Ru</a>
                    <a class="dropdown-item {{ App::isLocale('en') ? 'active' : '' }}" href="{{ route('set_locale', ['locale' => 'en']) }}">En</a>
                </div>
            </div> -->
            <!--  -->
            @guest
            <div class="btn-group" role="group">
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">
                    {{ __('messages.login') }}
                </a>
                @if (Route::has('register'))
                <a class="btn btn-secondary" href="{{ route('register') }}" role="button">
                    {{ __('messages.registration') }}
                </a>
                @endif
            </div>
            @else

            @endguest
        </div>
    </div>
</nav>