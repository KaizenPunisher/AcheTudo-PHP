@extends('index')
@section('conteudo')

<div class='container'>
    {{ $servicoId }}
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome Fantasia</th>
      <th scope="col">Razão Social</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Hr Atendimento</th>
      <th scope="col">Descrição</th>
      <th scope="col">Serviço</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empresa as $empresa)
    <tr>
      <th scope="row">{{ $empresa->id }}</th>
      <td>{{ $empresa->nome_fantasia }}</td>
      <td>{{ $empresa->razao_social }}</td>
      <td>{{ $empresa->cnpj }}</td>
      <td>{{ $empresa->horario_de_atendimento }}</td>
      <td>{{ $empresa->descricao }}</td>
      <td>{{ $empresa->servico_id }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection