<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

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

Route::get('/', [TamuController::class, 'index'])->name('index');
Route::post('/store', [TamuController::class, 'store'])->name('store');
Route::get('/admin', [TamuController::class, 'admin'])->name('admin');
Route::delete('/admin/{id}', [TamuController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/edit/{id}', [TamuController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{id}', [TamuController::class, 'update'])->name('admin.update');


