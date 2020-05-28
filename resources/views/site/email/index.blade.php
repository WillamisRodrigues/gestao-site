@extends('layouts.site.app-site')
@section('conteudo')
<div class="card bg-success">
  <div class="card-header">
    Contato Instituto Votorantim
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <p> Nome Completo {{ $data['nome'] }}.</p>
      <footer class="blockquote-footer">
          <p> Telefone : <strong> {{ $data['telefone'] }} </strong> </p>
          <p> Email : <strong> {{ $data['email'] }} </strong> </p>
          <p> Municipio : <strong> {{ $data['municipio'] }} </strong> </p>
          <p> Mensagem : <strong> {{ $data['mensagem'] }} </strong> </p>
      </footer>
    </blockquote>
  </div>
</div>
@endsection