@extends('layouts.app') <!-- Digamos que o extends está herdando o arquivo app -->

@section('title','Edição')

@section('content')
    <!-- TUDO OQUE EU FIZER AQUI DENTRO SERÁ REDENRIZADO LÁ NO LAYOUT -->
    
    <div class="container mt-5">
      <h1>Edição</h1>
      <hr>
      <form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="post"> <!-- O ACTION E ENVIADO PARA A NOSSA ROTA -->
        @csrf <!-- Codigo de verificação do proprio laravel para não dar falcificação do site -->
        @method('PUT')
        <div class="form-group">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite o nome...">
          </div>
          <br>
          <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite uma categoria...">
          </div>
          <br>
          <div class="form-group">
            <label for="ano_criacao">Ano de criação:</label>
            <input type="number" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="Digite o ano de criação...">
          </div>
          <br>
          <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite o valor...">
          </div>
          <br>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
          </div>
        </div>
      </form>
    </div>

@endsection