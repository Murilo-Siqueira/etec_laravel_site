<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Rotas para as páginas estáticas da ETEC
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/cursos', [PagesController::class, 'cursos'])->name('cursos');
Route::get('/sobre', [PagesController::class, 'sobre'])->name('sobre');
Route::get('/contato', [PagesController::class, 'contato'])->name('contato');
Route::post('/contato', [PagesController::class, 'enviarContato'])->name('enviar-contato');
