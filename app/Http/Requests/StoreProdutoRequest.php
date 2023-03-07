<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'min:2', 'max:100'],
            'descricao' => ['required', 'min:2', 'max:1000'],
            'preco' => ['required', 'min:1'],
            'quantidade' => ['required', 'min:1'],
            'imagem' => 'image',
            'categoria_id' => ['required', 'integer'],
        ];
    }

    public function messages()
    {
        return [
            'required' => "Esse campo é obrigatorio.",
            'nome.min' => "Esse campo deve ter no minimo 2 caracteres.",
            'descricao.min' => "Esse campo deve ter no minimo 2 caracteres.",
            'preco.min' => "O preço deve ser de no minimo 1.",
            'quantidade.min' => "Esse campo deve ter no minimo 1 caracter.",
            'nome.max' => "esse campo deve ter no max 100 catacteres.",
            'descricao.max' => "esse campo deve ter no max 1000 catacteres.",
            'image' => "esse campo só aceita imagens.",
        ];
    }
}
