<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrativasController;

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

Route::get('/',[AdministrativasController::class, 'login']);
Route::post('recibirlogin',[AdministrativasController::class, 'recibirlogin']);
Route::get('mostrar',[AdministrativasController::class, 'mostrar']);
Route::delete('borrar/{id}',[AdministrativasController::class, 'borrar']);
Route::get('/crear',[AdministrativasController::class, 'crear']);
Route::post('/recibir',[AdministrativasController::class, 'recibir']);
Route::get('/actualizar/{id}',[AdministrativasController::class, 'actualizar']);
Route::put('/modificar/{id}',[AdministrativasController::class, 'modificar']);
