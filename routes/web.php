<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos');
Route::get('/contatos', [ContatoController::class, 'index'])->name('contatos');
