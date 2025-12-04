<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // todos los usuarios pueden hacer este tipo de peticiones
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //  añadimos las reglas de validacion de nuestros campos
        return [
            'title' => 'required|max:255|min:3',
            'content' => 'nullable|max:255|min:3'
        ];
    }
}
