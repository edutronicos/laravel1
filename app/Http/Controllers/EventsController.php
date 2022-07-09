<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Carbon\Carbon; //usar data



class EventsController extends Controller
{
    public function index()
    {
        $item = Event::all();

        //$dadosUsuario = User::where('id', $cadastr->user_id)->first()->toArray();
        
        return view('events.index', compact('item'));
    }

    public function order($id)
    {
        $item = Event::orderBy($id, 'asc')->get();
        return view('events.index', compact('item'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(StoreUserRequest $request)
    {

        $nomeEvento = $request->nome_evento;
        $dataNomeEvento = Carbon::parse($request->data_evento)->format('d-m-Y');
        $dataEvento = $request->data_evento;
        $fotoEvento = $request->image;
        
        foreach($fotoEvento as $foto)
        {
            $nomeOriginalImagem = $foto->getClientOriginalName();
            $extensaoImagem = $foto->Extension();
            $nomeImagem = 'Evento_' . $nomeEvento . "_" . $dataNomeEvento . "_" . $nomeOriginalImagem;
            $salvar = $foto->storeAs('/uploads/'.$nomeEvento, $nomeImagem, 'public');
            $caminhoImagem[] = $salvar;
            
            
            
        }
        
        Event::create
            ([
                'nome_evento' => $nomeEvento,
                'local_evento' => $request->local,
                'data_evento' => $dataEvento,
                'nome_imagem' => $nomeImagem,
                'caminho_imagem' => $caminhoImagem,
                
            ]);

        $item = Event::all();

        return view('events.index', compact('item'));
        //return redirect ('/events')->with('msg', 'Evento criado com Sucesso!');
    }

    public function view2($id)
    {
        $photos = Event::findOrFail($id);
        return view('events.visual', compact('photos'));
    }

    public function edit($id)
    {
        $edits = Event::findOrFail($id);
        return view ('events.edit', ['edits' => $edits]);
    }

    /*public function update(Request $request, $id)
    {
        $edits = Email::findOrFail($id);
        $edits->update
        ([
            'nome' => $request->nome,
            'email' => $request->email,
            'setor' => $request->setor,
            'empresa' => $request->empresa,
        ]);
        return redirect ('/emails')->with('msg', 'Dados alterados com Sucesso!');
    }*/

    public function delete($id)
    {
        $edits = Event::findOrFail($id);
        return view ('events.delete', ['edits' => $edits]);
    }

    public function destroy($id)
    {
        $edits = Event::findOrFail($id);
        $edits->delete();

        return redirect ('/events')->with('msg', 'Evento deletado com Sucesso!');
    }
}
