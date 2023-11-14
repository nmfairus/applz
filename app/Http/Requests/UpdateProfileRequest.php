<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'required|string|max:250',
            'password' => 'nullable|string|min:8|confirmed',
            'no_telefon' => 'nullable|string',
            'jawatan' => 'nullable|string',
            'gred' => 'nullable|string',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'status' => 'nullable|string',
        ];
    }
}
