<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    /**
     * Run the migrations.
     * Criação de tabelas 
     * @return void
     */
    public function up(){
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',55);
            $table->string('categoria',55);
            $table->year('ano_criacao');
            $table->double('valor',8,2); // colocando o valor com 8 caracteres e 2 casas decimais
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     * Deletando tabelas
     * @return void
     */
    public function down(){
        Schema::dropIfExists('jogos');
    }

};
