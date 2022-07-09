<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BirthdayRequest extends FormRequest
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
        return 
        [
            //regras para aniversários
            'nome' => 'required|unique:birthdays',
            'data_nasc' => 'required',
        ];
    }

    public function messages()
    {
        return
        [
        //menssagens retorno aniversários
        'nome.required' => 'O campo nome é obrigatório.',
        'nome.unique' => 'Este nome já foi cadastrado.',
        'data_nasc.required' => 'Obrigatório inserir a data de nascimento.',
        ];
    }
}
