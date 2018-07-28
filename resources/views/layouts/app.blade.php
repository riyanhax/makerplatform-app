<!doctype html>
<html class="bg-dark no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description', 'Описание')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Page title') | {{ config('app.name', 'App Name') }}</title>

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="apple-touch-icon" href="{{ asset('icon.png') }}">
    <!-- favicon.ico placed in the root directory -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/vendor/normalize-8.0.0.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
    <div class="bg-warning text-dark py-3 text-center">Вы используете <strong>устаревший</strong> браузер Internet Explorer.<br>Пожалуйста, <a href="https://browsehappy.com/">обновите браузер</a>.</div>
    <![endif]-->

    <header id="header">

        <nav id="navbar" class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="fa-stack fa-lg">
                        <i class="fas fa-circle fa-stack-2x text-secondary"></i>
                        <i class="fas fa-atom fa-stack-1x"></i>
                    </span>
                    {{ config('app.name', 'App Name') }}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
                    aria-expanded="false" aria-label="Открыть меню ({{ __('Toggle navigation') }})">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto mr-3">
                        <li class="nav-item px-1 {{ (Route::currentRouteName() == 'home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Главная</a>
                        </li>
                        <li class="nav-item px-1 {{ (Route::currentRouteName() == 'projects') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('projects') }}">Проекты</a>
                        </li>
                        <li class="nav-item px-1 {{ (Route::currentRouteName() == 'contests') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('contests') }}">Конкурсы</a>
                        </li>
                        <li class="nav-item px-1 {{ (Route::currentRouteName() == 'files') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('files') }}">Материалы</a>
                        </li>
                        @auth
                        <li class="nav-item px-1 dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('/profile') }}" id="navbarDropdownProfile" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuContests">
                                <a class="dropdown-item" href="{{ url('/contests#school') }}">Настройки</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endauth
                    </ul>
                    @guest
                    <div class="form-inline btn-group" role="group">
                        <a class="btn {{ (Route::currentRouteName() == 'register') ? 'btn-secondary' : 'btn-outline-light' }}" type="button" href="{{ url('/register') }}">Регистрация</a>
                        <a class="btn {{ (Route::currentRouteName() == 'login') ? 'btn-secondary' : 'btn-outline-light' }}" type="button" href="{{ url('/login') }}">Вход</a>
                    </div>
                    @endguest
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer id="footer" class="jumbotron jumbotron-fluid text-white bg-dark my-0 py-3">
        <div class="container">
            <ul class="nav justify-content-center pb-4 text-white">
                <li class="nav-item">
                    <a class="nav-link text-info active" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#">Link 3</a>
                </li>
            </ul>

            <div class="text-center">
                Made with
                <i class="fas fa-heart text-danger">
                    <span class="sr-only">love</span>
                </i>
                <br> Copyright © 2018
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.scrollTo-2.1.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper-1.14.3.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap-4.1.3.min.js') }}"></script>

    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>