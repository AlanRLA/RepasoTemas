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

//Create AUTOR
Route::get('regisAut/create',[controllerDB::class, 'create'])->name('regisAut.create');

//Store AUTOR
Route::post('regisAut',[controllerDB::class, 'store'])->name('regisAut.store');

//Consul AUTOR
Route::get('regisAut',[controllerDB::class, 'index'])->name('regisAut.index');

//Edit AUTOR
Route::get('autor/{id}/edit',[controllerDB::class, 'edit'])->name('autor.edit');

//Update AUTOR
Route::put('autor/{id}', [controllerDB::class, 'update'])->name('autor.update');

//Delete AUTOR
Route::get('autor/{id}/show', [controllerDB::class, 'show'])->name('autor.show');

//Destroy AUTOR
Route::delete('autor/{id}',[controllerDB::class, 'destroy'])->name('autor.destroy');

// L I B R O

//Create LIBRO
Route::get('regisLib/create',[controllerDB::class, 'createLibro'])->name('regisLib.create');

//Store LIBRO
Route::post('regisLib',[controllerDB::class, 'storeLibro'])->name('regisLib.store');

//Consul LIBRO
Route::get('libros',[controllerDB::class, 'libros'])->name('libros.show');

//Edit LIBRO
Route::get('libro/{id}/edit',[controllerDB::class, 'editLibro'])->name('libro.edit');

//Update LIBRO
Route::put('libro/{id}', [controllerDB::class, 'updateLibro'])->name('libro.update');

//Delete LIBRO
Route::get('libro/{id}/show', [controllerDB::class, 'showLibro'])->name('libro.show');

//Destroy LIBRO
Route::delete('libro/{id}',[controllerDB::class, 'destroyLibro'])->name('libro.destroy');






Route::get('/', [Controller_Views::class, 'showPrincipal']);

Route::get('Principal',[Controller_Views::class, 'showPrincipal'])->name('main');

Route::get('Registro',[Controller_Views::class, 'showRegistro'])->name('form');

Route::post('GuardarLibro',[Controller_Views::class, 'ProcesarLibro'])->name('save');

//Autor
Route::get('RegistroAutor',[Controller_Views::class, 'showRegistroAutor'])->name('formAutor');

Route::post('GuardarAutor',[Controller_Views::class, 'ProcesarAutor'])->name('saveAutor');