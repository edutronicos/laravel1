<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'contrato', 'cliente', 'nome_candidato', 'email', 'cargo_candidato',
        'admissao_candidato', 'demissao_candidato', 'local_unidade', 'salario',
        'valor_vt', 'valor_vr', 'horario', 'frequencia', 'telefone', 'celular',
        'observacao', 'rg', 'cpf', 'ctps', 'serie', 'pis', 'data_nasc',
        'nome_pai', 'nome_mae', 'endereco', 'bairro', 'cep', 'cidade', 'estado',
        'nome_filho1', 'cpf_filho1', 'data_nasc_filho1', 'nome_filho2', 'data_nasc_filho2', 'cpf_filho2',
        'nome_banco', 'tipo_conta', 'agencia', 'numero_conta', 'tam_camisa', 'tam_calca', 'tam_sapato', 'user_id',
    ];

    public function user()
    {
        return $this->belongTo('App\Models\User');
    }
}
