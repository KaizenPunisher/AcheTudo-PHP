@extends('index')
@section('conteudo')
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
    @foreach($empresas as $empresas)
    <tr>
      <th scope="row">1</th>
      <td>{{ $empresas->nomeFantasia }}</td>
      <td>{{ $empresas->razaoSocial }}</td>
      <td>{{ $empresas->cnpj }}</td>
      <td>{{ $empresas->horarioDeAtendimento }}</td>
      <td>{{ $empresas->descricao }}</td>
      <td>{{ $empresas->servico_id }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection