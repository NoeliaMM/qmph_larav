<?php $__env->startSection('content'); ?>

<div>
AQUI VA COMPARTO CON MIS REDES SOCIALES

<li>
$estilo = json_decode($estilo, true);
    <?php $__currentLoopData = $estilos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estilo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h3><?php echo e($estilo -> id); ?></h3>
        <p><?php echo e($estilo -> estilo); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
</li>  
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>