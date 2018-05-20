<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <meta charset="UTF-8" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">  -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('css/infinite-slider.css') }}" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('css/tiempo.css') }}" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- <script src="js/jquery-3.3.1.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <!-- <script src="js/popper.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
        <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
        <!-- <script src="js/main.js"></script> -->
        <!-- <script src="js/jquery.validate.min.js"></script> -->


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-fondo ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logoQMPh_2.png') }}"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link estilo-link" href="{{ url('/') }}">{{ __('Home') }}<span class="sr-only">(current)</span></a>
            </li>
                <!-- Authentication Links -->
                @guest
                <li class="nav-item"><a class="nav-link item-navegador estilo-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li class="nav-item"><a class="nav-link item-navegador estilo-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle estilo-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">{{ __('Perfil') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Armario') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Redes Sociales') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
