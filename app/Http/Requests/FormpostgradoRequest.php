<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormpostgradoRequest extends FormRequest
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
			'institucionUniversidad' => 'required|string',
			'anio' => 'required|string',
			'gradoacademico' => 'required',
			'titulodiploma' => 'required|string',
			'datospersona_id' => 'required',
            'fecharegistro' => 'required|date',
			'user_id' => 'required',
        ];
    }
}
