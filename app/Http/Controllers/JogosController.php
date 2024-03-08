<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller{
    
    public function index(){
        $jogos = Jogo::all(); // assim ele vai pegar todos os campos e registros da tabela jogos
        //dd($jogos);
        return view('jogos.index',['jogos' => $jogos]);
    }

    public function create(){
        return view('jogos.create');
    }

    public function store(Request $request){
        Jogo::create($request->all()); // Insere no banco todas as informações vindas do request
        return redirect()->route('jogos-index'); // Redireciona para a listagem
    }
}
