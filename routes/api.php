<?php

use App\Http\Controllers\JogosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('cadastro/jogos',[JogosController::class, 'store']);

Route::get('pesquisa/jogo/{id}', [JogosController::class, 'pesquisaPorId']);

Route::get('buscaNome/jogo/', [JogosController::class, 'pesquisarPorNomeJogo']);

Route::get('retornarTodos/jogo', [JogosController::class, 'retornarTodosJogos']);

Route::put('atualizar/jogos', [JogosController::class, 'atualizarJogos']);

Route::get('excluir/jogos/{id}', [JogosController::class, 'excluirJogo']);







