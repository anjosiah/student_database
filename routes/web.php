<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);
Route::get('/index', [UserController::class, 'index']);
Route::get('/tambah', [UserController::class, 'tambah']);
Route::post('/add', [UserController::class, 'add']);
Route::get('/ubah/{nim}', [UserController::class, 'ubah']);
Route::post('/edit/{nim}', [UserController::class, 'edit']);
Route::get('/delete/{nim}', [UserController::class, 'delete']);
