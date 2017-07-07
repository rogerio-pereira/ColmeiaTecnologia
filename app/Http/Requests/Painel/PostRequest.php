<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:100',
            'text' => 'required',
            'image' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'O campo "Título" é obrigatório',
            'title.max' => 'O campo "Título" não deve ser maior do que :max caracteres',

            'text.required' => 'O campo "Texto" é obrigatório',

            'image.required' => 'O campo "Imagem" é obrigatório',
        ];
    }
}
