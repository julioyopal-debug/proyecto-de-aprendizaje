<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\OperacionesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|//https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// primer parametro URL,segundo parametro controlador,tercer parametro funcion
Route::get('/pokemon', [PokemonController::class, 'index']);
Route::get('/sumas', [OperacionesController::class, 'suma']);
Route::get('/restas', [OperacionesController::class, 'resta']);
Route::get('/multiplicaciones', [OperacionesController::class, 'multiplicacion']);
Route::get('/divisiones', [OperacionesController::class, 'division']);
Route::get('/corre-gato', [GatoController::class, 'corre']);
Route::get('gato/registrar  ', [GatoController::class, 'registrar']);
Route::get('usuario/login', [LoginController::class, 'login']);
Route::get('persona/datos', [PersonaController::class, 'datos']);
Route::get('persona/registro', [LoginController::class, 'registrarUsuario']);
Route::get('persona/olvidar-contrasena', [LoginController::class, 'olvidarContrasena']);
Route::get('persona/recuperar-contrasena', [LoginController::class, 'resetearContrasena']);

