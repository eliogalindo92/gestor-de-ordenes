<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            'id_entidad' => 'required|numeric',
            'numero_plan'   => 'required|numeric|min:1|max:10000|unique:planes',
            'fecha_distribucion' => 'required|date_format:Y-m-d\TH:i|unique:planes'
        ];
    }
}
