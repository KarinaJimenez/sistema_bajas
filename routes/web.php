<?php

use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\CiclosController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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
    return redirect ('home');
});

//Ruta de inicio
Route::resource('home2', 'Home2Controller');

//Ruta de Alumnos
Route::resource('alumnos', 'AlumnosController');

//Ruta de informacion por Alumnos
Route::get('alumnos/{id}','AlumnosController@show')->name('alumnos.show');

//Ruta para filtrar los alumnos por Ciclo
Route::get('alumnos-ciclos/{ciclos_id}','Home2Controller@getAlumnosPorCiclos')->name('alumnos.ciclo');

//Ruta de carreras
Route::resource('carreras', 'CarrerasController');

//Ruta de Status
Route::resource('status', 'StatusController');

//Ruta de Ciclos
Route::resource('ciclos', 'CiclosController');

//Ruta de Usuarios
Route::resource('usuarios', 'UsuariosController');

//Ruta de Solicitudes
Route::resource('solicitud', 'SolicitudController');

Route::group(['middleware' => ['access-token']],function(){
    route::get('prueba-middleware',function(){
        return 'Acceso Permitido';
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
