<?php

use App\Http\Controllers\Guest\PageController;
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


Route::get('/',[PageController::class, 'index'])->name('home');

Route::get('/chi-siamo', [PageController::class, 'about'] )->name('about');

Route::get('/elenco-libri', [PageController::class, 'libri'] )->name('libri');

Route::get('/dettaglio-libro/{id}', [PageController::class, 'bookDetail'] )->name('bookDetail');
