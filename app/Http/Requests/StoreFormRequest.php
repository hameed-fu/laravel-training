<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'name' => 'required|max:20|string|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'password' => 'required',
            'address' => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'name.alpha' => 'Only alhpabetics supported',
            'email.required' => 'A email is required',
        ];
    }
}
