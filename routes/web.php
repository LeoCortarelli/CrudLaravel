<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
}); */



/* Todas as rotas que nós criarmos dentro desse grupo de rotas terão esse mesmo prefix que e jogos */
Route::prefix('jogos')->group(function(){  // Criando um grupo de rotas

    /* Essa rota se refere a listagem pegando do controller na função index */
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');

    /* Essa rota se refere a cricao pegando do controller na função create */
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');

    /* Criando uma rota para salvar as informações no banco */
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');

    /* Criando uma rota que leva para a edição */
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]')->name('jogos-edit'); // Where garante que o id tenha apenas numeros

    /* Criando uma rota para a atualização do bando de dados */
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]')->name('jogos-update');
});


Route::fallback(function(){
    return "Erro ao localizar Rota";
});

//Route::get('/jogos', [JogosController::class, 'index']);