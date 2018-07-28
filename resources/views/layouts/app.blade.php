<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- @yield('title') -->
    <meta name="description" content="ОПИСАНИЕ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="apple-touch-icon" href="{{ asset('icon.png') }}">
    <!-- Place favicon.ico in the root directory -->

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
                    Maker Platform
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
                    aria-expanded="false" aria-label="Открыть меню">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto mr-3">
                        <li class="nav-item px-1 active">
                            <a class="nav-link" href="{{ url('/') }}">Главная</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="{{ url('/projects') }}">Проекты</a>
                        </li>
                        <li class="nav-item px-1 dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('/contests') }}" id="navbarDropdownMenuContests" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Конкурсы
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuContests">
                                <a class="dropdown-item" href="{{ url('/contests#school') }}">Для школьников</a>
                                <a class="dropdown-item" href="{{ url('/contests#university') }}">Для студентов</a>
                            </div>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link disabled" href="{{ url('/files') }}">Материалы</a>
                        </li>
                    </ul>
                    <div class="form-inline btn-group" role="group">
                        <a class="btn btn-outline-light" type="button" href="{{ url('/register') }}">Регистрация</a>
                        <a class="btn btn-outline-light" type="button" href="{{ url('/login') }}">Вход</a>
                    </div>
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
                <br> Copyright © 2017
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