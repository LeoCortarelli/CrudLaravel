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

}
