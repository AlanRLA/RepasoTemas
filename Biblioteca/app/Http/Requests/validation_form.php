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
            'nmISBN'=>'numeric|required|integer|digits_between:13,50',
            'txtTitulo'=>'required',
            'txtAutor'=>'required',
            'nmPaginas'=>'numeric|required',
            'txtEditorial'=>'required',
            'emEditorial'=>'email|required',
        ];
    }

    public function messages()
    {
        return[
            'nmISBN'=>'ISBN debe tener mínimo 13 dígitos númericos.',
            'txtTitulo'=>'Debe escribir un título.',
            'txtAutor'=>'Debe escribir un autor.',
            'nmPaginas'=>'Debe indicar la cantidad númerica de páginas.',
            'txtEditorial'=>'Debe escribir una editorial.',
            'emEditorial'=>'El correo no es válido.',
        ];
            
        
    }
}
