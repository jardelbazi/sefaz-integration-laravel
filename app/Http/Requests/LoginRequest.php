<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine se o usuário está autorizado a fazer essa solicitação.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtenha as regras de validação que devem ser aplicadas à solicitação.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }

    /**
     * Mensagens de erro personalizadas.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'O email é obrigatório.',
            'password.required' => 'A senha é obrigatória.',
        ];
    }
}
