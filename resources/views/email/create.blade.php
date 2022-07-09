@extends('layouts.modelo')

@section('title', 'E-mails')

@section('content')

    <div class="text-center p-2">
            <h1>Adcionar novo e-mail.</h1>
    </div>

    <div class="container mt-5 mb-5">
        <form class="row g-3 needs-validation" action="/emails/new" method="post" novalidate>
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Nome</label>
                    <input class="form-control form-control-sm" type="text" name="nome" id="nome" required>
                </div>
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">E-mail</label>
                    <input class="form-control form-control-sm" type="text" name="email" id="email" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="inputText" class="form-label col-form-label-sm">Setor</label>
                    <input class="form-control form-control-sm" type="text" name="setor" id="setor" required>
                </div>
                <div class="col-4">
                    <label for="inputText" class="form-label col-form-label-sm">Empresa</label>
                    <input class="form-control form-control-sm" type="text" name="empresa" id="empresa" required>
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Salvar E-mail</button>
            </div>
        </form>

    </div>

@endsection