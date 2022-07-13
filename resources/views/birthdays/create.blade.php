@extends('layouts.modelo')

@section('title', 'Aniversários')

@section('content')

    <div class="text-center p-2">
            <h1>ADICIONE UM NOVO ANIVERSÁRIO.</h1>
    </div>

    <div class="container mt-3 mb-5">
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

    <div class="container mt-5">
        <div class="row text-center mt-5">
            <h3>Anivesários já cadastrados.</h3>
        </div>
        
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th><a class="a" href="/birthday/order/{{'nome'}}">Nome</a></th>
                    <th><a href="/birthday/order/{{'data_nasc'}}">Data Nascimento</a></th>
                    
                    <th>Ações</th>
                </tr>
            </thead>
            @foreach($item as $itens)
                <tr>
                    <td>{{ $itens->nome }}</td>
                    <td>{{ date( 'd/m' , strtotime($itens->data_nasc)) }}</td>
                    
                    <td><a href="/birthday/delete/{{$itens->id}}">Deletar<i class="bi bi-trash"></i></a> | <a href="/birthday/edit/{{$itens->id}}">Editar<i class="bi bi-pen"></i></a></td>
            @endforeach
                </tr>
        </table>
    </div>

@endsection