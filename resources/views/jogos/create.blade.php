@extends('layouts.app') <!-- Digamos que o extends está herdando o arquivo app -->

@section('title','Criacao')

@section('content')
    <!-- TUDO OQUE EU FIZER AQUI DENTRO SERÁ REDENRIZADO LÁ NO LAYOUT -->
    
    <div class="container mt-5">
      <h1>Criação</h1>
      <hr>
      <form action="{{ route('jogos-store') }}" method="post"> <!-- O ACTION E ENVIADO PARA A NOSSA ROTA -->
        @csrf <!-- Codigo de verificação do proprio laravel para não dar falcificação do site -->
        <div class="form-group">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome...">
          </div>
          <br>
          <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria...">
          </div>
          <br>
          <div class="form-group">
            <label for="ano_criacao">Ano de criação:</label>
            <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o ano de criação...">
          </div>
          <br>
          <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" class="form-control" name="valor" placeholder="Digite o valor...">
          </div>
          <br>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>

@endsection