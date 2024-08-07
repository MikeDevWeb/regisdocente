<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibropublicadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'titulo' => 'required|string',
			'anio' => 'required|string',
			'autor' => 'required|string',
			'coautor' => 'required|string',
			'datospersona_id' => 'required',
            'fecharegistro' => 'required|date',
			'user_id' => 'required',
        ];
    }
}
