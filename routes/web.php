<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesController;
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

Route::get('/homes', [HomesController::class, 'index'])->name('homes');
Route::get('/homes/create',[HomesController::class, 'create'])->name('homes.create');
Route::post('/homes',[HomesController::class, 'store'])->name('homes');
Route::post('/homes/fetch_more_homes',[HomesController::class, 'fetch_more_homes'])->name('homes.fetch_more_homes');
Route::get('/homes/{id}',[HomesController::class, 'show'])->name('homes');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
