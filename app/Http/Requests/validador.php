<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador extends FormRequest
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
            'Sueño' => 'required | min:3 | max:20',
            'Descripcion' => 'required | min:3 ',
        ];
    }
}
