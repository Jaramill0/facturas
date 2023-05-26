<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\FacturasItemController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidosItemController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('articulos', ArticuloController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('facturas', FacturaController::class);
Route::resource('facturas-items', FacturasItemController::class);
Route::resource('pedidos-items', PedidosItemController::class);
