@extends('layouts.master')

@include('sweet::alert')


@section('content')

    @if (session('status'))
        <div class="alert alert-success">
        
            {{ session('status') }}
        </div>
    @endif




<div id="wrapper" >

<!-- Sidebar Armario Abierto-->
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

</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div class="container-fluid" id="page-content-wrapper">
    <div class="row">
        <div class="col-4 mh-100 p-5 columna-derecha">
                <h1>Simple Sidebar</h1>
                <p>Aqui podria poner un saludo , decir el tiempo que hace hoy, sacar un calendario donde el usuario pueda marcar sus eventos </p>

                <a href="#menu-toggle" class="btn  btn-toggle" id="menu-toggle">ABRE TU ARMARIO</a>
                <a href="{{ route('formropa') }}" class="btn  btn-toggle" id="menu-toggle">O ¿guardamos una prenda?</a>
        
        <!--DIV MOSTRAR TIEMPO-->

        <div class="row contenedor-tiempo">
    
            <div id="mainContent" class="col-xs-12 col-md-6 offset-md-3 text-center lucentDark">
                    
                    <h1 id="title">Hoy el tiempo en</h1>
                    <p id="aesthetic" class="lead expanded">Aesthetic weather:<br />
                        much better than uglicons.<br />
                        How minimalist.</p>
            <h3 id="city"></h3>
            <h2 id="temp"><span id="temperature"></span>&deg;<span id="tempUnit">F</span></h2>
            <h4 id="conditions">Please allow location access to view your weather.</h4>

            </div>

        </div>
 
        </div>

        <div class="col-8 mh-100 rejilla" >
                <div class="row">
                    <div class="col-6 caja-6-1 p-5 ">
                        <p>Aqui podria poner un saludo , 
                        decir el tiempo que hace hoy,
                         sacar un calendario donde el usuario pueda marcar sus eventos </p>
                    </div>
                    <div class="col-6 caja-6-2 p-5 ">
                        <p>Aqui podria poner un saludo , 
                        decir el tiempo que hace hoy,
                         sacar un calendario donde el usuario pueda marcar sus eventos </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 caja-4">
                    <img  src="{{ asset('img/prendas.png') }}" alt=" ">
                    </div>
                    <div class="col-4 caja-4-2 p-5 ">
                        <p>Aqui podria poner un saludo , 
                        decir el tiempo que hace hoy,
                         sacar un calendario donde el usuario pueda marcar sus eventos </p>
                    </div>
                   
                    <div class="col-4 caja-4">
                        <img  src="{{ asset('img/percharosa.png') }}" alt=" ">
                    </div>
                </div>
                <div class="row">
                        <div class="col-12 p-5 marcas">
                        <p>Enlaces a tiendas de ropa </p>
                    
                        </div>
                </div>
        </div> 
    </div>

</div>
</div>
<!-- /#wrapper -->

<!-- Menu Toggle Script -->

<script src="{{ asset('js/apiGeoWheather.js') }}"></script>

<!--TOGGLE BOTON ABRIR ARMARIO-->
<script>
$().ready(function(){

$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
})

});
</script>

@endsection
