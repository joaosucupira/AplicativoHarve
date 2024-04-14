<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);                           // LISTAR PRODUTOS
Route::get('/create', [ProductController::class, 'create']);                    // EXIBIR FORM CRIA PRODUTO
Route::post('/create', [ProductController::class, 'store'])->name('store');     // SALVAR PRODUTO
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('edit'); // EXIBIR FORM DE EDICAO
Route::put('/{product}/edit', [ProductController::class, 'update'])->name('update');             // ATUALIZAR PRODUTO
Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');              // DELETAR PRODUTO
Route::get('/search', [ProductController::class, 'search'])->name('search');



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

// Route::get('/', function () {
//     return view('welcome');
// });
