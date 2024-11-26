<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\cargosController;
use App\Http\Controllers\empleadosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//   return redirect('/login');
// });
Route::redirect('/', '/login');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/create', [HomeController::class, 'create']);

Route::view('/login', 'auth.login')->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/empleados', [empleadosController::class, 'index']);
Route::get('/cargos', [cargosController::class, 'index']);
