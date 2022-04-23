<?php

use Illuminate\Support\Facades\Route;
$route = "App\Http\Controllers";
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

Route::get('/', function () {
    return view('welcome');
});

//RUTAS ASOCIADAS A CONTROLADORES
Route::get('/index/{listado?}', "$route\PeliculaController@index");
// Route::get('/detalle/{contexto?}',[
//     'uses' => "$route\PeliculaController@detalle",
//     'as' => 'detalle.pelicula'
// ]);

Route::get('/detalle/{year?}',"$route\PeliculaController@detalle") 
    ->name('detalles.pelicula')
    ->middleware('testanio');

Route::get('/redirigir',"$route\PeliculaController@redirigir");

Route::get('/formulario', "$route\PeliculaController@formulario");
Route::post('/recibir', "$route\PeliculaController@recibir");

//RUTA FRUTAS
Route::group(['prefix' => 'frutas'],function(){
    $route = "App\Http\Controllers";
    Route::get('index',"$route\FrutaController@index");
    Route::get('detail/{id}',"$route\FrutaController@detail");
    Route::get('create',"$route\FrutaController@create");
    Route::post('save',"$route\FrutaController@save");
    Route::get('delete/{id}',"$route\FrutaController@delete");
    Route::get('edit/{id}',"$route\FrutaController@edit");
    Route::post('update',"$route\FrutaController@update");
});


/*
GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
*/

/*
Route::get('/mostrar-fecha',function(){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha',array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}/{year?}',function($titulo='No hay una pelicula seleccionada', $year=2020){
    return view('pelicula',array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas',function(){
    $titulo = "Listado de peliculas";
    $listado = array('Batman', 'superman', 'spiderman');
    return view('peliculas.listado',array(
        'titulo' => $titulo,
        'listado' => $listado
    ));
});

Route::get('/cartelera',function(){
    $cartelera = "Cartelera del dia";
    $fecha = date('d-m-Y');
    $peliculas = "Las peliculas del día son";
    $listaditos = array('Kung fu panda', 'Rey León', 'Alvin y las ardillas', 'Piratas del caribe');
    return view('peliculas.cartelera',array(
        'cartelera' => $cartelera,
        'fecha' => $fecha,
        'listaditos' => $listaditos,
        'peliculas' => $peliculas
    ));
});

Route::get('/pagina-generica',function(){
    return view('pagina');
});
*/

