<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->

    <meta charset="UTF-8" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">  -->
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet" type="text/css"> 
    <link href="<?php echo e(asset('css/infinite-slider.css')); ?>" rel="stylesheet" type="text/css"> 
    <link href="<?php echo e(asset('css/tiempo.css')); ?>" rel="stylesheet" type="text/css"> 
    <link href="<?php echo e(asset('css/fontawesome-all.min.css')); ?>" rel="stylesheet" type="text/css">
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
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('img/logoQMPh_2.png')); ?>"> 
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
                <a class="nav-link estilo-link" href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?><span class="sr-only">(current)</span></a>
            </li>
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item"><a class="nav-link item-navegador estilo-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                <li class="nav-item"><a class="nav-link item-navegador estilo-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle estilo-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><?php echo e(__('Perfil')); ?></a>
                            <a class="dropdown-item" href="#"><?php echo e(__('Armario')); ?></a>
                            <a class="dropdown-item" href="#"><?php echo e(__('Redes Sociales')); ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
