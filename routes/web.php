<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::post('/createaccount', [UserController::class, 'createAccount'])->name('createAccount');
Route::post('/updateaccount', [UserController::class, 'updateAccount'])->name('updateAccount');
Route::post('/deleteaccount', [UserController::class, 'deleteAccount'])->name('deleteAccount');
