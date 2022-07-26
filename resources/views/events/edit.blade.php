@extends('layouts.modelo')

@section('title', 'Ramais')

@section('content')

    <div class="text-center p-2">
            <h1>Editar Evento.</h1>
    </div>

    <div class="container mt-5 mb-5">
        <form class="row g-3 needs-validation" action="/events/edit/{{$item->id}}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Nome</label>
                    <input class="form-control form-control-sm" type="text" name="nome" value="{{ $item->nome_evento }}">
                </div>
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Data de Nascimento</label>
                    <input class="form-control form-control-sm" type="date" name="data_nasc" value="{{ $item->data_evento }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        </form>

    </div>

@endsection