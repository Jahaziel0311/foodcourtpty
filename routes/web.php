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
Route::Post('/admin/restaurantes/create', [restauranteController::class, 'insert'])->name('admin.restautante.insert');
Route::get('/admin/restaurantes/config', [restauranteController::class, 'config'])->name('admin.restautante.config');
Route::Post('/admin/restaurantes/config/save', [restauranteController::class, 'configSave'])->name('admin.restautante.config.save');

Route::get('/{nombreRestaurante}', [Controller::class, 'paginaRestaurante'])->name('pagina.main.restaurante');



