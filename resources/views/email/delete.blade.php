@extends('layouts.modelo')

@section('title', 'E-mails')

@section('content')

    <div class="text-center p-2">
            <h1>Excluir E-mail</h1>
    </div>

    <div class="container mt-5 mb-5">
        <form class="row g-3 needs-validation" action="/emails/delete/{{$edits->id}}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Nome</label>
                    <input class="form-control form-control-sm" type="text" name="nome" value="{{ $edits->nome }}">
                </div>
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">E-mail</label>
                    <input class="form-control form-control-sm" type="text" name="email" value="{{ $edits->email }}">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="inputText" class="form-label col-form-label-sm">Setor</label>
                    <input class="form-control form-control-sm" type="text" name="setor" value="{{ $edits->setor }}">
                </div>
                <div class="col-4">
                    <label for="inputText" class="form-label col-form-label-sm">Empresa</label>
                    <input class="form-control form-control-sm" type="text" name="empresa" value="{{ $edits->empresa }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <h4>Tem certeza que deseja excluir este E-mail?</h4>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">SIM</button>
            </div>
            
        </form><br>
        <div class="col-12 text-center">
                <a href="/emails"><button class="btn btn-primary">NÃO</button></a>
            </div>

    </div>

@endsection