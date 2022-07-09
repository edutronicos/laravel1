@extends('layouts.modelo')

@section('title', 'Ramais')

@section('content')

    <div class="text-center p-2">
            <h1>Adcionar novo ramal.</h1>
    </div>

    <div class="container mt-5 mb-5">
        <form class="row g-3 needs-validation" action="/branch/new" method="post" novalidate>
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="inputText" class="form-label col-form-label-sm">Nome</label>
                    <input class="form-control form-control-sm" type="text" name="nome" id="nome" required>
                </div>
                <div class="col-md-2">
                    <label for="inputText" class="form-label col-form-label-sm">Setor</label>
                    <input class="form-control form-control-sm" type="text" name="setor" id="setor" required>
                </div>
                <div class="col-1">
                    <label for="inputText" class="form-label col-form-label-sm">Ramal</label>
                    <input class="form-control form-control-sm" type="text" name="ramal" id="ramal" required>
                </div>
            </div>

            <div class="row justify-content-center">
                
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Salvar Ramal</button>
            </div>
        </form>

    </div>

@endsection