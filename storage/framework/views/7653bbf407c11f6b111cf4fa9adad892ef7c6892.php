<?php $__env->startSection('title', 'QueMePongo'); ?>

<?php $__env->startSection('content'); ?>

        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

<div class="container container-index">
    <div class="contenido-index">
        <h1> ¿Qué me pongo  hoy? </h1>
       
        <a class="button" href="<?php echo e(route('login')); ?>"></a>
            <input type="submit" value="Entra aqui si ya tienes tu armario" class="boton-login"/>
        </a>
        
        <a class="button" href="<?php echo e(route('register')); ?>"></a>
            <input type="submit" value="Eres nuevo/a" class="boton-registro" />
        </a>
    </div>  
</div>


<!--PRUEBA SWEET ALERT-->
        <div class="container">
                <h1 class="text-center">SweetAlert en Laravel 5.5</h1>
                </div>
        
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
                <?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>