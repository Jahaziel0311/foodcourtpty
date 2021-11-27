<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\loginController;
use App\Http\Controllers\restauranteController;

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


//LOGIN



Route::get('/admin/login', [loginController::class, 'index'])->name('login.index');
Route::Post('/admin/login', [loginController::class, 'login'])->name('login.login');


//INDEX-DASHBOARD
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.index');




//RESTAURANTE
Route::get('/admin/restaurantes', [restauranteController::class, 'index'])->name('admin.restaurante.index');



Route::get('/{nombreRestaurante}', [Controller::class, 'paginaRestaurante'])->name('pagina.main.restaurante');



