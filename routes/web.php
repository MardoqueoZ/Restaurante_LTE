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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('mesas', App\Http\Controllers\MesaController::class);


Route::resource('menus', App\Http\Controllers\MenuController::class);


Route::resource('pedidos', App\Http\Controllers\PedidoController::class);


Route::resource('reservas', App\Http\Controllers\ReservaController::class);
