<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Materias extends Request
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
            'titulo' => 'required|unique:materias,titulo',
            'imagem' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'titulo.unique' => 'Esta matéria já está cadastrada.'
        ];
    }
}
