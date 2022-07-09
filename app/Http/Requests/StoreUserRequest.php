<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            //regras para fotos
            'nome_evento' => 'required|unique:events',
            'data_evento' => 'required',
        ];
    }

    public function messages()
    {
        return
        [
        //menssagens retorno fotos
        'nome_evento.required' => 'O nome do evento é obrigatório',
        'nome_evento.unique' => 'Já existe um evento com esse nome.',
        'data_evento.required' => 'Informe a data que foi realizado o evento.',

        ];
    }
}
