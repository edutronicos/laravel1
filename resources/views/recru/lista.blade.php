@extends('layouts.modelo')

@section('title', 'Consulta')

@section('content')
    <div class="text-center p-2">
        <h1>Cadastro de Funcionários</h1>
        
    </div>

    <div class="container mt-5">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                    <th scope="col">Contrato</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Local</th>
                    <th scope="col">Quem Cadastrou</th>
                    <th scope="col">ID</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
        @foreach($cadastr as $cadastro)
            <tr>
                <td>{{$cadastro->contrato}}</th>
                <td>{{$cadastro->cliente}}</td>
                <td>{{$cadastro->nome_candidato}}</td>
                <td>{{$cadastro->local_unidade}}</td>
                <td>{{$cadastro->name}}</td>
                <td>{{ $cadastro->id }}</td>
                <td><a href="/recru/cadastro/{{ $cadastro->id }}" class="btn btn-primary">Abrir</a></td>
        @endforeach
            </tr>
            </table>
    </div>
@endsection