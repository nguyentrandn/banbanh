<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


Route::get('/index', [PageController::class,'getIndex']);
Route::get('/product_super/{id}', [PageController::class,'show'])-> name('product_super');

Route::get('/product.html', function () {
    return view('banhang.product_super');
});

