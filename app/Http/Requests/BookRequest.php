<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'nama' => 'required|max:50',
            'penulis' => 'required|max:50',
            'harga' => 'required|integer',
            'stock' => 'required|integer|min:10',
            'category' => 'required',
            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute harus diisi'
        ];
    }
}
