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
            'nome', 'mae', 'pai', 'pais' => ['required','regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\']{2,150}+$/i'],
            'cpf', 'tel1' => ['required','regex:/^\d{11}+$/i'],
            'rg' => 'regex:/^\d{9}+$/i',
            'tel2' => 'regex:/^\d{11}+$/i',
            'nasc' => 'regex:/^\d{8}+$/i',
            'email' => 'regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i',
            'logr' => ['required','regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\']+$/i'],
            'num' => ['required', 'regex:/^\d{1,5}+$/i'],
            'comp' => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\'\d]+$/i',
            'cep' => ['required', 'regex:/^\d{8}+$/i'],
            'uf' => ['required', 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\']{2,3}+$/i']
        ];
    }
}
