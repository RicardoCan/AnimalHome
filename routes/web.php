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

Route::get('/', function () {
    return view('welcome');
});

//Vista Apis

Route::apiResource('apiMascota','apiMascotasController');
Route::apiResource('apiAdmin','apiAdministradoresController');
Route::apiResource('apiVacuna','apiVacunasController');
Route::apiResource('apiConfiguracion','apiConfiguracionesController');
Route::apiResource('apiMedicamento','apiMedicamentosController');
Route::apiResource('apiHospitalizacion','apiHospitalizacionesController');
Route::apiResource('apiEstetica','apiEsteticasController');
Route::apiResource('apiAdministrador','apiAdministradoresController');

//Vista Admin
Route::view('mascota','mascotas.mascotas');
Route::view('vacuna','vacunas.vacunas');
Route::view('configuracion','configuraciones.configuraciones');
Route::view('medicamento','medicamentos.medicamentos');
Route::view('hospitalizacion','hospitalizaciones.hospitalizaciones');
Route::view('estetica','esteticas.esteticas');
Route::view('administrador','administradores.administradores');


//Vista Usuario
Route::view('mascotausu','usuarios.mascotas');
Route::view('vacunausu','usuarios.vacunas');
Route::view('esteticausu','usuarios.esteticas');

//Vista Inicio
Route::view('inicio','inicios.inicios');

//Vista Error
Route::view('error','login.error');

//Vista Registros
Route::view('regis','registros.registros');


//Vista Logueo
Route::view('/','login.logueo');
Route::post('login','AccesoController@validar');
Route::get('logout','AccesoController@salir');

//PDF
Route::get('imprimir','apiEsteticasController@imprimir');