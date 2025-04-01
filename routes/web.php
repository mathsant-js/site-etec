<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/cursos', [CursosController::class, 'index']);
Route::get('/departamentos', [DepartamentoController::class, 'index']);
Route::get('/contatos', [ContatoController::class, 'index']);
