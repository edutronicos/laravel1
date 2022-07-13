<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Birthday;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\BirthdayRequest;
use Carbon\Carbon; //usar data

class BirthdaysController extends Controller
{
    public function index()
    {
        $item = Birthday::whereMonth('data_nasc', Carbon::now()->month)->get();

        //$dadosUsuario = User::where('id', $cadastr->user_id)->first()->toArray();
        
        return view('welcome', ['item' => $item]);
    }

    public function create()
    {
        $item = Birthday::all();
        return view('birthdays.create', compact('item'));
    }

    public function store(BirthdayRequest $request)
    {
        


        Birthday::create
        ([
            'nome' => $request->nome,
            'data_nasc' => $request->data_nasc,
        ]);

        return redirect ('/birthday')->with('msg', 'Ramal criado com Sucesso!');
    }

    public function edit($id)
    {
        $item = Birthday::findOrFail($id);
        return view ('birthdays.edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $item = Birthday::findOrFail($id);
        $item->update
        ([
            'nome' => $request->nome,
            'data_nasc' => $request->data_nasc,
        ]);
        return redirect ('/birthday')->with('msg', 'Dados alterados com Sucesso!');
    }

    public function delete($id)
    {
        $item = Birthday::findOrFail($id);
        return view ('birthdays.delete', ['item' => $item]);
    }

    public function destroy($id)
    {
        $item = Birthday::findOrFail($id);
        $item->delete();

        return redirect ('/birthday')->with('msg', 'Dados deletados com Sucesso!');
    }

    public function order($id)
    {
        $item = Birthday::orderBy($id, 'asc')->get();
        return view('birthdays.create', compact('item'));
    }
}
