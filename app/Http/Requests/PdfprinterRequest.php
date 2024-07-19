<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PdfprinterRequest extends FormRequest
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
			'articulogeneral_id' => 'required',
			'articulorevista_id' => 'required',
			'contacto_id' => 'required',
			'datospersona_id' => 'required',
			'datospersonb_id' => 'required',
			'expdocente_id' => 'required',
			'expoconferencia_id' => 'required',
			'expoevento_id' => 'required',
			'exposeminario_id' => 'required',
			'expprograrel_id' => 'required',
			'formcurso_id' => 'required',
			'formpostgrado_id' => 'required',
			'formprofesional_id' => 'required',
			'funcadminacad_id' => 'required',
			'libropublicado_id' => 'required',
			'reconocimiento_id' => 'required',
			'textopublicado_id' => 'required',
			'trabproyinvconcluido_id' => 'required',
			'tutortribunal_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
