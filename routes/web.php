<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Ruta página principal*/
Route::get('/', function () {
    return view('home', [
        'body_class' => 'fondo'
     ]);
 });


/*Ruta Armario, usuario ya registrado*/
Route::get('/armario', function () {
    return view('armario.index',[
        'body_class' => ''
     ]);
})->name('armario');

/*Ruta hacia formulario registro prendas, usuario ya registrado*/
Route::get('/formropa','RegistroRopaController@index')->name('formropa');



/*Ruta para enviar datos del formulario de registro de ropa*/
Route::post('/guardarropa','RegistroRopaController@store')->name('guardarropa');

/*Ruta para mostrar datos del formulario de registro de ropa*/
// Route::get('/ropaRegistrada','RegistroRopaController@store');


/*Ruta hacia rrss*/
Route::get('/rrss', function () {
    return view('rrss.index',[
        'body_class' => ''
     ]);
});




Auth::routes();

Route::get('logout', 'LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'users'],function(){

    Route::get('view/{id}',[
        'uses'=>'TestController@view',
        'as'=>'usersView'
    ]);

});

/*rutas hacia controladores Sweet Alert*/

Route::get('tipo/{type}', 'SweetController@notification');


// /*RUTAS PARA COMPROBACIONES BD*/
// Route::get('/estilos', function () {
//     //$estilos=DB::table('estilo')->get();
//     $estilos= App\Estilo::all();
// //return $estilos;
//  return view('armario.mostrarRopa', ['estilos'=> $estilos],
//             [
//                 'body_class' => ''
//             ]);
// });

Route::get('/perfil', 'ArmarioController@index')->name('perfil');
