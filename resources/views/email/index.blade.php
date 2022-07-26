@extends('layouts.modelo')

@section('title', 'E-mails')

@section('content')

<div class="form-group input-group">
    	<input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
        <span class="input-group-addon"><i style="font-size: 2rem;" class="bi bi-search"></i></span>
     </div>

    <div class="text-center p-2">
            <h1>Relação de E-mails</h1>
    </div>
    <div class="row text-center mt-5">
        
            <div class="col-12">
                <a href="/emails/new" class="btn btn-primary">Novo E-mail</a>
            </div>
       
        
    </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 mt-2">
                    <form class="form-group input-group" action="/emails" method="get">
                        <input class="form-control" type="search" name="search" id="search" placeholder="Pesquisar Nome, E-mail e Setor">
                        <button type="submit" class="btn btn-primary"><i style="font-size: 1rem;" class="bi bi-search "></i></button>
                    </form>
                </div>
            </div>
        </div>

    <div class="container mt-5">
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th><a class="a" href="/ordenar/{{'nome'}}">Nome</a></th>
                    <th><a href="/ordenar/{{'email'}}">E-mail</a></th>
                    <th><a href="/ordenar/{{'setor'}}">Setor</a></th>
                    <th><a href="/ordenar/{{'empresa'}}">Empresa</a></th>
                    <th>Ações</th>
                </tr>
            </thead>
            @foreach($item as $itens)
                <tr>
                    <td>{{ $itens->nome }}</td>
                    <td><a href="mailto:{{ $itens->email }}">{{ $itens->email }}</a></td>
                    <td>{{ $itens->setor }}</td>
                    <td>{{ $itens->empresa }}</td>
                    <td><a href="/emails/delete/{{$itens->id}}">Deletar<i class="bi bi-trash"></i></a> | <a href="/emails/edit/{{$itens->id}}">Editar<i class="bi bi-pen"></i></a></td>
            @endforeach
                </tr>
        </table>
    </div>

@endsection