<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarChaveAcessoRequest extends FormRequest
{
    /**
     * Determine se o usuário está autorizado a fazer essa solicitação.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtenha as regras de validação que devem ser aplicadas à solicitação.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'keyAccess' => ['required', 'numeric', 'digits:44'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'keyAccess' => $this->route('keyAccess'),
        ]);
    }
}
