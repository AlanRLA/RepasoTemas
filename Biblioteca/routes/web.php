<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Views;

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

Route::get('/', [Controller_Views::class, 'showPrincipal']);

Route::get('Principal',[Controller_Views::class, 'showPrincipal'])->name('main');

Route::get('Registro',[Controller_Views::class, 'showRegistro'])->name('form');

Route::post('GuardarLibro',[Controller_Views::class, 'ProcesarLibro'])->name('save');