<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendedorRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;

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
            'nome' => 'required|max:30',
            'email' => 'required|max:50',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => "O campo 'nome' é obrigatório.",
            'nome.max' => "O campo 'nome' excede o tamanho máximo de 30 caracteres.",
            'email.required' => "O campo 'email' é obrigatório.",
            'email.max' => "O campo 'email' excede o tamanho máximo de 50 caracteres.",
        ];
    }
}
