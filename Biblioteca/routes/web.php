<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Views;
use App\Http\Controllers\controllerDB;

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

// RUOTES CONTROLLER DB

//Create
Route::get('regisAut/create',[controllerDB::class, 'create'])->name('regisAut.create');

//Store
Route::post('regisAut',[controllerDB::class, 'store'])->name('regisAut.store');

//Consul
Route::get('regisAut',[controllerDB::class, 'index'])->name('regisAut.index');


Route::get('/', [Controller_Views::class, 'showPrincipal']);

Route::get('Principal',[Controller_Views::class, 'showPrincipal'])->name('main');

Route::get('Registro',[Controller_Views::class, 'showRegistro'])->name('form');

Route::post('GuardarLibro',[Controller_Views::class, 'ProcesarLibro'])->name('save');

//Autor
Route::get('RegistroAutor',[Controller_Views::class, 'showRegistroAutor'])->name('formAutor');

Route::post('GuardarAutor',[Controller_Views::class, 'ProcesarAutor'])->name('saveAutor');