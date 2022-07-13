

    <div class="container mt-3">
        <div class="col-12 shadow-lg m-3 p-3 ">
            <div class="text-center p-2">
                    <h4>Aniversários</h4>
            </div>
            
            <a class="btn btn-primary" href="/birthday/new">Novo Aniversário</a> | <a class="btn btn-primary" href="/events">Fotos</a>
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

    

