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
            return view('jogos.edit', ['jogos' => $jogos]); // A hora que ele clicar no botão redireciona para o view de edição
        }else{
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];
        Jogo::where('id',$id)->update($data);   // (Atualizando)
        // A tag where que tem que ser procurar pelo mesmo ID que recebeu por parametro 

        return redirect()->route('jogos-index'); // Retornando para a listagem
    }
}
