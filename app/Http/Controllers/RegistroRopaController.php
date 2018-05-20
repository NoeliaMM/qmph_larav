<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Tipo;
use App\Estilo;
use App\Marca;
use App\Prenda;

class RegistroRopaController extends Controller
{
    /*método que nos muestra el formulario para registrar ropa*/
    public function index()
    {
        $tipos=Tipo::all();
        $estilos=Estilo::all();
        $marcas=Marca::all();
        return view('armario.registroRopa',['tipos'=>$tipos,'estilos'=>$estilos,'marcas'=>$marcas],
        [
            'body_class' => ''
         ]);
    }


    /*método que nos va a guardar la ropa en bbdd*/
     public function store(Request $request){

        $prenda = new Prenda;
        dd($request->all());
         // // Obtiene el objeto del Usuario Autenticado
        $user = Auth::user();
        // // // Obtiene el ID del Usuario Autenticado
         $id = Auth::id();

        $foto = $request->input('image');
    //     $file = $request->file('image');
    //    $path = "C:\xampp\htdocs\qmph_larav\public\img";
    //    //$file->storeAs($path, $request->file('event_image')->getClientOriginalName()); De esta forma las imagenes se guardan en storage/public
    //    $request->file('image')->move($path,$file->getClientOriginalName()); //Así conseguimos que se guarde en la ruta que nosotros prefiramos, siempre y cuando tengas los permisos adecuados
    //    $Events->image = $file->getClientOriginalName();
        
        $prenda->$tipo = $request->input('tipo');

        $prenda->$temporada = $request->input('temporada');

        $prenda->$estilo = $request->input('estilo');

        $prenda->$marca=$request->input('marca');

          //$prenda=DB::select("call usp_AltaRopaArmario($id,$marca,$tipo,$estilo,$temporada,$color,$foto)");
        $prenda->save();

        return 'Store';
        // p_usuario_id BIGINT    
        // , p_marca_id BIGINT
        // , p_tipo_id INT
        // , p_estilo_id TINYINT UNSIGNED
        // , p_temporada_id TINYINT UNSIGNED
        // , p_color VARCHAR(100)
        // , p_foto
        //  }

      


     }
    

}

