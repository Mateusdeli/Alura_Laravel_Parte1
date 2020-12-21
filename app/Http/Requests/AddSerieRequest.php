<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSerieRequest extends FormRequest
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

    public function messages(): array {
        return [
            'nome.required' => 'Campo nome é obrigatório!'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required']
        ];
    }
}
