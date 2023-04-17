<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class,'main'])->name('site.index');

Route::get('/about', [AboutUsController::class,'about'])->name('site.sobrenos');

Route::get('/contact', [ContactController::class,'contact'])->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('app')->group(function () {
    Route::get('/clients', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/supplier', [SuplierController::class, 'index'])->name('app.fornecedores');
    Route::get('/products', function(){return 'Produtos';})->name('app  .produtos');
});


Route::fallback(function(){
    echo 'A página acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para página principal';
});


