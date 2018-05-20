<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 

        <meta charset="UTF-8" />  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">  -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"> 
        <link href="{{ asset('css/infinite-slider.css') }}" rel="stylesheet" type="text/css"> 
        <link href="{{ asset('css/tiempo.css') }}" rel="stylesheet" type="text/css"> 
        <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

            <!-- <script src="js/jquery-3.3.1.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
            <!-- <script src="js/popper.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="{{ asset('js/sweetalert.js') }}"></script>
            <!-- <script src="js/bootstrap.min.js"></script> -->
            <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
            <!-- <script src="js/main.js"></script> -->
            <!-- <script src="js/jquery.validate.min.js"></script> -->

    </head>
    
    <body class="{{ $body_class }}">
        @include('partials.navbar')
        @yield('content')
    </body>

 
</html>