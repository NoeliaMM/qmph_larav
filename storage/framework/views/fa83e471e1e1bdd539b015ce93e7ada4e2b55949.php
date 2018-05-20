<?php $__env->startSection('title', 'QueMePongo'); ?>

<?php $__env->startSection('content'); ?>

<div class="container container-index">
    <div class="contenido-index">
        <h1> ¿Qué me pongo  hoy? </h1>

        <a class="boton-login" href="<?php echo e(route('register')); ?>">Regístrate</a>

        <a class="boton-login" href="<?php echo e(route('login')); ?>">Entra a tu armario</a>

    </div>  
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>