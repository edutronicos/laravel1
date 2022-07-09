@extends('layouts.modelo')

@section('title', 'Ramais')

@section('content')

    <div class="text-center p-2">
            <h1>Relação de Ramais</h1>
    </div>
    <div class="row text-center mt-5">
        
            <div class="col-12">
                <a href="/branch/new" class="btn btn-primary">Novo Ramal</a>
            </div>
       
        
    </div>

    <div class="container mt-5">
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th><a class="a" href="/branch/order/{{'nome'}}">Nome</a></th>
                    <th><a href="/branch/order/{{'ramal'}}">Ramal</a></th>
                    <th><a href="/branch/order/{{'setor'}}">Setor</a></th>
                    <th>Ações</th>
                </tr>
            </thead>
            @foreach($item as $itens)
                <tr>
                    <td>{{ $itens->nome }}</td>
                    <td>{{ $itens->ramal }}</td>
                    <td>{{ $itens->setor }}</td>
                    <td><a href="/branch/delete/{{$itens->id}}">Deletar<i class="bi bi-trash"></i></a> | <a href="/branch/edit/{{$itens->id}}">Editar<i class="bi bi-pen"></i></a></td>
            @endforeach
                </tr>
        </table>
    </div>

@endsection