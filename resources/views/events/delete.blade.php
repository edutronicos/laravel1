@extends('layouts.modelo')

@section('title', 'Fotos')

@section('content')

    <div class="text-center p-2">
            <h1>Excluir Eventos</h1>
    </div>
    
    <div class="container mt-5 mb-5">
    <form class="row g-3 needs-validation" action="/events/delete/{{$item->id}}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Evento</label>
                    <input class="form-control form-control-sm" type="text" name="evento" value="{{ $item->nome_evento }}">
                </div>
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Local</label>
                    <input class="form-control form-control-sm" type="text" name="local" value="{{ $item->local_evento }}">
                </div>
                <div class="col-md-4">
                    <label for="inputText" class="form-label col-form-label-sm">Data</label>
                    <input class="form-control form-control-sm" type="date" name="data" value="{{ $item->data_evento }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <h4>Tem certeza que deseja excluir este Evento?</h4>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">SIM</button>
            </div>
            
        </form><br>
        <div class="col-12 text-center">
                <a href="/photos"><button class="btn btn-primary">NÃO</button></a>
            </div>


    </div>

@endsection