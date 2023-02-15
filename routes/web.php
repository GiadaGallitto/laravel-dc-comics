<?php

use App\Http\Controllers\Admin\ComicController;
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

Route::get('/', [ComicController::class, 'index'])->name('comics.index');

Route::get('/create', [ComicController::class, 'create'])->name('comics.create');

Route::get('/{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::post('/', [ComicController::class, 'store'])->name('comics.store');

Route::get('/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

Route::put('/{comic}', [ComicController::class, 'update'])->name('comics.update');

Route::delete('/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');