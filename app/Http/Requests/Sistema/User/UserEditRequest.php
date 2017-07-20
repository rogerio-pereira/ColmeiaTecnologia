<?php

namespace App\Http\Requests\Sistema\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserEditRequest extends FormRequest
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
    public function rules($userId = null)
    {
        return [
            'name' => 'required|max:100',
            'email' => 'required|email|unique:system_users,email',
            'password' => 'same:confirmPassword',
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

            'password.same' => 'O campo "Senha" deve ser igual ao campo "Confirmação de senha"',
        ];
    }

    private function getArrayUser($array)
    {
        foreach($array as $key => $value) {
            $keys[] = 'user.'.$key;
            $values[] = $array[$key];
        }

        $return = array_combine($keys, $values);
        $return['user.password'] = 'same:user.confirmPassword';

        return $return;
    }

    public function rulesUser($userId)
    {
        $return = $this->getArrayUser($this->rules());

        if(isset($userId))
            $return['user.email'] = 'required|email|unique:system_users,email,'.$userId;

        return $return;
    }

    public function messagesUser()
    {
        return $this->getArrayUser($this->messages());
    }
}
