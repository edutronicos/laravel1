@extends('layouts.modelo')

@section('title', 'Ramais')

@section('content')

    <div class="text-center p-2">
            <h1>Editar Ramal.</h1>
    </div>

    <div class="container mt-5 mb-5">
        <form class="row g-3 needs-validation" action="/branch/edit/{{$item->id}}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Nome</label>
                    <input class="form-control form-control-sm" type="text" name="nome" value="{{ $item->nome }}">
                </div>
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Setor</label>
                    <input class="form-control form-control-sm" type="text" name="setor" value="{{ $item->setor }}">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="inputText" class="form-label col-form-label-sm">Ramal</label>
                    <input class="form-control form-control-sm" type="text" name="ramal" value="{{ $item->ramal }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Salvar Ramal</button>
            </div>
        </form>

    </div>

@endsection