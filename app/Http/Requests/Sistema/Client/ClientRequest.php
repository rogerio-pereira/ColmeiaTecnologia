<?php

namespace App\Http\Requests\Sistema\Client;

use App\Http\Requests\Sistema\User\UserRequest;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    private $userCreateRequest;

    public function __construct()
    {
        $this->userCreateRequest = new UserRequest();
    }

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
        $userRules = $this->userCreateRequest->rulesUser();

        $rules = [
            'birthdate' => 'required|date_format:d/m/Y',
            'cellphone' => 'required',
            'cpf_cnpj' => 'required|cpfcnpj|unique:system_clients,cpf_cnpj',

            'zipcode' => 'required',
            'street' => 'required|max:100',
            'number' => 'required|numeric',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required|size:2',
        ];

        return array_merge($userRules, $rules);
    }

    public function messages()
    {
        $userMessages = $this->userCreateRequest->messagesUser();

        $messages = [
            'birthdate.required' => 'O campo "Data de Nascimento" é obrigatório',
            'birthdate.date_format' => 'O campo "Data de Nascimento" deve estar no formado dd/mm/aaa',

            'cellphone.required' => 'O campo "Celular" é obrigatório',

            'cpf_cnpj.required' => 'O campo "CPF/CNPJ" é obrigatório',
            'cpf_cnpj.cpfcnpj' => 'CPF ou CNPJ inválido',
            'cpf_cnpj.unique' => 'CPF/CNPJ já cadastrado',

            'zipcode.required' => 'O campo "CEP" é obrigatório',

            'street.required' => 'O campo "Rua" é obrigatório',
            'street.max' => 'O campo "Rua" não deve ser maior do que :max caracteres',

            'number.required' => 'O campo "Número" é obrigatório',
            'number.numeric' => 'O campo "Número" deve ser numérico',

            'neighborhood.required' => 'O campo "Bairro" é obrigatório',

            'city.required' => 'O campo "Cidade" é obrigatório',

            'state.required' => 'O campo "Estado" é obrigatório',
            'state.size' => 'O campo "Estado" deve ter 2 caracteres',
        ];

        return array_merge($userMessages, $messages);
    }
}
