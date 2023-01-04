<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
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

Route::get('/', HomeController::class);

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.descricao');

Route::post('/produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');
