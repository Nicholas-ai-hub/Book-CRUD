<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatusController;



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



Route::get('/', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create']);
Route::post('/create', [BookController::class, 'store']);
Route::get('/edit/{book}', [BookController::class, 'edit']);
Route::post('/edit/{book}', [BookController::class, 'update']);
Route::delete('/delete/{book}', [BookController::class, 'delete']);
Route::get('/search', [BookController::class, 'search']);


Route::get('/status', [StatusController::class, 'index']);
Route::get('/add-status', [StatusController::class, 'create']);
Route::post('/add-status', [StatusController::class, 'store']);

Route::get('/home', [HomeController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
