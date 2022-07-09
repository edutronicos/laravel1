@extends('layouts.modelo')

@section('title', 'Fotos')

@section('content')

    <div class="text-center p-2">
            <h1>Adcionar novas fotos.</h1>
    </div>

    <div class="container mt-5 mb-5">
        <form class="row g-3 needs-validation" action="/events/new" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="inputText" class="form-label col-form-label-sm">Nome</label>
                    <input class="form-control form-control-sm @error('nome_evento') is-invalid @enderror" type="text" name="nome_evento" id="nome_evento">
                    @error('nome_evento')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="inputText" class="form-label col-form-label-sm">Local</label>
                    <input class="form-control form-control-sm @error('local') is-invalid @enderror" type="text" name="local" id="local">
                    @error('local')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-md-2">
                    <label for="inputText" class="form-label col-form-label-sm">Data do Evento</label>
                    <input class="form-control form-control-sm @error('data_evento') is-invalid @enderror" type="date" name="data_evento" id="data_evento">
                    @error('data_evento')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-center p-3">
                <div class="col-md-5">
                <input class="form-control form-control-sm" type="file" id="file-input" name="image[]" multiple />
                <span class="text-danger">{{ $errors->first('image') }}</span>
                
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Salvar Fotos</button>
            </div>
        </form>
        <div id="thumb-output"></div>
    </div>
    
@endsection