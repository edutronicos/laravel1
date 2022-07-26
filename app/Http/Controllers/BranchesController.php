<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\User;

class BranchesController extends Controller
{
    public function index()
    {
        $search = request('search');

        if($search){
            $item = Branch::where('nome', 'like', '%'.$search.'%')->
                            orWhere('ramal', 'like', '%'.$search.'%')->
                            orWhere('setor', 'like', '%'.$search.'%')->get();
        } else {
            $item = Branch::all();
        }
        
        

        
        
        return view('branch.index', compact('item', 'search'));
    }

    public function create()
    {
        return view('branch.create');
    }

    public function store(Request $request)
    {
        Branch::create
        ([
            'nome' => $request->nome,
            'ramal' => $request->ramal,
            'setor' => $request->setor,
        ]);

        //return view('email.create');
        return redirect ('/branch')->with('msg', 'Ramal criado com Sucesso!');
    }

    public function edit($id)
    {
        $item = Branch::findOrFail($id);
        return view ('branch.edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $item = Branch::findOrFail($id);
        $item->update
        ([
            'nome' => $request->nome,
            'ramal' => $request->ramal,
            'setor' => $request->setor,
        ]);
        return redirect ('/branch')->with('msg', 'Dados alterados com Sucesso!');
    }

    public function delete($id)
    {
        $item = Branch::findOrFail($id);
        return view ('branch.delete', ['item' => $item]);
    }

    public function destroy($id)
    {
        $item = Branch::findOrFail($id);
        $item->delete();

        return redirect ('/branch')->with('msg', 'Dados deletados com Sucesso!');
    }

    public function order($id)
    {
        $item = Branch::orderBy($id, 'asc')->get();
        return view('branch.index', compact('item'));
    }
}
