<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenRequest extends FormRequest
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
            'numero_orden'   => 'required|numeric|min:1|max:10000|unique:ordenes',
            'fecha_elaboracion' => 'required|date_format:Y-m-d\TH:i|unique:ordenes',
            'codigo_producto' => 'required|min:1|max:60',
            'descripcion_producto' => 'required|max:255',
            'unidad_de_medida' => 'required|min:1|max:10',
            'cantidad_ordenada' => 'required|numeric|min:1',
            'existencia_en_almacen' => 'required|numeric|min:0'
        ];
    }
}
