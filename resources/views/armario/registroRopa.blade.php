@extends('layouts.master')


@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-6 border">
            <h3>¿Qué vas a guardar en el armario?</h3>

<form action="{{ route('guardarropa') }}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }}

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
     @foreach($tipos as $tipo)
        <option value="{{$tipo -> id}}" name="tipo">{{$tipo -> nombre}}</option>
     @endforeach 
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
   
   @foreach($estilos as $estilo)     
        <label class="radio-inline"><input type="radio" name="estilo" value="{{$estilo -> id}}" >{{$estilo -> estilo}}</label>
     @endforeach 
</div>


<div class="form-group">
  <label for="">Color</label>

  <input type="color" name="color">                           
    
</div>
    
<div class="form-group">
  <label class="my-1 mr-2" for="">Marca</label>
  <select class="custom-select my-1 mr-sm-2" id="marcas" name="marca">
    <option selected>Choose...</option>
    @foreach($marcas as $marca)
        <option value="{{$marca -> id}}"  name="marca">{{$marca -> marca}}</option>
     @endforeach 
</div>
    
 <input type="submit" value="Al armario!" >    
 <input type="reset" value="Borrar">
 </form>


</div>
</div>
</section> 


    
   
    
<script src="{{ asset('js/previewImagen.js') }}"></script>
    
 

    <!--PARA QUE APAREZCA DESCRIPCION EN BOCADILLOS ENCIMA DE LOS TIPOS DE PRENDAS  
    //https://getbootstrap.com/docs/4.0/components/tooltips/ -->




@endsection