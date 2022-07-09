
@extends('layouts.modelo')

@section('title', 'Fotos')

@section('content')

    <div class="text-center p-2">
            <h1>Lembranças -h</h1>
    </div>
    <div class="row text-center mt-5">
        
            <div class="col-12">
                <a href="/events/new" class="btn btn-primary">Enviar Fotos</a>
            </div>
       
        
    </div>

    <div class="container mt-5">
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th><a class="a" href="/ordenar/{{'evento'}}">Evento</a></th>
                    <th><a href="/ordenar/{{'local'}}">Local</a></th>
                    <th><a href="/ordenar/{{'data_evento'}}">Data</a></th>
                    <th>Ações</th>
                </tr>
            </thead>
            @foreach($item as $itens)
                <tr>
                    <td><a href="/events/view2/{{$itens->id}}">{{ $itens->nome_evento }}</a></td>
                    <td>{{ $itens->local_evento }}</td>
                    <td>{{ $itens->data_evento }}</td>
                    
                    <td><a href="/events/delete/{{$itens->id}}">Deletar<i class="bi bi-trash"></i></a> | <a href="/events/edit/{{$itens->id}}">Editar<i class="bi bi-pen"></i></a></td>
            @endforeach
                </tr>
        </table>
    </div>

@endsection