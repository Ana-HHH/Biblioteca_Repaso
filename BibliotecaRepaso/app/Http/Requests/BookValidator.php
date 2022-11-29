<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookValidator extends FormRequest
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
            'ISBN' => 'required|numeric|digits_between:13,100',
            'titulo' => 'required',
            'autor' => 'required',
            'paginas' => 'required|numeric',
            'editorial' => 'required|email'
        ];
    }
}
