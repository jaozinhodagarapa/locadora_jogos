<?php

use App\Http\Controllers\JogosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//* Jogos
Route::post('register/games', [JogosController::class, 'cadastroJogos']);

Route::get('search/game/{id}', [JogosController::class, 'pesquisaPorIdJogos']);

Route::post('searchGame/byname', [JogosController::class, 'pesquisarPorNomeJogo']);

Route::get('return/all/games', [JogosController::class, 'retornarTodosJogos']);

Route::put('update/games', [JogosController::class, 'atualizarJogos']);

Route::delete('delete/games/{id}', [JogosController::class, 'excluirJogos']);






