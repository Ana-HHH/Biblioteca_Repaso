<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientNewValidator extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'NombreCliente' => 'required|min:4',
            'EmailCliente' => 'required|email',
            'NoINE' => 'required|numeric|digits_between:10,100',
        ];
    }
}
