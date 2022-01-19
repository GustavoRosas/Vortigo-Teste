<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendaRequest extends FormRequest
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
            'id_vendedor' => 'required|integer',
            'valor_venda' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'id_vendedor.required' => "O campo 'id_vendedor' é obrigatório.",
            'valor_venda.required' => "O campo 'valor_venda' é obrigatório.",
        ];
    }
}
