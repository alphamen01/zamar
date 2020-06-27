<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// -- Dashboard --//
Route::get('/dashboard', 'Dashboard\DashboardController');

// -- Ubigeo --//
Route::get('departamento', 'Ubigeo\DepartamentoController@combo');
Route::get('provincia/{departamento}', 'Ubigeo\ProvinciaController@combo');
Route::get('distrito/{departamento}/{provincia}', 'Ubigeo\DistritoController@combo');

// -- Institucion --//
Route::resource('institucion', 'Institucion\InstitucionController');
Route::get('comboinstitucion', 'Institucion\InstitucionController@combo');
// -- Sucursal --//
Route::resource('sucursal', 'Sucursal\SucursalController');

// -- Diagnostico Alumno --//
Route::resource('diagnostico', 'Diagnostico\DiagnosticoController');

// -- Estudiante --//
Route::get('comboestudiante', 'Estudiante\EstudianteController@combo');

// -- Tutor --//
Route::get('combotutor', 'Tutor\TutorController@combo');

// -- Alumno Familiar --//
Route::resource('alumnofamiliar', 'AlumnoFamiliar\AlumnoFamiliarController');
