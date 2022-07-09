@extends('layouts.modelo')

@section('title', 'Fotos')

@section('content')
<div class="text-center p-2 mt-2">
    <h4>VISUALIZAÇÃO DE FOTOS</h4>
</div>
<div class="row justify-content-center">
    <div  class="text-center" id="divfoto">
        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel" >
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="/storage/uploads/inicio.png" class="d-block w-100" alt="">
                </div>
                @foreach ($photos->caminho_imagem as $photo)
                    <div class="carousel-item" >
                        <a href="/storage/{{$photo}}" target="_blank" rel="noopener noreferrer"><img src="/storage/{{$photo}}" class="d-block w-100" alt=""></a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
@endsection