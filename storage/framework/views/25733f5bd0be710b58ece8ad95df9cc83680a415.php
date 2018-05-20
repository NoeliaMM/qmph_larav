<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
            <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> 

        <meta charset="UTF-8" />  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">  -->
        <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet" type="text/css"> 
        <link href="<?php echo e(asset('css/infinite-slider.css')); ?>" rel="stylesheet" type="text/css"> 
        <link href="<?php echo e(asset('css/tiempo.css')); ?>" rel="stylesheet" type="text/css"> 
        <link href="<?php echo e(asset('css/fontawesome-all.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('css/sweetalert.css')); ?>" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

            <!-- <script src="js/jquery-3.3.1.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
            <!-- <script src="js/popper.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="<?php echo e(asset('js/sweetalert.js')); ?>"></script>
            <!-- <script src="js/bootstrap.min.js"></script> -->
            <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
            <!-- <script src="js/main.js"></script> -->
            <!-- <script src="js/jquery.validate.min.js"></script> -->

    </head>
    
    <body class="<?php echo e($body_class); ?>">
        <?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </body>

 
</html>