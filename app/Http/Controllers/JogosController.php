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

    public function edit($id){
        $jogos = Jogo::where('id',$id)->first(); // Where para pegar o mesmo id passado por parametro , e o first para pegar o primeiro
        /* Caso o ID não exista */
        if(!empty($jogos)){ // se não estiver vazia a variavel
            return view('jogos.edit', ['jogos' => $jogos]);
        }else{
            return redirect()->route('jogos-index');
        }
    }
}
