<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
});


Route::fallback(function(){
    return "Erro ao localizar Rota";
});

//Route::get('/jogos', [JogosController::class, 'index']);