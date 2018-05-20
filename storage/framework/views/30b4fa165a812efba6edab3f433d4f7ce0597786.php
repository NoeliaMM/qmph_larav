<?php $__env->startSection('content'); ?>

<div class="container" >
    <div class="row" id="sidebar-wrapper">
        <div class="col-3 sidebar-derecha">
            <form id="filtro_prenda" class="">
                <h2>CATEGORÍAS</h2>
                <div>
                    <h3>Tu ropa por tipo</h3>
                    <ul class="lista_tipo">        
                    <!--listo por tipo-->
                    </ul>
                </div>  
                <div>
                    <h3>Tu ropa por estilo</h3>
                    <ul class="lista_estilo">        
                    <!--listo por estilos-->
                    </ul>
                </div>
                <div >    
                    <h3>Tu ropa por temporada</h3>
                    <ul class="lista_temp">        
                    <!--listo por temporada-->
                    </ul>
                </div>
                <input type="button" value="Mostrar" class="seleccion" >  
            </form>
        </div>
   

    <div class="col-9 sidebar-izquierda" >
        <div class="row">
            <div>
            <a href="" class="btn  btn-toggle" id="menu-toggleClose">CERRAR ARMARIO</a>
            </div>
            <p class="info">Aqui muestro la ropa</p>
            <!--aqui apareceran las fotos segun el select del listado-->
            <ul class="lista_seleccion">
                <li><img src="../imagenes_ropa/1/1524407177_camiseta1.jpg" alt="imagen" style="width:100px"></li>
                <!--<li class="foto" id="' + resp[i].id + '"><img src="'+resp[i].FotoPrenda + '"></li>-->
            </ul>
        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>