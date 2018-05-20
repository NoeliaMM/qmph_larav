<?php

namespace App\Http\Controllers;

use App\Prenda;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class ArmarioController extends Controller
{

    public function index()
    {
            // Obtiene el objeto del Usuario Autenticado
        $user = Auth::user();
 
// Obtiene el ID del Usuario Autenticado
$id = Auth::id();
        $prueba=Prenda::where('usuario_id',$id);

        return view('perfilUsuario',['body_class' => ''])->with('id',$prueba);
    }

}
