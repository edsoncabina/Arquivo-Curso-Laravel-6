<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
            'description' => 'required|unique:posts|max:255',
            'name' => 'required',
            'photo' => 'required|image',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Nome é obrigactório',
            'name.min' => 'Ops! precisa informar 3 caracteres'
        ];
    }
}
