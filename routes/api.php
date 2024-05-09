<?php

use App\Http\Controllers\JogosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//* Jogos
Route::post('cadastro/jogos', [JogosController::class, 'cadastroJogos']);

Route::get('pesquisa/jogo/{id}', [JogosController::class, 'pesquisaPorIdJogos']);

Route::post('buscaNome/jogo', [JogosController::class, 'pesquisarPorNomeJogo']);

Route::get('retornarTodos/jogos', [JogosController::class, 'retornarTodosJogos']);

Route::put('atualizar/jogos', [JogosController::class, 'atualizarJogos']);

Route::delete('excluir/jogos/{id}', [JogosController::class, 'excluirJogos']);






