<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validation_form extends FormRequest
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
            'nmISBN'=>'numeric|required|max:13',
            'txtTitulo'=>'required',
            'txtAutor'=>'required',
            'nmPaginas'=>'numeric|required',
            'txtEditorial'=>'required',
            'emEditorial'=>'email|required',
        ];
    }
}
