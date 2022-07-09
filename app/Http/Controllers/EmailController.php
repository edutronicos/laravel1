<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use App\Models\User;

class EmailController extends Controller
{
    
    public function index()
    {
        $item = Email::all();

        //$dadosUsuario = User::where('id', $cadastr->user_id)->first()->toArray();
        
        return view('email.index', compact('item'));
    }

    public function order($id)
    {
        $item = Email::orderBy($id, 'asc')->get();
        return view('email.index', compact('item'));
    }

    public function create()
    {
        return view('email.create');
    }

    public function store(Request $request)
    {
        Email::create
        ([
            'nome' => $request->nome,
            'email' => $request->email,
            'setor' => $request->setor,
            'empresa' => $request->empresa,
        ]);

        //return view('email.create');
        return redirect ('/emails')->with('msg', 'E-mail criado com Sucesso!');
    }

    public function edit($id)
    {
        $edits = Email::findOrFail($id);
        return view ('email.edit', ['edits' => $edits]);
    }

    public function update(Request $request, $id)
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
    }

    public function delete($id)
    {
        $edits = Email::findOrFail($id);
        return view ('email.delete', ['edits' => $edits]);
    }

    public function destroy($id)
    {
        $edits = Email::findOrFail($id);
        $edits->delete();

        return redirect ('/emails')->with('msg', 'Dados deletados com Sucesso!');
    }
}
