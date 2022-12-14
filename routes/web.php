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

//Datos de ordenes
Route::get('/', [OrderController::class,'show1']);
//Datos detalles de orden por id
Route::get('/orderDetail/{id}', [DetailOrderController::class, 'show1']);
//Datos productos por id
Route::get('/product/{id}', [ProductController::class, 'show1']);
//Actualizar el tiempo de espera de una orden especifica
Route::post('/orderUpdateTime', [OrderController::class, 'updateTime']);