<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function messages(){
        return[
            'required'  => 'Este campo é obrigatório!',
            'min'       => 'Este campo deve conter no minimo :min caracteres',
            'image'     => 'Arquivo não é uma imagem valida'

        ];
    }
}
