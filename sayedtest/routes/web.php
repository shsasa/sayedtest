<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;


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


Route::get('/products', [productController::class, 'index']);

Route::get('/product/add', [productController::class, 'create']);

Route::get('/product/{product}/edit', [productController::class, 'edit']);

Route::put('/product/{product}', [productController::class, 'update']);

Route::delete('/product/{product}', [productController::class, 'destroy']);

Route::post('/product', [productController::class, 'store']);

Route::get('/product/{product}', [productController::class, 'show']);


