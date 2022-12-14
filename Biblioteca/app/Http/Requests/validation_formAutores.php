<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validation_formAutores extends FormRequest
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
             //Autor
             'txtName'=>'required|min:4',
             'txtDate'=>'required|',
             'nmBooks'=>'required|numeric|digits_between:0,4'
        ];
    }
}
