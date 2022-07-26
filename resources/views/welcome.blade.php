
@extends('layouts.modelo')

@section('title', 'Início')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 shadow-lg m-3 p-3">
                <div class="row">
                    <div class="col d-none d-sm-block">
                        <a href="https://web.whatsapp.com/"><img src="imagens/home/whats.png" alt="" class="img-thumbnail img-fluid"></a>
                    </div>
                    <div class="col d-flex align-items-center text-nowrap">
                        <a href="https://web.whatsapp.com/"><h5>WhatsApp Web</h5></a>
                    </div>
                    <div class="col d-none d-sm-block">
                        <a href="http://www.simepar.br/prognozweb/simepar/forecast_by_counties/4106902"><img src="imagens/home/clima.png" alt="" class="img-thumbnail img-fluid-sm"></a>
                    </div>
                    <div class="col d-flex align-items-center text-nowrap">
                        <a href="http://www.simepar.br/prognozweb/simepar/forecast_by_counties/4106902"><h5>Clima Tempo</h5></a>
                    </div>
                    <div class="col d-none d-sm-block">
                        <a href="https://maps.google.com.br/maps?hl=pt-BR&tab=rl"><img src="imagens/home/maps.png" alt="" class="img-thumbnail img-fluid"></a>
                    </div>
                    <div class="col d-flex align-items-center text-nowrap">
                        <a href="https://maps.google.com.br/maps?hl=pt-BR&tab=rl"><h5>Google Maps</h5></a>
                    </div>
                    <div class="col d-none d-sm-block">
                        <a href="https://www.google.com.br"><img src="imagens/home/google.png" alt="" class="img-thumbnail img-fluid-sm"></a>
                    </div>
                    <div class="col d-flex align-items-center text-nowrap">
                        <a href="https://www.google.com.br"><h5>Pesquisa Google</h5></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>    
    
            @include('birthdays.index')
        
@endsection
