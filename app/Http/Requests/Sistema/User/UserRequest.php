<?php

namespace App\Http\Requests\Sistema\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'required|email|unique:system_users,email',
            'password' => 'required|same:confirmPassword',
            'confirmPassword' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo "Nome" é obrigatório',
            'name.max' => 'O campo "Nome" não deve ser maior do que :max caracteres',

            'email.required' => 'O campo "E-mail" é obrigatório',
            'email.email' => 'E-mail inválido',
            'email.unique' => 'E-mail já cadastrado',

            'password.required' => 'O campo "Senha" é obrigatório',
            'password.same' => 'O campo "Senha" deve ser igual ao campo "Confirmação de senha"',

            'confirmPassword.required' => 'O campo "Confirmação de Senha" é obrigatório',
        ];
    }

    private function getArrayUser($array)
    {
        foreach($array as $key => $value) {
            $keys[] = 'user.'.$key;
            $values[] = $array[$key];
        }

        $return = array_combine($keys, $values);
        $return['user.password'] = 'required|same:user.confirmPassword';

        return $return;
    }

    public function rulesUser()
    {
        return $this->getArrayUser($this->rules());
    }

    public function messagesUser()
    {
        return $this->getArrayUser($this->messages());
    }
}
