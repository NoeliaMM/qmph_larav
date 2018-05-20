<?php $__env->startSection('content'); ?>

<div class="container">
PARA MOSTRAR DATOS


<li>

    <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h3><?php echo e($tipo -> id); ?></h3>
        <p><?php echo e($tipo -> nombre); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 



</li> 



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>