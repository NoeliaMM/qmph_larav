<?php $__env->startSection('content'); ?>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-6 border">
<h3>¿Qué vas a guardar en el armario?</h3>

<form action="<?php echo $root ?>armario/auth-registro-ropa.php"  method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="">Si, lo sabes,introduce el codigo de barras de la prenda</label>
    <input type="text" class="form-control" placeholder="codigo barras" name="codBarras" aria-describedby="basic-addon2">
    <div class="input-group-append">
    <span class="input-group-text" id="">Ej:1231225314528</span>
  </div>
</div>

<div class="form-group">
    <label for="">Sube la foto</label>
    <input type="file" class="form-control-file" id="foto" name="fotoprenda">
    <br />
    <output id="list"></output>

</div>

<div class="form-group">
  <label class="my-1 mr-2" for="">Elige una categoria</label>
  <select class="custom-select my-1 mr-sm-2" id="" name="categoria">
    <option selected>Choose...</option>
    <option value="1" name="categoria">Camiseta</option>
    <option value="2" name="categoria">Camisa</option>
    <option value="3" name="categoria">Pantalon</option>
    <option value="4" name="categoria">Vestido</option>
    <option value="5" name="categoria">Falda</option> 
    <option value="6" name="categoria">Jersey</option> 
    <option value="7" name="categoria">Blazer</option>
    <option value="8" name="categoria">Sudadera</option>   
  </select>
</div>

<div class="form-group">
    <label class="my-1 mr-2" for="">De qué estación es</label><br>
    <label class="radio-inline"><input type="radio" name="temporada" value="1">Verano</label>
    <label class="radio-inline"><input type="radio" name="temporada" value ="2">Invierno</label>
    <label class="radio-inline"><input type="radio" name="temporada" value="3" >Entretiempo</label>
</div>

<div class="form-group">
   <label class="my-1 mr-2" for="">¿De qué estilo es?</label><br>

    <label class="radio-inline"><input type="radio" name="estilo" value="1">Casual</label>
    <label class="radio-inline"><input type="radio" name="estilo" value ="2">Formal</label>
    <label class="radio-inline"><input type="radio" name="estilo" value="3" >Deportiva</label>
    <label class="radio-inline"><input type="radio" name="estilo" value="4" >Fiesta</label>

</div>


<div class="form-group">
  <label for="">Color</label>

  <input type="color" name="color">                           
    
</div>
    
<div class="form-group">
  <label for="">Marca</label>
  <select  class="form-control" id="marcas" name="marca"> </select>
  <option selected>Choose...</option>                            
    
</div>
    
 <input type="submit" value="Al armario!" >    
 <input type="reset" value="Borrar">
 </form>


</div>
</div>
</section> 

     <?php include("footer.php");?> 
    
   
    
    <script>
    
    $(document).ready(function(){
       $("#login").validate({
           rules:{
               email:
                       {
                        required: true,
                        minlength:10
                       },
               password: "required"
            },
            messages: {
                email:"Debes introducir un email,minimo 10 caracteres",
                password:"Debes introducir una constraseña"
            }
       }) 


    $.ajax({
        url: "../armario/marcas.php",
        method:"GET"})
        .done(function(resp){
          
           for (var i in resp){
               $('#marcas').append('<option value="' + resp[i].id +'" class="marca"  >' + resp[i].nombre );
        }
    
      });   


    //PARA QUE APAREZCA DESCRIPCION EN BOCADILLOS ENCIMA DE LOS TIPOS DE PRENDAS  
    //https://getbootstrap.com/docs/4.0/components/tooltips/ 



//Previsualizar imagen
function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="foto" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('foto').addEventListener('change', archivo, false);




    }
    );




    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>