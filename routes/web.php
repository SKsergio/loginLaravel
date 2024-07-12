<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('registrate', 'content.registrate')->name('registrate');
Route::view('login', 'content.login')->name('login');
Route::view('contenido', 'content.contenido')->name('contenido');

// Register route
Route::post('registro', [LoginController::class, 'register'])->name('Login.registrar');
Route::post('login', [LoginController::class, 'login'])->name('Login.login');
Route::get('logout', [LoginController::class, 'destroy'])->name('Login.destroy');