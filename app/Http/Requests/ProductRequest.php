<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'brand' => 'required',
            'content' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'due_date' => 'required',
            'cod_cat' => 'required',
            'cod_dt' => 'required',
        ];
    }
}
