<?php $__env->startSection('content'); ?>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-6 border">
            <h3>¿Qué vas a guardar en el armario?</h3>

<form action="<?php echo e(route('guardarropa')); ?>"  method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>


<!-- <div class="form-group">
    <label for="">Si, lo sabes,introduce el codigo de barras de la prenda</label>
    <input type="text" class="form-control" placeholder="codigo barras" name="codBarras" aria-describedby="basic-addon2">
    <div class="input-group-append">
    <span class="input-group-text" id="">Ej:1231225314528</span>
  </div>
</div> -->

<div class="form-group">
    <label for="foto">Sube la foto</label>
    <input type="file" class="form-control-file" id="image" name="image" accept="image.*">
    <br />
    <output id="list"></output>

</div>

<div class="form-group">
  <label class="my-1 mr-2" for="">Elige qué tipo de prenda es</label>
  <select class="custom-select my-1 mr-sm-2" id="" name="tipo">
    <option selected>Choose...</option>
     <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($tipo -> id); ?>" name="tipo"><?php echo e($tipo -> nombre); ?></option>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<div class="form-group">
    <label class="my-1 mr-2" for="">De qué estación es</label><br>
    <label class="radio-inline"><input type="radio" name="temporada" value="1">Verano</label>
    <label class="radio-inline"><input type="radio" name="temporada" value ="2">Invierno</label>
    <label class="radio-inline"><input type="radio" name="temporada" value="3" >Primavera</label>
    <label class="radio-inline"><input type="radio" name="temporada" value="4" >Otoño</label>
</div>

<div class="form-group">
   <label class="my-1 mr-2" for="">¿De qué estilo es?</label><br>
   
   <?php $__currentLoopData = $estilos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estilo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
        <label class="radio-inline"><input type="radio" name="estilo" value="<?php echo e($estilo -> id); ?>" ><?php echo e($estilo -> estilo); ?></label>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>


<div class="form-group">
  <label for="">Color</label>

  <input type="color" name="color">                           
    
</div>
    
<div class="form-group">
  <label class="my-1 mr-2" for="">Marca</label>
  <select class="custom-select my-1 mr-sm-2" id="marcas" name="marca">
    <option selected>Choose...</option>
    <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($marca -> id); ?>"  name="marca"><?php echo e($marca -> marca); ?></option>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>
    
 <input type="submit" value="Al armario!" >    
 <input type="reset" value="Borrar">
 </form>


</div>
</div>
</section> 


    
   
    
<script src="<?php echo e(asset('js/previewImagen.js')); ?>"></script>
    
 

    <!--PARA QUE APAREZCA DESCRIPCION EN BOCADILLOS ENCIMA DE LOS TIPOS DE PRENDAS  
    //https://getbootstrap.com/docs/4.0/components/tooltips/ -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>