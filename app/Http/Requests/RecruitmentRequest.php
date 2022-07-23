<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecruitmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //Regras para o cadastro de Recrutamento
            

            'contrato' => 'required',
            'cliente' => 'required',
            'nome_candidato' => 'required',
            'email' => 'required|unique:recruitments',
            'cargo_candidato' => 'required',
            'admissao_candidato' => 'required',
            'local_unidade' => 'required',
            'salario' => 'required',
            'valor_vt' => 'required',
            'valor_vr' => 'required',
            'celular' => 'required|unique:recruitments',
            'rg' => 'required|unique:recruitments',
            'cpf' => 'required|unique:recruitments',
            'ctps' => 'required|unique:recruitments',
            'pis' => 'required|unique:recruitments',
            'data_nasc' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'cep' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'nome_banco' => 'required',
            'tipo_conta' => 'required',
            'agencia' => 'required',
            'numero_conta' => 'required',
            'tam_camisa' => 'required',
            'tam_calca' => 'required',
            'tam_sapato' => 'required',
        ];
    }

    public function messages()
    {
        return
        [
        //menssagens retorno aniversários

        'contrato.required' => 'O campo CONTRATO é obrigatório',
        'cliente.required' => 'O campo CLIENTE é obrigatório',
        'nome_candidato.required' => 'O NOME campo é obrigatório',
        'email.required' => 'O E-MAIL campo é obrigatório',
        'email.unique' => 'Este e-mail já está cadastrado em outro funcionário',
        'cargo_candidato.required' => 'O campo CARGO CANDIDATO é obrigatório',
        'admissao_candidato.required' => 'O campo ADMISSÃO é obrigatório',
        'local_unidade.required' => 'O campo LOCAL/UNIDADE é obrigatório',
        'salario.required' => 'O campo SALARIO é obrigatório',
        'valor_vt.required' => 'O campo VALOR VT é obrigatório',
        'valor_vr.required' => 'O campo VALOR VR é obrigatório',
        'celular.required' => 'O campo CELULAR é obrigatório',
        'celular.unique' => 'Este celular já está cadastrado em outro funcionário',
        'rg.required' => 'O campo RG é obrigatório',
        'rg.unique' => 'Este rg já está cadastrado em outro funcionário',
        'cpf.required' => 'O campo CPF é obrigatório',
        'cpf.unique' => 'Este cpf já está cadastrado em outro funcionário',
        'ctps.required' => 'O campo CTPS é obrigatório',
        'ctps.unique' => 'Este CTPS já está cadastrado em outro funcionário',
        'pis.required' => 'O campo PIS é obrigatório',
        'pis.unique' => 'Este PIS já está cadastrado em outro funcionário',
        'data_nasc.required' => 'O campo DATA DE NASCIMENTO é obrigatório',
        'endereco.required' => 'O campo ENDEREÇO é obrigatório',
        'bairro.required' => 'O campo BAIRRO é obrigatório',
        'cep.required' => 'O campo CEP é obrigatório',
        'cidade.required' => 'O campo CIDADE é obrigatório',
        'estado.required' => 'O campo ESTADO é obrigatório',
        'nome_banco.required' => 'O campo NOME DO BANCO é obrigatório',
        'tipo_conta.required' => 'O campo TIPO DE CONTA é obrigatório',
        'agencia.required' => 'O campo AGÊNCIA é obrigatório',
        'numero_conta.required' => 'O campo NÚMERO DA CONTA é obrigatório',
        'tam_camisa.required' => 'O campo TAMANHO CAMISA é obrigatório',
        'tam_calca.required' => 'O campo TAMANHO CALÇA é obrigatório',
        'tam_sapato.required' => 'O campo TAMANHO SAPATO é obrigatório',

        ];
    }
}
