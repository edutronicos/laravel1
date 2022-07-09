@extends('layouts.modelo')

@section('title', 'Aniversários')

@section('content')

    <div class="text-center p-2">
            <h1>Adcionar novo Aniversário.</h1>
    </div>

    <div class="container mt-5 mb-5">
        <form class="row g-3 needs-validation" action="/birthday/new" method="post" novalidate>
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="inputText" class="form-label col-form-label-sm">Nome</label>
                    <input class="form-control form-control-sm @error('nome') is-invalid @enderror" type="text" name="nome" id="nome" required>
                    @error('nome')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2">
                    <label for="inputText" class="form-label col-form-label-sm">Data de Nascimento</label>
                    <input class="form-control form-control-sm @error('data_nasc') is-invalid @enderror" type="date" name="data_nasc" id="data_nasc" required>
                    @error('data_nasc')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-center">
                
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Salvar Aniversário</button>
            </div>
        </form>

    </div>

@endsection