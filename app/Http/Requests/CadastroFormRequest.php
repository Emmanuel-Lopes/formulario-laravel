<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroFormRequest extends FormRequest
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
            'nome','mae','pai','cidade','pais' => ['required','string'],
            'cpf','tel1' => ['required','digits:11'],
            'rg' => ['digits:9', 'nullable'],
            'tel2' => ['digits:11', 'nullable'],
            'nasc' => ['required'],
            'email' => ['required','regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i'],
            'logr' => ['required','string'],
            'num' => ['required', 'digits_between:1,5'],
            'comp' => ['string', 'nullable'],
            'cep' => ['required', 'digits:8'],
            'uf' => ['required','string','max:3']
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'regex' => 'O campo :attribute é inválido.',
            'digits' => 'O campo :attribute não tem o número de dígitos válido.',
            'digits_between' => 'O campo :attribute não tem o número de dígitos válido.'
        ];
    }
}
