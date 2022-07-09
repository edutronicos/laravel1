<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;
use App\Models\User;

class RecruitmentsController extends Controller
{
    public function create()
    {
        return view('recru.novo');
    }

    public function store(Request $request)
    {
        $cadas = new Recruitment;
        $user = auth()->user();
        $cadas->user_id = $user->id;

        Recruitment::create
        ([
            'user_id' => $user->id,
            'contrato' => $request->contrato,
            'cliente' => $request->cliente,
            'nome_candidato' => $request->nome_candidato,
            'email' => $request->email,
            'cargo_candidato' => $request->cargo_candidato,
            'admissao_candidato' => $request->admissao_candidato,
            'demissao_candidato' => $request->demissao_candidato,
            'local_unidade' => $request->local_unidade,
            'salario' => $request->salario,
            'valor_vt' => $request->valor_vt,
            'valor_vr' => $request->valor_vr,
            'horario' => $request->horario,
            'frequencia' => $request->frequencia,
            'telefone' => $request->telefone,
            'celular' => $request->celular,
            'observacao' => $request->observacao,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'ctps' => $request->ctps,
            'serie' => $request->serie,
            'pis' => $request->pis,
            'data_nasc' => $request->data_nasc,
            'nome_pai' => $request->nome_pai,
            'nome_mae' => $request->nome_mae,
            'endereco' => $request->endereco,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'nome_filho1' => $request->nome_filho1,
            'cpf_filho1' => $request->cpf_filho1,
            'data_nasc_filho1' => $request->data_nasc_filho1,
            'nome_filho2' => $request->nome_filho2,
            'cpf_filho2' => $request->cpf_filho2,
            'data_nasc_filho2' => $request->data_nasc_filho2,
            'nome_banco' => $request->nome_banco,
            'tipo_conta' => $request->tipo_conta,
            'agencia' => $request->agencia,
            'numero_conta' => $request->numero_conta,
            'tam_camisa' => $request->tam_camisa,
            'tam_calca' => $request->tam_calca,
            'tam_sapato' => $request->tam_sapato,
        ]);
        return redirect ('/recru/lista');

        
    }

    public function show($id)
    {
        $cadastro = Recruitment::findOrFail($id);
        return view('recru.cadastro', compact('cadastro'));
    }

    public function show2()
    {
        $cadastr = Recruitment::get();

        //$dadosUsuario = User::where('id', $cadastr->user_id)->first()->toArray();
        
        return view('recru.lista', ['cadastr' => $cadastr,]);
    }
}
