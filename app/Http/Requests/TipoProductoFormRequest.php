<?php

namespace parcial2\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoProductoFormRequest extends FormRequest
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

          
          
          'nombre'=>'required',
          'descripcion'=>'required|max:150',
          

        ];
    }
}
