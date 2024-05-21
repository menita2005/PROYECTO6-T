<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductos extends FormRequest
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
           
                'NombreP'=>'required|min:3',
                'Descripcion'=>'required',
                'Precio'=>'required',
                'stock'=>'required'
        
               
        ];
    }
    public function messages():array
    {
        return[
            'Descripcion.required' => '*La descripcion es obligatoria',
            'NombreP.required' => '*El nombre es obligatorio',
            'Precio.required' => '*El precio es obligatoria',
            'stock.required' => '*El stock es obligatoria'
        ];
    }
}
