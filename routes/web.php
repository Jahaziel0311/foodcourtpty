<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\loginController;
use App\Http\Controllers\restauranteController;
use App\Http\Controllers\pantallaController;

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
Route::get('/admin/logout', [loginController::class, 'logout'])->name('login.logout');

//INDEX-DASHBOARD
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.index');




//RESTAURANTE
Route::get('/admin/restaurantes', [restauranteController::class, 'index'])->name('admin.restaurante.index');
Route::Post('/admin/restaurantes/create', [restauranteController::class, 'insert'])->name('admin.restautante.insert');
Route::get('/admin/restaurantes/config', [restauranteController::class, 'config'])->name('admin.restautante.config');
Route::Post('/admin/restaurantes/config/save', [restauranteController::class, 'configSave'])->name('admin.restautante.config.save');
Route::get('/admin/restaurantes/config2', [restauranteController::class, 'config2'])->name('admin.restautante.config2');
Route::Post('/admin/restaurantes/config/save2', [restauranteController::class, 'configSave2'])->name('admin.restautante.config.save2');

//PANTALLA
Route::get('/admin/pantallas', [pantallaController::class, 'index'])->name('admin.pantalla.index');
Route::get('/admin/pantallas/create', [pantallaController::class, 'create'])->name('admin.pantalla.create');
Route::post('/admin/pantallas/create', [pantallaController::class, 'insert'])->name("admin.pantalla.insert") ;
Route::post('/admin/pantallas', [pantallaController::class, 'update'])->name("admin.pantalla.update") ;
Route::get("/medico/delete/{id}", [pantallaController::class, 'delete'])->name("admin.pantalla.delete");
Route::get("/admin/pantalla/asignar", [pantallaController::class, 'asignarPantalla'])->name("admin.pantalla.asignarPantalla");
Route::get("/admin/pantalla/asignar/{id}", [pantallaController::class, 'asignarPantallaXId'])->name("admin.pantalla.asignarPantalla");
Route::Post("/admin/pantalla/asignar/save", [pantallaController::class, 'asignarPantallaSave'])->name("admin.pantalla.asignar.save");
Route::get("/admin/pantallas/ordenarMenu", [pantallaController::class, 'ordenar'])->name("admin.pantallas.ordenar.menu");
Route::Post("/admin/pantallas/ordenarMenu", [pantallaController::class, 'ordenarSave'])->name("admin.pantallas.ordenar.save");

Route::get('/{nombreRestaurante}', [Controller::class, 'paginaRestaurante'])->name('pagina.main.restaurante');


