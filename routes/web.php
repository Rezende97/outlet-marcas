<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastraUserController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'acesso'])->name('login.acesso');
Route::get('/cadastra', [CadastraUserController::class, 'index'])->name('cadastra.index');
Route::post('/cadastra', [CadastraUserController::class, 'cadastra'])->name('cadastra.cadastraUser');

Route::get('/document', function () {
    return view('welcome');
});
