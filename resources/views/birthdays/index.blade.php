

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-2 shadow-lg m-3 p-3 ">
                    <div class="text-center">
                        <h4>Aniversários</h4>
                        <a class="btn btn-primary m-1" href="/birthday/new">Novo</a> <br> <a class="btn btn-primary m-1" href="/events">Fotos</a>
                    </div>
            </div>
            <div class="col-8 shadow-lg m-3 p-3">
                <div class="text-center">
                    <h4>Aniversáriates do mês.</h4>
                </div>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Nome</a></th>
                            <th>Dia</a></th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                
                    @foreach($item as $itens)
                    
                        <tr>
                            <td>{{ $itens->nome }}</td>
                            <td>{{ date( 'd' , strtotime($itens->data_nasc)) }}</a></td>
                            <td><a href="/birthday/delete/{{$itens->id}}">Deletar<i class="bi bi-trash"></i></a> | <a href="/birthday/edit/{{$itens->id}}">Editar<i class="bi bi-pen"></i></a></td>
                    @endforeach
                        </tr>
                </table>
            </div>
        </div>
    </div>

    

