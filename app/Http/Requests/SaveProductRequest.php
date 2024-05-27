<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|unique:products',
            'description' => 'required|string|min:5',
            'amount' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ];
    }
}
