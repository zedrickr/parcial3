<?php

namespace parcial2\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
          
          'idtipo_producto'=>'required',
          'nombre'=>'required',
          'descripcion'=>'required|max:150',
          'stock'=>'numeric'
          
        ];
    }
}
