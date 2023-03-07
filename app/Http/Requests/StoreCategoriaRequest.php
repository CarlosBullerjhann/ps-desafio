<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
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
            'categoria' => ['required', 'min:2', 'max:100'],
        ];
    }

    public function messages()
    {
        return [
            'categoria.required' => "Esse campo é obrigatorio.",
            'categoria.max' => "O campo pode receber no maximo 100 caracteres",
            'categoria.min' => "O campo deve ter no minimo 2 caracteres",
        ];
    }
}
