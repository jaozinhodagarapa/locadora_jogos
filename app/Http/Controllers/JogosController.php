<?php

namespace App\Http\Controllers;

use App\Http\Requests\JogosFormRequest;
use App\Models\Jogos;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function store(JogosFormRequest $request){
        $jogos = Jogos::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'descricao' => $request->descricao,
            'classificacao' => $request->classificacao,
            'plataformas' => $request->plataforma,
            'desenvolvedor' => $request->desenvolvedor,
            'distribuidora' => $request->distribuidora,
        ]);
        return response()->json([
            "sucess" => true,
            "message" => "Registro de Jogos bem-sucedido",
            "data"=> $jogos
        ]);
    }

    public function jogosNome(Request $request){
        $jogos = Jogos::where('nome', 'like', '%' . $request->nome . '%')->get();
        if(count($jogos) > 0){
            return response()->json([
                'status' => true,
                'data' => $jogos
            ]);
        }
        return response()->Json([
            'status' => false,
            'message' => "Não há resultados para pesquisa"
        ]);
    }
    public function jogosExcluir($id){
        $jogos = Jogos::find($id);
        if(!isset($jogos)){
            return response()->json([
                'status' => false,
                'message' => 'Jogo não encontrado'
            ]);
        }
        $jogos->delete();
        return response()->json([
            'status' => true,
            'message' => 'Jogo deletado com êxito'
        ]);

    }
}