<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', [App\Http\Controllers\BladeController::class, 'index'])->name('home');
Route::get('/inputBarang', [App\Http\Controllers\BladeController::class, 'inputBarang'])->name('inputBarang');
Route::get('/updateBarang', [App\Http\Controllers\BladeController::class, 'updateBarang'])->name('updateBarang');
Route::get('/deleteBarang', [App\Http\Controllers\BladeController::class, 'deleteBarang'])->name('deleteBarang');
Route::get('/viewBarang', [App\Http\Controllers\BladeController::class, 'viewBarang'])->name('viewBarang');
