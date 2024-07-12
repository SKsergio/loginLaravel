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


//Now we use middleware to protect the access to routes
Route::view('registrate', 'content.registrate')->middleware('guest')->name('registrate');
Route::view('login', 'content.login')->middleware('guest')->name('login');//If you don't log in, you won't be able to access these routes

Route::view('contenido', 'content.contenido')->middleware('auth')->name('contenido'); //methos auth check if we have an active session

// Register route
Route::post('registro', [LoginController::class, 'register'])->name('Login.registrar');
Route::post('login', [LoginController::class, 'login'])->name('Login.login');
Route::get('logout', [LoginController::class, 'destroy'])->name('Login.destroy');