@extends('layouts.app') <!-- Digamos que o extends está herdando o arquivo app -->

@section('title','Listagem')

@section('content')
    <!-- TUDO OQUE EU FIZER AQUI DENTRO SERÁ REDENRIZADO LÁ NO LAYOUT -->
    <h1>Listagem</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Ano de criação</th>
      <th scope="col">Valor</th>
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
    </tr>
    @endforeach
  </tbody>
</table>
@endsection