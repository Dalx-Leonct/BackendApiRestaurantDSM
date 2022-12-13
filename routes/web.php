<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
//    return view('administrador.home');
//});

//ruta de pruebas
//Route::get('/vacio', [OrderController::class,'show1']);

//datos de ordenes
Route::get('/', [OrderController::class,'show1']);
//datos detalles de orden
Route::get('/orderDetail/{id}', [DetailOrderController::class, 'show1']);
//datos productos por id
Route::get('/product/{id}', [ProductController::class, 'show1']);
