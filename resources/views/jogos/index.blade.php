@extends('layouts.app') <!-- Digamos que o extends está herdando o arquivo app -->

@section('title','Listagem')

@section('content')
    <!-- TUDO OQUE EU FIZER AQUI DENTRO SERÁ REDENRIZADO LÁ NO LAYOUT -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-10">
        <h1>Listagem</h1>
      </div>
      <div class="col-sm-2"><a href="{{ route('jogos-create') }}" class="btn btn-success">Novo</a></div>
    </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ano de criação</th>
            <th scope="col">Valor</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
          @foreach($jogos as $jogo)
          <tr>
            <th>{{ $jogo->id }}</th>
            <th>{{ $jogo->nome }}</th>
            <th>{{ $jogo->categoria }}</th>
            <th>{{ $jogo->ano_criacao }}</th>
            <th>{{ $jogo->valor }}</th>
            <th>
              <a href="{{ route('jogos-edit', ['id' => $jogo->id]) }}" class="btn btn-primary"> <!-- Redireciona passando o id do jogo por parametro -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>  
              </a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection